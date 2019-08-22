<?php
include('header.php');
include('../global/conexion.php');

if(isset($_GET['evento'])){
	$evento = $_GET['evento'];

	$sql_evento = "SELECT * FROM dep_eventos WHERE ID='$evento'";
	$consulta = $pdo->prepare($sql_evento);
	$consulta->execute(array());
	$resultado = $consulta->fetch();

}
?>
<style type="text/css">
	.descripcion{
		padding: 10px;
	}
	span, p{
		font-size: 1.2em;
		font-weight: bold;
	}
	#imagen{
		width: 100%;
		margin-bottom: 10px;
	}
	h3{
		color: #6633ff;
	}
</style>

<div class="container">
	<div class="imagen">
		<img src="http://xdeporte.online/<?php echo $resultado['imagen']; ?>" alt="" id="imagen" >
		
	</div>
	<div class="fecha">

		<h6>Fecha del evento:</h6>
		<h4><?php echo $resultado['fecha_evento']; ?></h4><hr>
	</div>
	
	<div class="titulo">
		<h3><?php echo $resultado['titulo']; ?></h3>
	</div>
	<div class="club">
		Ubicacion: <br>
		<?php echo $resultado['club']; ?><br><hr>
	</div>
	<div class="descripcion">
		Descripcion: <br>
		<p><?php echo $resultado['descripcion']; ?></p>
	</div>
	<div class="precio">
		Precio :  <span><?php echo "$ ".$resultado['precio']; ?></span>
	</div>
	
</div>
