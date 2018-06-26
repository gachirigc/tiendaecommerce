<!DOCTYPE>
<?php
session_start();
include("functions/functions.php");
$rutahome= '';
?>
<html>
    <head>
        <title>Proyecto Desarrollo Web</title>
        <link rel="stylesheet" href="styles/style.css" media="all" />
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
    </head>
    
    <body>
		<?php include("header.php");?>
	   <!-- Main Container starts here-->
        <div class="container">
            
            <!-- Modificado por Abel Chiriguayo 2018/06/15 gustavo.chiriguayoc@ug.edu.ec-->
            <!-- Navegation Bar starts here
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
            
			
			
			
			<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop01.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Pantallas<br>Laptop</h3>
								<a href=" <?php echo $rutahome; ?>/index.php?cat=18" class="cta-btn">Ver más <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop03.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Audífonos<br>Stereo</h3>
								<a href="<?php echo $rutahome; ?>/index.php?cat=9" class="cta-btn">Ver más <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop02.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Cámaras de<br>Video</h3>
								<a href="<?php echo $rutahome; ?>/index.php?cat=4" class="cta-btn">Ver más <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
			
			
			
			
            <!-- Content starts here-->
            <div class="content_wrapper">
                <div id="sidebar">
                    <div id="sidebar_title"><h3>CATEGORÍAS</h3></div>
                    <ul id="cats">
                        <?php getCats(); ?>
                    </ul>
                    <div id="sidebar_title"><h3>MARCAS</h3></div>
                    <ul id="cats">
                        <?php getBrands(); ?>
                    </ul>
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
            <?php include("footer.php");?>
            <!-- Footer ends here-->
        </div>
        <!-- Main Container ends here-->
    </body>
	
	<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
<!-- Modificado por Abel Chiriguayo-->
</html>
