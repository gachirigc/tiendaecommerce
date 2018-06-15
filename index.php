<!DOCTYPE>
<?php
session_start();
include("functions/functions.php");
?>
<html>
    <head>
        <title>My Online Shop</title>
        <link rel="stylesheet" href="styles/style.css" media="all" />
    </head>
    
    <body>
        <!-- Main Container starts here-->
        <div class="main_wrapper">
            <!-- Header starts here-->
            <div class="header_wrapper">
                <a href="index.php"><img id="logo" src="images/UGlogo.png"/></a><!-- El estilo logo se pone con .css-->
                <img id="banner" src="images/ad-banner.gif"/>
            </div>
            <!-- Header ends here-->
            <!-- Modificado por Abel Chiriguayo 2018/06/15 gustavo.chiriguayoc@ug.edu.ec-->
            <!-- Navegation Bar starts here-->
            <div class="menubar">
                <ul id="menu">
                    <li><a href="index.php">Home</a></li>
				    <li><a href="all_products.php">All Products</a></li>
				    <li><a href="customers/my_account.php">My Account</a></li>
				    <li><a href="customer_register.php">Sign Up</a></li>
				    <li><a href="cart.php">Shopping Cart</a></li>
				    <li><a href="contact_us.php">Contact Us</a></li>
                    <div id="form">
                        <form method="get" action="results.php" enctype="multipart/form-data">
                            <input type="text" name="user_query" placeholder= "Search a Product"/>
                            <input type="submit" name="search" value="Search"/>
                        </form>
                    </div>
                </ul>

            </div>
            <!-- Navegation Bar ends here-->
            
            <!-- Content starts here-->
            <div class="content_wrapper">
                <div id="sidebar">
                    <div id="sidebar_title">Categories</div>
                    <ul id="cats">
                        <?php getCats(); ?>
                    </ul>
                    <div id="sidebar_title">Brands</div>
                    <ul id="cats">
                        <?php getBrands(); ?>
                    </ul>
                </div>
                <?php cart(); ?>
                <div id="shopping_cart">
                    <span style="float:right; font-size:18px; padding:5px; line-height:40px;">
                        <?php 
                            if(isset($_SESSION['customer_email'])){
                                echo "<b>Welcome:</b>" . $_SESSION['customer_email'] . "<b style='color:yellow;'>Your</b>" ;
                            }else {
                                echo "<b>Welcome Guest:</b>";
                            }
                        ?>
                        
                        
                        <b style="color:yellow">Shopping Cart-</b>Total Items: <?php total_items(); ?>  Total Price: <?php total_price(); ?><a href="cart.php" style="color:yellow"> Go to Cart</a>
                        
                        <?php 
                            if(!isset($_SESSION['customer_email'])){
                                echo "<a href='checkout.php' style='color:orange;'>Login</a>";
                            }
                            else {
                                echo "<a href='logout.php' style='color:orange;'>Logout</a>";
                            }
                        ?>
                    </span>
                </div>
                <div id="content_area">
                    
                    <div id="products_box">
                        <?php getPro(); ?>
                        <?php getCatPro(); ?>
                        <?php getBrandPro(); ?>
                    </div>
                </div>
            </div>
            <!-- Content ends here-->
            
            <!-- Footer starts here-->
            <div id="footer">
                <h2 style="text-align: center; padding-top: 30px;">&copy;
                    2018 por Grupo Desarrollo de Aplicaciones Web<!-- Modificado por Abel Chiriguayo 2018/06/15 gustavo.chiriguayoc@ug.edu.ec-->
                </h2>
            </div>
	   <div class="footer text-muted text-center">
                        <div class="row">
                            <span class="help-block text-center no-margin">Modificado por Abel Chiriguayo <a mailto="gustavo.chiriguayoc@ug.edu.ec"></a></span>
                            ©2018. Derechos Reservados <a href="http://www.ug.edu.ec"> </a>
                        </div>                    
           </div>
            <!-- Footer ends here-->
        </div>
        <!-- Main Container ends here-->
    </body>
<!-- Modificado por Abel Chiriguayo-->
</html>
