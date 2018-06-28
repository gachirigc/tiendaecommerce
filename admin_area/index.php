<?php
session_start();
if (!isset($_SESSION['user_email'])) {
    echo "<script>window.open('login.php?not_admin=No eres un administrador!','_self')</script>";
} else {
    ?>

    <!DOCTYPE html>
    <html class="" lang="es-es">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Este es el Panel de administración</title>
            <link rel="stylesheet" type="text/css"  href="styles/bootstrap/css/bootstrap.min.css" media="all" />
            <link rel="stylesheet" type="text/css"  href="styles/bootstrap/css/font-awesome.min.css" media="all" />
            <link rel="stylesheet" type="text/css"  href="styles/bootstrap/css/datepicker.css" media="all" />
            <link rel="stylesheet" type="text/css"  href="styles/bootstrap/css/styles.css" media="all" />
            <!--link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="all" /-->
            <link rel="stylesheet" type="text/css"  href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" media="all" />
            <link rel="stylesheet" type="text/css"  href="styles/xstyle.css" media="all" />
            <!--Custom Font-->
            <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
            <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
            <![endif]-->
        </head>

        <body>
            <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sidebar-collapse" aria-expanded="true"><span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span></button>
                        <a class="navbar-brand" href="#"><span>WowMart</span>Admin</a>
                    </div>
                </div><!-- /.container-fluid -->
            </nav>

            <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
                <div class="divider"></div>
                <ul class="nav menu">
                    <li class="active"><a href="#"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
                    <li><a href="index.php?insert_product"><em class="fa fa-pencil-square-o">&nbsp;</em>Agregar Producto</a></li>
                    <li><a href="index.php?view_products"><em class="fa fa-sort-amount-asc">&nbsp;</em>Ver Productos</a></li>
                    <li><a href="index.php?insert_cat"><em class="fa fa-pencil-square-o">&nbsp;</em>Agregar Categoría</a></li>
                    <li><a href="index.php?view_cats"><em class="fa fa-sort-amount-asc">&nbsp;</em>Ver Categorías</a></li>
                    <li><a href="index.php?insert_brand"><em class="fa fa-pencil-square-o">&nbsp;</em>Agregar Marca</a></li>
                    <li><a href="index.php?view_brands"><em class="fa fa-tag">&nbsp;</em>Ver Marcas</a></li>
                    <li><a href="index.php?view_customers"><em class="fa fa-address-book-o">&nbsp;</em>Ver Clientes</a></li>
                    <li><a href="index.php?view_orders"><em class="fa fa-shopping-cart">&nbsp;</em>Ver pedidos</a></li>
                    <li><a href="index.php?view_payments"><em class="fa fa-credit-card">&nbsp;</em>Ver pagos</a></li>
                    <li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em>Logout</a></li>
                </ul>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
                <?php
                if (isset($_GET['logged_in'])) {
                    echo "<div class=\"alert bg-success\" role=\"alert\"><em class=\"fa fa-lg fa-warning\">&nbsp;</em> " . $_GET['logged_in'] . "<a href=\"#\" class=\"pull-right\"><em class=\"fa fa-lg fa-close\"></em></a></div>";
                }
                ?>
                <?php
                if (isset($_GET['insert_product'])) {
                    include("insert_product.php");
                }
                if (isset($_GET['view_products'])) {
                    include("view_products.php");
                }
                if (isset($_GET['edit_pro'])) {
                    include("edit_pro.php");
                }
                if (isset($_GET['insert_cat'])) {
                    include("insert_cat.php");
                }
                if (isset($_GET['view_cats'])) {
                    include("view_cats.php");
                }
                if (isset($_GET['edit_cat'])) {
                    include("edit_cat.php");
                }
                if (isset($_GET['insert_brand'])) {
                    include("insert_brand.php");
                }
                if (isset($_GET['view_brands'])) {
                    include("view_brands.php");
                }
                if (isset($_GET['edit_brand'])) {
                    include("edit_brand.php");
                }
                if (isset($_GET['view_customers'])) {
                    include("view_customers.php");
                }
                if (isset($_GET['view_orders'])) {
                    include("view_orders.php");
                }
                if (isset($_GET['view_payments'])) {
                    include("view_payments.php");
                }
                ?>
            </div>
            <div class="col-sm-12">
                <p class="back-link">WowMart<a href="#">s64</a></p>
            </div>
            <!--script src="styles/bootstrap/js/jquery-1.11.1.min.js"></script-->
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
            <script type="text/javascript" src="styles/bootstrap/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="styles/bootstrap/js/chart.min.js"></script>
            <script type="text/javascript" src="styles/bootstrap/js/chart-data.js"></script>
            <script type="text/javascript" src="styles/bootstrap/js/easypiechart.js"></script>
            <script type="text/javascript" src="styles/bootstrap/js/easypiechart-data.js"></script>
            <script type="text/javascript" src="styles/bootstrap/js/bootstrap-datepicker.js"></script>

            <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
            <script type="text/javascript" src="styles/bootstrap/js/custom.js"></script>
            <script type="text/javascript">
                window.onload = function () {
                    var chart1 = document.getElementById("line-chart").getContext("2d");
                    window.myLine = new Chart(chart1).Line(lineChartData, {
                        responsive: true,
                        scaleLineColor: "rgba(0,0,0,.2)",
                        scaleGridLineColor: "rgba(0,0,0,.05)",
                        scaleFontColor: "#c5c7cc"
                    });
                };
            </script>

            <script type="text/javascript">
                $(document).ready(function () {
                    $('#tablaResult').DataTable({
                        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
                    });
                });
            </script>

        </body>
    </html>
    <?php
}
?>