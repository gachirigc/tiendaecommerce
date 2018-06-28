<div class="row">
    <ol class="breadcrumb">
        <li><a href="#">
                <em class="fa fa-home"></em>
            </a></li>
        <li class="active">Ingresar Nueva Marca</li>
    </ol>
</div>
<div class="row">
    <!--/.col-->

    <div class="col-md-6">


        <div class="panel panel-default">
            <div class="panel-heading">
                Nueva Marca
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
                            <label class="col-md-3 control-label" for="name">Nombre</label>
                            <div class="col-md-9">
                                <input id="new_brand" name="new_brand" type="text" placeholder="Marca" class="form-control" required>
                            </div>
                        </div>

                        <!-- Form actions -->
                        <div class="form-group">
                            <div class="col-md-12 widget-right">
                                <button type="submit" name="add_brand" class="btn btn-default btn-md pull-right">Grabar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div><!--/.col-->

</div>

<?php
include("includes/db.php");
if (isset($_POST['add_brand'])) {
    $new_brand = $_POST['new_brand'];
    $insert_brand = "insert into brands (brand_title) values ('$new_brand')";
    $run_brand = mysqli_query($con, $insert_brand);
    if ($run_brand) {
        echo "<script>alert('Nueva marca ha sido insertada!')</script>";
        echo "<script>window.open('index.php?view_brands','_self')</script>";
    }
}
?>
