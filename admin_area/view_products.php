
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#">
                <em class="fa fa-home"></em>
            </a></li>
        <li class="active">Listado de Productos</li>
    </ol>
</div>
<div class="row">
    <!--/.col-->
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">Listado
                <span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span>
            </div>
            <div class="panel-body" style="display: block;">
                <div class="table-responsive">
                    <table id="tablaResult" class="table table-striped table-bordered" style="width:100%" >
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Título</th>
                                <th>Imagen</th>
                                <th>Precio</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("includes/db.php");
                            $get_pro = "select * from products";
                            $run_pro = mysqli_query($con, $get_pro);
                            $i = 0;
                            while ($row_pro = mysqli_fetch_array($run_pro)) {
                                $pro_id = $row_pro['product_id'];
                                $pro_title = $row_pro['product_title'];
                                $pro_image = $row_pro['product_image'];
                                $pro_price = $row_pro['product_price'];
                                $i++;
                                ?>
                                <tr >
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $pro_title; ?></td>
                                    <td><img src="product_images/<?php echo $pro_image; ?>" width="28" height="28" onerror="this.src='../admin_area/product_images/no-featured.jpg';"/></td>
                                    <td><?php echo $pro_price; ?></td>
                                    <td><a href="index.php?edit_pro=<?php echo $pro_id; ?>"><em class="fa fa-edit" style="font-size:28px;color:blue">&nbsp;</em></a><a href="delete_pro.php?delete_pro=<?php echo $pro_id; ?>"><em class="fa fa-trash-o" style="font-size:28px;color:red">&nbsp;</em></a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>