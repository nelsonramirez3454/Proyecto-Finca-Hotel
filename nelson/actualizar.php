<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>actualizar</title>
</head>
<body>
	<?php
		include("conexion.php");

		$con = mysqli_connect($server, $user, $pass, $db);

		$contrasena = $_POST['contrasena'];
		$nombre = $_POST['nombre'];
		$precio = $_POST['precio'];

		mysqli_query($con, ("UPDATE producto SET nombre='$_POST[nombre]', precio='$_POST[precio]' WHERE contrasena='$_POST[contrasena]'"));
		echo 'Se actualizaron los datos correctamente!';

	?>

</body>
</html>