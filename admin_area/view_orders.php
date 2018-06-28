
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#">
                <em class="fa fa-home"></em>
            </a></li>
        <li class="active">Listado de Pedidos</li>
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
                                <th>Correo electrónico del cliente</th>
                                <th>Producto (S)</th>
                                <th>Cantidad</th>
                                <th>Número de factura</th>
                                <th>Fecha del pedido</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("includes/db.php");
                            $get_order = "select * from orders";
                            $run_order = mysqli_query($con, $get_order);
                            $i = 0;

                            while ($row_order = mysqli_fetch_array($run_order)) {
                                $order_id = $row_order['order_id'];
                                $qty = $row_order['qty'];
                                $pro_id = $row_order['p_id'];
                                $c_id = $row_order['c_id'];
                                $invoice_no = $row_order['invoice_no'];
                                $order_date = $row_order['order_date'];
                                $i++;

                                $get_pro = "select * from products where product_id='$pro_id'";
                                $run_pro = mysqli_query($con, $get_pro);

                                $row_pro = mysqli_fetch_array($run_pro);

                                $pro_image = $row_pro['product_image'];
                                $pro_title = $row_pro['product_title'];

                                $get_c = "select * from customers where customer_id='$c_id'";
                                $run_c = mysqli_query($con, $get_c);

                                $row_c = mysqli_fetch_array($run_c);

                                $c_email = $row_c['customer_email'];
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $c_email; ?></td>
                                    <td>
                                        <?php echo $pro_title; ?><br>
                                        <img src="../admin_area/product_images/<?php echo $pro_image; ?>" width="50" height="50" 
                                             onerror="this.src='../admin_area/product_images/no-featured.jpg';"/>
                                    </td>
                                    <td><?php echo $qty; ?></td>
                                    <td><?php echo $invoice_no; ?></td>
                                    <td><?php echo $order_date; ?></td>

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>