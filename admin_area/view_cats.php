
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#">
                <em class="fa fa-home"></em>
            </a></li>
        <li class="active">Listado de Categorias</li>
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
                                <th>Categoría ID</th>
                                <th>Título de la categoría</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("includes/db.php");
                            $get_cat = "select * from categories";
                            $run_cat = mysqli_query($con, $get_cat);
                            $i = 0;
                            while ($row_cat = mysqli_fetch_array($run_cat)) {
                                $cat_id = $row_cat['cat_id'];
                                $cat_title = $row_cat['cat_title'];
                                $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $cat_title; ?></td>
                                    <td><a href="index.php?edit_cat=<?php echo $cat_id; ?>"><em class="fa fa-edit" style="font-size:28px;color:blue">&nbsp;</em></a><a href="delete_cat.php?delete_cat=<?php echo $cat_id; ?>"><em class="fa fa-trash-o" style="font-size:28px;color:red">&nbsp;</em></a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>