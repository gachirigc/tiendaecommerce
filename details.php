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
        <div class="container">
            
            
            <!-- Content starts here-->
            <div class="content_wrapper">
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
                <div id="content_area" style="padding: 35px 50px;">
                    
                        <?php
                        if(isset($_GET['pro_id'])){
                            $product_id = $_GET['pro_id'];
                            $get_pro = "select * from products where product_id='$product_id'";
                            $run_pro = mysqli_query($con, $get_pro); 
                            while($row_pro=mysqli_fetch_array($run_pro)){
                                $pro_id = $row_pro['product_id'];
                                $pro_title = $row_pro['product_title'];
                                $pro_price = $row_pro['product_price'];
                                $pro_image = $row_pro['product_image'];
                                $pro_desc = $row_pro['product_desc'];
                                echo"
									<a href='index.php' style='float:left'> < Regresar</a><br>
									<div class='row'>
									<br><br>
										<div class='col-md-5'>
											<img src='admin_area/product_images/$pro_image' width='100%' height='300'/>
										</div> 
										<div class='col-md-7'>
											<h2>Producto $pro_title</h2>
											<p><b>$ $pro_price </b></p>
											<p> $pro_desc </p><br>
											<!-- <a href='index.php?pro_id=$pro_id'><button style='float:right'>Comprar</button></a>-->
								                        <a href='index.php?add_cart=$pro_id'><button style='float:right'>Comprar</button></a>
									</div>                                 
                                    </div>

                                ";

                            }
                        }
                        ?>
                   
                </div>
            </div>
            <!-- Content ends here-->
            
            <!-- Footer starts here-->
            
            <!-- Footer ends here-->
        </div>
        <!-- Main Container ends here-->
    </body>

</html>
