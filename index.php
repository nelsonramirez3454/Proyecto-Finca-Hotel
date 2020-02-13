<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/styleIndex.css">
	<title>consultar</title>
</head>
<body>

	<div class="table-title">
		<h1>Huespeds</h1>
	</div>
	<?php 
		include("conexion.php");

		$con = mysqli_connect($server, $user, $pass, $db);

		$consulta = mysqli_query($con, ("SELECT * FROM huespeds"));

		echo '<table class="table-fill">';
		echo '<tr>';
		echo '<th id="idHuesped">idHuesped</th>';
		echo '<th id="name">Name</th>';
		echo '<th id="lastName">Last Name</th>';
		echo '<th id="document">Document</th>';
		echo '<th id="years">Years</th>';
		echo '<th id="sex">Sex</th>';
		echo '<tr>';

		while ($extraido = mysqli_fetch_array($consulta))
		{
			echo '<tr>';
			echo '<td>'.$extraido['idHuesped'].'</td>';
			echo '<td>'.$extraido['name'].'</td>';
			echo '<td>'.$extraido['lastName'].'</td>';
			echo '<td>'.$extraido['document'].'</td>';
			echo '<td>'.$extraido['years'].'</td>';
			echo '<td>'.$extraido['sex'].'</td>';

			echo '<tr>';
		}
		echo '</table>';
	?>

	<form action="registro.php">
		<a href="registro.php" class="btnPersonalizado">Add</a>
	</form>

	<form action="#">
		<a href="#" class="btnPersonalizadoDe">Update</a>
	</form>

	<form action="#">
		<a href="#" class="btnPersonalizadoUp">Delete</a>
	</form>
</body>
</html>