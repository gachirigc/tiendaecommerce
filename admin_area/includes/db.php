<?php
$con = mysqli_connect("amazonebay-mysqldbserver.mysql.database.azure.com","mysqldbuser@amazonebay-mysqldbserver","Universidad2018","contactw_ecommerce");
if(mysqli_connect_errno()){
    echo "The Connection was not established: " . mysqli_connect_error();
}
?>
