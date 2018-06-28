
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#">
                <em class="fa fa-home"></em>
            </a></li>
        <li class="active">Listado de Clientes</li>
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
                        <tbody>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Correo electrónico</th>
                                <th>Imagen</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("includes/db.php");
                            $get_c = "select * from customers";
                            $run_c = mysqli_query($con, $get_c);
                            $i = 0;
                            while ($row_c = mysqli_fetch_array($run_c)) {
                                $c_id = $row_c['customer_id'];
                                $c_name = $row_c['customer_name'];
                                $c_email = $row_c['customer_email'];
                                $c_image = $row_c['customer_image'];
                                $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $c_name; ?></td>
                                    <td><?php echo $c_email; ?></td>
                                    <td><img src="../customers/customer_images/<?php echo $c_image; ?>" width="50" height="50"/></td>
                                    <td><a href="delete_c.php?delete_c=<?php echo $c_id; ?>"><em class="fa fa-trash-o" style="font-size:36px;color:red">&nbsp;</em></a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>