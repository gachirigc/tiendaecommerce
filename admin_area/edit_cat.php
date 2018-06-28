<?php
include("includes/db.php");
if (isset($_GET['edit_cat'])) {
    $cat_id = $_GET['edit_cat'];
    $get_cat = "select * from categories where cat_id='$cat_id'";
    $run_cat = mysqli_query($con, $get_cat);
    $row_cat = mysqli_fetch_array($run_cat);
    $cat_id = $row_cat['cat_id'];
    $cat_title = $row_cat['cat_title'];
}
?>
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#">
                <em class="fa fa-home"></em>
            </a></li>
        <li class="active">Actualización de Categoría</li>
    </ol>
</div>
<div class="row">
    <!--/.col-->

    <div class="col-md-6">


        <div class="panel panel-default">
            <div class="panel-heading">
                Actualización de Categoría:
                <ul class="pull-right panel-settings panel-button-tab-right">
                    <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
                            <em class="fa fa-cogs"></em>
                        </a>
                    </li>
                </ul>
                <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
            <div class="panel-body">
                <form class="form-horizontal" action="" method="post">
                    <fieldset>
                        <!-- Name input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="new_cat">Categoría</label>
                            <div class="col-md-9">
                                <input id="new_cat" name="new_cat" type="text" value="<?php echo $cat_title; ?>" class="form-control" required>
                            </div>
                        </div>

                        <!-- Form actions -->
                        <div class="form-group">
                            <div class="col-md-12 widget-right">
                                <button type="submit" name="update_cat" class="btn btn-default btn-md pull-right">Actualizar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div><!--/.col-->

</div>
<?php
if (isset($_POST['update_cat'])) {
    $update_id = $cat_id;
    $new_cat = $_POST['new_cat'];
    $update_cat = "update categories set cat_title='$new_cat' where cat_id='$update_id'";
    $run_cat = mysqli_query($con, $update_cat);
    if ($run_cat) {

        echo "<script>alert('¡Categoría ha sido actualizada!')</script>";
        echo "<script>window.open('index.php?view_cats','_self')</script>";
    }
}
?>