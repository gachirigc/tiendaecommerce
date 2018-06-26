<!DOCTYPE>
<?php
include("functions/functions.php");
?>
<html>
    <head>
        <title>My Online Shop</title>
        <link rel="stylesheet" href="styles/style.css" media="all" />
    </head>

    <body>
      <?php include("header.php");?>
        <!-- Main Container starts here-->


            <!-- Content starts here-->
            <div class="container">
                <div id="sidebar">
                    <div id="sidebar_title"><h2><br>Categorías</h2></div>
                    <ul id="cats">
                        <?php getCats(); ?>
                    </ul>
                    <div id="sidebar_title" style="padding:20px 0 5px 10px"><h2>Marcas</h2></div>
                    <ul id="cats">
                        <?php getBrands(); ?>
                    </ul>
                </div>

                <div id="content_area">
                    <div id="products_box">
                        <?php
                        $get_pro = "select * from products";
                        $run_pro = mysqli_query($con, $get_pro);
                        while($row_pro=mysqli_fetch_array($run_pro)){
                            $pro_id = $row_pro['product_id'];
                            $pro_cat = $row_pro['product_cat'];
                            $pro_brand = $row_pro['product_brand'];
                            $pro_title = $row_pro['product_title'];
                            $pro_price = $row_pro['product_price'];
                            $pro_image = $row_pro['product_image'];
                            echo"
                                <div id='single_product'>
                                    <h5>$pro_title</h5>
                                    <img src='admin_area/product_images/$pro_image' width='180' height='180'/>
                                    <p><b>$ $pro_price </b></p>
                                    <a href='details.php?pro_id=$pro_id' style='float:left'>Detalles</a>
                                    <a href='index.php?pro_id=$pro_id'><button style='float:right'>Comprar</button></a>
                                </div>

                            ";

                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- Content ends here-->

            <!-- Footer starts here-->
            <?php include("footer.php");?>
            <!-- Footer ends here-->
        </div>
        <!-- Main Container ends here-->
    </body>

</html>
