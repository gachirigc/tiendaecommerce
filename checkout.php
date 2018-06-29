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
        <?php include("header.php");?>
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
                <?php cart(); ?>
                <div id="content_area">                    
                    <div >
                        <?php 
                        if(!isset($_SESSION['customer_email'])){
                            include("customer_login.php");
                        }else {
                            <div id="products_box"> 
                            include("payment.php");
                            </div>
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- Content ends here-->            
            <!-- Footer starts here-->
            <!-- Footer ends here-->
        <!-- Main Container ends here-->
    </body>

</html>
