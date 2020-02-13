<?php
	include("conexion.php");
	
	if (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
		isset($_POST['precio']) && !empty($_POST['precio']) &&
		isset($_POST['contrasena']) && !empty($_POST['contrasena'])){

		$con = mysqli_connect($server, $user, $pass, $db);
		mysqli_query($con, ("INSERT INTO producto(nombre, precio, contrasena) VALUES ('$_POST[nombre]', '$_POST[precio]', '$_POST[contrasena]')"));
		echo "Datos insertados correctamente! ";
	}else{
		echo "Error";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>consultar</title>
</head>
<body>
	<form action="consultar.php" method="post">
		<input type="submit" value="Consultar" >
	</form>
</body>
</html>