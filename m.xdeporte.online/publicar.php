<?php 

include('header.php');
include('../global/conexion.php');
if(!isset($_SESSION['usuario'])){
	header('location:login.php');
}else{
	$u = $_SESSION['usuario'];
	$sql_user = "SELECT ID FROM dep_users WHERE email = '$u'";
	$consulta_user = $pdo->prepare($sql_user);
	$consulta_user->execute(array());
	$dev = $consulta_user->fetch();
	$id = $dev['ID'];
}

if(isset($_POST['submit'])){

	$path = rand(1100,99999);
	$titulo = $_POST['titulo'];
	$categoria = $_POST['categoria'];
	$descripcion = $_POST['descripcion'];
	$precio = $_POST['precio'];
	$fecha = $_POST['fecha'];
	$ciudad = $_POST['ciudad'];
	$foto = $_FILES['imagen']['name'];
	$imagen =  "../images/".$path.$foto;

	if($_FILES['imagen']['type'] == 'image/jpeg'){
		if($_FILES['imagen']['size'] <= 2000000){
			
			move_uploaded_file($_FILES['imagen']['tmp_name'] , "../images/".$path.$foto);
	}else{
		echo "<p style='background:red;color:white; font-size:1.5em' >El archivo no puede ser mayor a 2 MB.</p>";
		}
	}
	$sql = "INSERT INTO dep_eventos (titulo,categoria,descripcion,fecha_evento,ciudad,imagen,convocante,precio) VALUES(?,?,?,?,?,?,?,?)";

	$consulta = $pdo->prepare($sql);
	if($consulta->execute([$titulo,$categoria,$descripcion,$fecha,$ciudad,$imagen,$id,$precio])){
		header("location:index.php");
	}else{
		echo "hubo un error";
	}

	}

?>
<link rel="stylesheet" href="css/publicar.css">

<div class="container">
	
<h1>Publicar Evento</h1>
	<div class="row">
		<div class="col-1">
			
		</div>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
			<div class="col-8">
				<label for="">Titulo de tu evento: </label><br>
				<input type="text" class="casilla" name="titulo" required maxlength="50"> <br>
				<hr>
				<label for="">Elige una categoria: </label>
				<select name="categoria" id="">
					<option value="Running">Running</option>
					<option value="Tenis">Tenis</option>
					<option value="Golf">Golf</option>
					<option value="Paddle">Paddle</option>
					<option value="Otro">Otro</option>
				</select>
				<hr>
				<br>
				<label for="">Descripcion detallada: (Opcional)</label>
				<textarea name="descripcion" id="" cols="35" rows="4">
					
				</textarea>
				<hr>
				<label for="">Fecha del Evento:</label>
				<input type="date" class="casilla" name="fecha" required>
				<hr>
				<label for="">Ciudad:</label><br>
				<input type="text" class="casilla" name="ciudad" required>
				<hr>
				<label for="">Precio:</label><br>
				<input type="number" class="casilla" name="precio" >
				<hr>
				<label for="">Elegi una imagen para tu evento:</label>
				<input type="file" name="imagen" required>
				<hr>
				<input type="submit" class="btn btn-block btn-success" value="Publicar evento" name="submit">

			</div>
			

		</form>

	</div>
	<div class="row">
		<div class="col-6">
		<hr>
		</div>
	</div>



</div>


