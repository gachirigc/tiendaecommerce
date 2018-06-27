<!DOCTYPE>
<?php
include("functions/functions.php");
?>
<html>
 		<?php include("header.php");?>

    
    <body>
        <!-- Main Container starts here-->
        <div class="container">
            <!-- Header starts here
            <div class="header_wrapper">
                <img id="logo" src="images/logo.gif"/>
                <img id="banner" src="images/ad-banner.gif"/>
            </div>
             Header ends here-->
            
            <!-- Navegation Bar starts here
            <div class="menubar">
                <ul id="menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">All Products</a></li>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Sign Up</a></li>
                    <li><a href="#">Shopping Cart</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <div id="form">
                        <form method="get" action="results.php" enctype="multipart/form-data">
                            <input type="text" name="user_query" placeholder= "Search a Product"/>
                            <input type="submit" name="search" value="Search"/>
                        </form>
                    </div>
                </ul>

            </div>
            Modificado por Abel Chiriguayo 2018/06/15 gustavo.chiriguayoc@ug.edu.ec
           Navegation Bar ends here -->
            
            <!-- Content starts here-->
            <div class="content_wrapper">
                <div id="sidebar">
                    <div id="sidebar_title">Categorías</div>
                    <ul id="cats">
                        <?php getCats(); ?>
                    </ul>
                    <div id="sidebar_title">Marcas</div>
                    <ul id="cats">
                        <?php getBrands(); ?>
                    </ul>
                </div>
               <!-- <div id="shopping_cart">
                    <span style="float:right; font-size:18px; padding:5px; line-height:40px;">
                        Welcome Guest! <b style="color:yellow">Shopping Cart-</b>Total Items: Total Price: <a href="cart.php" style="color:yellow"> Go to Cart</a>
                    </span>
                </div> -->
                <div id="content_area">
                    
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
                                    <div id='single_product'>
                                        <h5>$pro_title</h5>
                                        <img src='admin_area/product_images/$pro_image' width='400' height='300'/>
                                        <p><b>$ $pro_price </b></p>
                                        <p> $pro_desc </p>
                                        <a href='index.php' style='float:left'>Go Back</a>
                                        <a href='index.php?pro_id=$pro_id'><button style='float:right'>Comprar</button></a>
                                    </div>

                                ";

                            }
                        }
                        ?>
                   
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
