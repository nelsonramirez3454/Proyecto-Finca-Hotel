<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>fomulario</title>



</head>
<body>
	<form action="insertar.php" method="POST">
		Nombre: <input required type="text" name="nombre"><br><br>
		Precio: <input required type="text" name="precio"><br><br>
		Contraseña: <input type="password" name="contrasena"><br><br>
		

		<input type="submit" value="Registrar">
	</form>


	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<form action="eliminar.php" method="POST">
		Contraseña: <input type="password" name="contrasena">
		<input type="submit"  value="eliminar" name="eliminar">
	</form>

	<br>
	<br>
	<form action="actualizar.php" method="POST">
		Nombre: <input type="text" name="nombre">
		Precio: <input type="text" name="precio">
		Contraseña: <input type="password" name="contrasena">

		<input type="submit" value="Actualizar" name="actualizar">
	</form>

	<br>
	<br>
	<form action="consultar.php">
		<input type="submit" value="Listar" name="consultar">
	</form>

</body>
</html>