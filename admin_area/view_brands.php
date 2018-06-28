
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#">
                <em class="fa fa-home"></em>
            </a></li>
        <li class="active">Listado de Marcas</li>
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
                                <th>ID de marca</th>
                                <th>Título de la marca</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("includes/db.php");
                            $get_brand = "select * from brands";
                            $run_brand = mysqli_query($con, $get_brand);
                            $i = 0;
                            while ($row_brand = mysqli_fetch_array($run_brand)) {
                                $brand_id = $row_brand['brand_id'];
                                $brand_title = $row_brand['brand_title'];
                                $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $brand_title; ?></td>
                                    <td><a href="index.php?edit_brand=<?php echo $brand_id; ?>"><em class="fa fa-edit" style="font-size:28px;color:blue">&nbsp;</em></a><a href="delete_brand.php?delete_brand=<?php echo $brand_id; ?>"><em class="fa fa-trash-o" style="font-size:28px;color:red">&nbsp;</em></a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>