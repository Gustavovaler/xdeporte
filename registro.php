<?php 
include('header.php');
include('global/conexion.php');

if(isset($_POST['submit'])){

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$pais = $_POST['pais'];
	$ciudad = $_POST['ciudad'];
	$pass = $_POST['pass'];
	$password= password_hash($pass, PASSWORD_BCRYPT);
	$club = $_POST['club'];

	$sql = "INSERT INTO dep_users (nombre,apellido,email,telefono,pais,ciudad,club,pass) VALUES (?,?,?,?,?,?,?,?)";


	$consulta  = $pdo->prepare($sql);

	if($consulta->execute([$nombre,$apellido,$email,$telefono,$pais,$ciudad,$club,$password])){
		echo "guardado";

	}else{
		"Hubo un error";
	}
	
}

?>
<style>
	.container{
		
	}
	input:focus{
		background: #eeeeee;
	}
	span{
		color: red;
	}
	.sub{
		float: right;
	}
</style>
<div class="container">
	
<h1>Registro</h1>
	<div class="row">
		<div class="col-1">
			
		</div>
		<div class="col-3">
			<form action="#" method="POST">
				<label for="">Nombre: <span>*</span></label><br>
				<input type="text" required name="nombre">		
		</div>
		<div class="col-3">
			<form action="">
				<label for="">Apellido: <span>*</span></label><br>
				<input type="text" required name="apellido">		
		</div>

	
	</div>
	<div class="row">
		<div class="col-1">
			
		</div>
		<div class="col-3">
			<form action="">
				<label for="">Email: <span>*</span></label><br>
				<input type="email" required name="email">		
		</div>
		<div class="col-3">
			<form action="">
				<label for="">Telefono:</label><br>
				<input type="text" name="telefono">		
		</div>

	
	</div>
	<div class="row">
		<div class="col-1">
			
		</div>
		<div class="col-3">
			
				<label for="">Pais: <span>*</span></label><br>
				<input type="text" required name="pais">		
		</div>
		<div class="col-3">
			<form action="">
				<label for="">Ciudad: <span>*</span></label><br>
				<input type="text" required name="ciudad">		
		</div>

	
	</div>
	<div class="row">
		<div class="col-1">
			
		</div>
		<div class="col-3">
			
				<label for="">Club:</label><br>
				<input type="text" name="club">		
		</div>
		<div class="col-3">
			<form action="">
				<label for="">Contraseña: <span>*</span></label><br>
				<input type="password" required name="pass">		
		</div>

	
	</div>
	<div class="row">
		<div class="col-1">
			
		</div>
		<div class="col-2">
			
		</div>
		<div class="col-3">
			<br>
			<input type="submit" class="btn btn-block btn-primary" value="Registrarme" name="submit">
		</div>
		

	
	</div>






</form>
</div>
