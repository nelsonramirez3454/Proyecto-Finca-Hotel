
<?php	
	session_start();
?>

<?php
	
	include "conexion.php";
	
	$con = mysqli_connect($server, $user, $pass, $db);

	if ($con->connect_error) {
		die ("la conexion fallo: ". $con->connect_error);
	}
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM  login WHERE username = '$username' AND password = '$password'";

	$result = $con->query($sql);
	
?>