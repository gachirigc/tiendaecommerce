<?php
include("includes/db.php");
?>
<!DOCTYPE html>
<html class="" lang="es-es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Insertar producto</title>
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({selector: 'textarea'});</script>
    </head>
    <body>
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Ingresar Nuevo Producto</li>
            </ol>
        </div>
        <div class="row">
            <!--/.col-->
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Nueva Producto
                        <ul class="pull-right panel-settings panel-button-tab-right">
                            <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
                                    <em class="fa fa-cogs"></em>
                                </a>
                            </li>
                        </ul>
                        <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="insert_product.php" method="post" enctype="multipart/form-data">
                            <fieldset>
                                <!-- Producto input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="product_title">Nombre</label>
                                    <div class="col-md-9">
                                        <input id="product_title" name="product_title" type="text" placeholder="Producto" class="form-control" required>
                                    </div>
                                </div>
                                <!-- Categoria input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="product_cat">Categoría</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="product_cat" required="required">
                                            <option>Seleccione una categoría</option>
                                            <?php
                                            global $con;
                                            $get_cats = "select * from categories";
                                            $run_cats = mysqli_query($con, $get_cats);
                                            while ($row_cats = mysqli_fetch_array($run_cats)) {
                                                $cat_id = $row_cats['cat_id'];
                                                $cat_title = $row_cats['cat_title'];
                                                echo "<option value='$cat_id'>$cat_title</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- Marca input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="product_brand">Marca</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="product_brand" required="required">
                                            <option>Seleccione una marca</option>
                                            <?php
                                            $get_brand = "select * from brands";
                                            $run_brand = mysqli_query($con, $get_brand);
                                            while ($row_brand = mysqli_fetch_array($run_brand)) {
                                                $brand_id = $row_brand['brand_id'];
                                                $brand_title = $row_brand['brand_title'];
                                                echo "<option value='$brand_id'>$brand_title</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- Imagen input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="product_image">Imagen</label>
                                    <div class="col-md-9">
                                        <input id="product_image" name="product_image" type="file" placeholder="Seleccione archivo" class="form-control" required/>
                                    </div>
                                </div>
                                <!-- Precio input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="product_price">Precio</label>
                                    <div class="col-md-9">
                                        <input id="product_price" name="product_price" type="text" placeholder="Precio" class="form-control" required>
                                    </div>
                                </div>
                                <!-- Descripcion input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="product_desc">Descripción</label>
                                    <div class="col-md-9">
                                        <textarea id="product_desc" name="product_desc" cols="20" rows="10" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <!-- Tags input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="product_keywords">Palabras clave</label>
                                    <div class="col-md-9">
                                        <input type="text" id="product_keywords" name="product_keywords" placeholder="Palabras clave" size="50" class="form-control" required/>
                                    </div>
                                </div>
                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 widget-right">
                                        <button type="submit" name="insert_post" class="btn btn-default btn-md pull-right">Grabar</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div><!--/.col-->
        </div>
    </body>
</html>
<?php
if (isset($_POST['insert_post'])) {
    //getting the text data from the fields
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $product_brand = $_POST['product_brand'];
    $product_price = $_POST['product_price'];
    $product_desc = $_POST['product_desc'];
    $product_keywords = $_POST['product_keywords'];

    //getting the image from the field
    $product_image = $_FILES["product_image"]["name"];
    $product_image_tmp = $_FILES["product_image"]["tmp_name"];
    $filepath = "product_images/" . $product_image;

    move_uploaded_file($product_image_tmp, $filepath);

    $insert_product = "insert into products (product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords) values ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";

    $insert_pro = mysqli_query($con, $insert_product);
    if ($insert_pro) {
        echo "<script>alert('producto ha sido insertado')</script>";
        echo "<script>window.open('index.php?insert_product','_self')</script>";
    }
}
?>