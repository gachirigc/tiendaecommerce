<?php 
include("includes/db.php");
?>
<div id="content_area"> 
	<form method="post" action=""> 
		<table width="500" align="center" bgcolor="skyblue"> 
			<tr align="center">
				<td colspan="3"><h2>Iniciar sesión o registrarse para comprar!</h2></td>
			</tr>
			<tr>
				<td align="right"><b>Correo electrónico:</b></td>
				<td><input type="text" name="email" placeholder="ingrese correo electrónico" required/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Contraseña:</b></td>
				<td><input type="password" name="pass" placeholder="ingrese contraseña" required/></td>
			</tr>
			
			<tr align="center">
				<td colspan="3"><a href="checkout.php?forgot_pass">Se te olvidó tu contraseña?</a></td>
			</tr>
			
			<tr align="center">
				<td colspan="3"><input type="submit" name="login" value="Login" /></td>
            </tr>
        </table> 
			<h2 style="float:right; padding-right:20px;"><a href="customer_register.php" style="text-decoration:none;">¿Nuevo? Registrar aquí</a></h2>
	</form>
	
	<?php
    if(isset($_POST['login'])){
		$c_email = $_POST['email'];
		$c_pass = $_POST['pass'];
		$sel_c = "select * from customers where customer_pass='$c_pass' AND customer_email='$c_email'";
		$run_c = mysqli_query($con, $sel_c);
		$check_customer = mysqli_num_rows($run_c); 
		if($check_customer==0){
            echo "<script>alert('La contraseña o el correo electrónico son incorrectos, intente de nuevo!')</script>";
            exit();
		}
        $ip = getIp(); 
		$sel_cart = "select * from cart where ip_add='$ip'";
		$run_cart = mysqli_query($con, $sel_cart); 
		$check_cart = mysqli_num_rows($run_cart); 
		if($check_customer>0 AND $check_cart==0){
            $_SESSION['customer_email']=$c_email; 
            echo "<script>alert('Has iniciado sesión con éxito, gracias!')</script>";
            echo "<script>window.open('customer/my_account.php','_self')</script>";
		}
		else {
		    $_SESSION['customer_email']=$c_email; 
            echo "<script>alert('Has iniciado sesión con éxito, gracias!')</script>";
            echo "<script>window.open('checkout.php','_self')</script>";
        }
    }
    ?>
</div>
