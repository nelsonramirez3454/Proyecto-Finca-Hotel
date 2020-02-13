 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>eliminar</title>
 </head>
 <body>
 	<?php
 		include("conexion.php");

 		$con = mysqli_connect($server, $user, $pass, $db);

 		$contrasena = $_POST['contrasena'];

 		mysqli_query($con, ("DELETE FROM producto WHERE contrasena='$_POST[contrasena]'"));
 		echo 'DATOS ELIMINADOS';

 	?>
 
 </body>
 </html>