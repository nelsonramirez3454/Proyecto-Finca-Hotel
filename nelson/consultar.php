<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>consultar</title>
</head>
<body>
	<?php 
		include("conexion.php");

		$con = mysqli_connect($server, $user, $pass, $db);

		$consulta = mysqli_query($con, ("SELECT * FROM producto"));

		echo '<table border=1>';
		echo '<tr>';
		echo '<th id="nombre">Nombre</th>';
		echo '<th id="precio">precio</th>';
		echo '<th id="contrasena">Contraseña</th>';
		echo '<tr>';

		while ($extraido = mysqli_fetch_array($consulta))
		{
			echo '<tr>';
			echo '<td>'.$extraido['nombre'].'</td>';
			echo '<td>'.$extraido['precio'].'</td>';
			echo '<td>'.$extraido['contrasena'].'</td>';
			echo '<tr>';
		}
		echo '</table>';
	?>

</body>
</html>