<!DOCTYPE>
<?php
include("includes/db.php");
if (isset($_GET['edit_pro'])) {
    $get_id = $_GET['edit_pro'];
    $get_pro = "select * from products where product_id='$get_id'";
    $run_pro = mysqli_query($con, $get_pro);
    $i = 0;
    $row_pro = mysqli_fetch_array($run_pro);

    $pro_id = $row_pro['product_id'];
    $pro_title = $row_pro['product_title'];
    $pro_image = $row_pro['product_image'];
    $pro_price = $row_pro['product_price'];
    $pro_desc = $row_pro['product_desc'];
    $pro_keywords = $row_pro['product_keywords'];
    $pro_cat = $row_pro['product_cat'];
    $pro_brand = $row_pro['product_brand'];

    $get_cat = "select * from categories where cat_id='$pro_cat'";
    $run_cat = mysqli_query($con, $get_cat);
    $row_cat = mysqli_fetch_array($run_cat);
    $category_title = $row_cat['cat_title'];
    $get_brand = "select * from brands where brand_id='$pro_brand'";
    $run_brand = mysqli_query($con, $get_brand);
    $row_brand = mysqli_fetch_array($run_brand);
    $brand_title = $row_brand['brand_title'];
}
?>
<html>
    <head>
        <title>Actualizar Productos</title>
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({selector: 'textarea'});</script>
    </head>
    <body>
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Editar y actualizar productos</li>
            </ol>
        </div>
        <div class="row">
            <!--/.col-->
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Editar Producto
                        <ul class="pull-right panel-settings panel-button-tab-right">
                            <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
                                    <em class="fa fa-cogs"></em>
                                </a>
                            </li>
                        </ul>
                        <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
                    <div class="panel-body">
                        <form class="form-horizontal"action="" method="post" enctype="multipart/form-data">
                            <fieldset>
                                <!-- Producto input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="product_title">Nombre</label>
                                    <div class="col-md-9">
                                        <input id="product_title" name="product_title" type="text" value="<?php echo $pro_title; ?>" class="form-control" required>
                                    </div>
                                </div>
                                <!-- Categoria input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="product_cat">Categoría</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="product_cat" required="required">
                                            <option value="$pro_cat"><?php echo $category_title; ?></option>
                                            <?php
                                            global $con;
                                            $get_cats = "select * from categories where cat_id !=" . $pro_cat;
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
                                            <option value ="$pro_brand"><?php echo $brand_title; ?></option>
                                            <?php
                                            $get_brand = "select * from brands where brand_id!=$pro_brand";
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
                                        <input id="product_image" name="product_image" type="file" placeholder="Seleccione archivo" class="form-control" required /><img src="product_images/<?php echo $pro_image; ?>" width="60" height="60" onerror="this.src='../admin_area/product_images/no-featured.jpg';"/>
                                    </div>
                                </div>
                                <!-- Precio input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="product_price">Precio</label>
                                    <div class="col-md-9">
                                        <input id="product_price" name="product_price" type="text" value="<?php echo $pro_price; ?>" class="form-control" required>
                                    </div>
                                </div>
                                <!-- Descripcion input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="product_desc">Descripción</label>
                                    <div class="col-md-9">
                                        <textarea id="product_desc" name="product_desc" cols="20" rows="10" class="form-control" required><?php echo $pro_desc; ?></textarea>
                                    </div>
                                </div>
                                <!-- Tags input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="product_keywords">Palabras clave</label>
                                    <div class="col-md-9">
                                        <input type="text" id="product_keywords" name="product_keywords" value="<?php echo $pro_keywords; ?>" size="50" class="form-control" required/>
                                    </div>
                                </div>
                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 widget-right">
                                        <button type="submit" name="update_product" class="btn btn-default btn-md pull-right">Actualizar</button>
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
if (isset($_POST['update_product'])) {
    //getting the text data from the fields
    $update_id = $pro_id;

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

    $update_product = "update products set product_cat='$product_cat',product_brand='$product_brand',product_title='$product_title',product_price='$product_price',product_desc='$product_desc',product_image='$product_image', product_keywords='$product_keywords' where product_id='$update_id'";

    $run_product = mysqli_query($con, $update_product);

    if ($run_product) {
        echo "<script>alert('¡Producto ha sido actualizado!')</script>";
        echo "<script>window.open('index.php?view_products','_self')</script>";
    }
}
?>