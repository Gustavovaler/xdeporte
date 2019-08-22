<?php

include("header.php");
include("global/conexion2.php");
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM dep_users WHERE email='$usuario'";

$resultado = mysqli_query($conn,$sql);




if ($resultado->num_rows == 0) {
 	header('location: login.php?identificacion=nonexists');
 }else{

	foreach ($resultado as $res) {

		
		if(password_verify($pass, $res['pass'])) {

		//session_start();
		$_SESSION['usuario'] = $usuario;
		//$_SESSION['id_usuario'] = $res['id_vendedor'];
		//$_SESSION['is_admin'] = $res['is_admin'];	
		
		
		
		header('location:index.php');
	}
	else{
		echo "incorrecta";
		header('location: login.php?identificacion=rejected');
	}
	}
}
?>