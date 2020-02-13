<?php
	include("conexion.php");
	
	if (isset($_POST['name']) && !empty($_POST['name']) &&
		isset($_POST['lastName']) && !empty($_POST['lastName']) &&
		isset($_POST['document'] && !empty($_POST['document']) &&
		isset($_POST['years'] && !empty($_POST['years']) &&
		isset($_POST['sex'] && !empty($_POST['sex']) )){

		$con = mysqli_connect($server, $user, $pass, $db);
		mysqli_query($con, ("INSERT INTO huespeds(name, lastName, document, years, sex) VALUES ('$_POST[name]', '$_POST[lastName]', '$_POST[document]', '$_POST[years]', '$_POST[sex]')"));
		echo "Datos insertados correctamente! ";
	}else{
		echo "Error";
	}
?>