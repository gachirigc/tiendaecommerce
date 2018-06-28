<?php
include("includes/db.php");
if (isset($_GET['edit_brand'])) {
    $brand_id = $_GET['edit_brand'];
    $get_brand = "select * from brands where brand_id='$brand_id'";
    $run_brand = mysqli_query($con, $get_brand);
    $row_brand = mysqli_fetch_array($run_brand);
    $brand_id = $row_brand['brand_id'];
    $brand_title = $row_brand['brand_title'];
}
?>
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#">
                <em class="fa fa-home"></em>
            </a></li>
        <li class="active">Actualización de Marca</li>
    </ol>
</div>
<div class="row">
    <!--/.col-->

    <div class="col-md-6">


        <div class="panel panel-default">
            <div class="panel-heading">
                Actualización de Marca:
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
                            <label class="col-md-3 control-label" for="new_brand">Marca</label>
                            <div class="col-md-9">
                                <input id="new_brand" name="new_brand" type="text" value="<?php echo $brand_title; ?>" class="form-control" required>
                            </div>
                        </div>

                        <!-- Form actions -->
                        <div class="form-group">
                            <div class="col-md-12 widget-right">
                                <button type="submit" name="update_brand" class="btn btn-default btn-md pull-right">Actualizar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div><!--/.col-->

</div>
                <?php
                if (isset($_POST['update_brand'])) {
                    $update_id = $brand_id;
                    $new_brand = $_POST['new_brand'];
                    $update_brand = "update brands set brand_title='$new_brand' where brand_id='$update_id'";
                    $run_brand = mysqli_query($con, $update_brand);
                    if ($run_brand) {

                        echo "<script>alert('¡La marca ha sido actualizada!')</script>";
                        echo "<script>window.open('index.php?view_brands','_self')</script>";
                    }
                }
                ?>