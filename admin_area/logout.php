<?php

session_start();
session_destroy();
echo "<script>window.open('login.php?logged_out=¡Has cerrado la sesión, regresa pronto!','_self')</script>";
?> 