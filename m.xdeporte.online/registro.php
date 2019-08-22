<?php 
include('header.php');
include('../global/conexion.php');

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
	.sub-contenedor{
		padding: 10px;
	}
	input{
		float: right;
		font-size: 1.3em;
	}
	label{
		font-size: 1.3em;
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
	<div class="sub-contenedor">
		<form action="#" method="POST">
		
			
				<label for="">Nombre: <span>*</span></label>
				<input type="text" required name="nombre">	<br>	
		
				<label for="">Apellido: <span>*</span></label>
				<input type="text" required name="apellido"><br>		

		
				<label for="">Email: <span>*</span></label>
				<input type="email" required name="email">	<br>	
				<label for="">Telefono:</label>
				<input type="text" name="telefono">	<br>	
			
				<label for="">Pais: <span>*</span></label>
				<input type="text" required name="pais"><br>		
		
				<label for="">Ciudad: <span>*</span></label>
				<input type="text" required name="ciudad">	<br>			
				<label for="">Club:</label>
				<input type="text" name="club"><br>	
				<label for="">Contraseña: <span>*</span></label>
				<input type="password" required name="pass"><br>	<br><hr>	


	
	
			<br>
			<input type="submit" class="btn btn-block btn-primary" value="Registrarme" name="submit">
		
		

	
	</div>






</form>
</div>
