<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>formulario</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<p class="texto">Registro</p>
	<div class="Registro">

	<form action="insertar.php" method="POST">

		<span class="fontawesome-user"></span>
		<input type="text" name="nombre" required placeholder="Nombre de usuario" autocomplete="off"> 
		<span class="fontawesome-user"></span>
		<input type="text" name="documento" required placeholder="Documento"  autocomplete="off"> 
		<span class="fontawesome-user"></span>
		<input type="text" name="edad" required placeholder="Edad"  autocomplete="off"> 
		


		<span class="fontawesome-lock"></span>
		<input type="password" name="Contrasena"  required placeholder="Contraseña" autocomplete="off"> 

		
		<input type="submit" value="Registrar" name="registrar">
	</form>

</body>
</html>