<?php
	include("conexion.php");
	
	if (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
		isset($_POST['documento']) && !empty($_POST['documento']) &&
		isset($_POST['edad']) && !empty($_POST['edad']) &&
		isset($_POST['contrasena']) && !empty($_POST['contrasena'])){

		$con = mysqli_connect($server, $user, $pass, $bd);
		mysqli_query($con, "INSERT INTO usuarios (nombre, documento, edad, contrasena) VALUES ('$_POST[nombre]', '$_POST[documento]', '$_POST[edad]', '$_POST[contrasena]')");

		echo 'datos insertados!';
	}else{
		echo '<script language="javascript">alert("Error");</script>';
	}
?>

