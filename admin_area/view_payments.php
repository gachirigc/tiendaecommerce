
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#">
                <em class="fa fa-home"></em>
            </a></li>
        <li class="active">Listado de Pagos</li>
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
                                <th>Email</th>
                                <th>Producto (S)</th>
                                <th>Monto pagado</th>
                                <th>ID de transacción</th>
                                <th>Fecha de pago</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("includes/db.php");
                            $get_payment = "select * from payments";
                            $run_payment = mysqli_query($con, $get_payment);
                            $i = 0;

                            while ($row_payment = mysqli_fetch_array($run_payment)) {

                                $amount = $row_payment['amount'];
                                $trx_id = $row_payment['trx_id'];
                                $payment_date = $row_payment['payment_date'];
                                $pro_id = $row_payment['product_id'];
                                $c_id = $row_c['customer_id'];

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
                                <tr align="center">
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $c_email; ?></td>
                                    <td>
                                        <?php echo $pro_title; ?><br>
                                        <img src="../admin_area/product_images/<?php echo $pro_image; ?>" width="50" height="50" />
                                    </td>
                                    <td><?php echo $amount; ?></td>
                                    <td><?php echo $trx_id; ?></td>
                                    <td><?php echo $payment_date; ?></td>

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>