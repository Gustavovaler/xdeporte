<?php 
include('header.php');
include('../global/conexion.php');?>
<link rel="stylesheet" type="text/css" href="css/index.css">
<?php
$deporte = $_GET['deporte'];

$sql = "SELECT * FROM dep_eventos WHERE categoria = '$deporte'  LIMIT 50";

$consulta = $pdo->prepare($sql);
$consulta->execute(array());
$res = $consulta->fetchAll();

	foreach ($res as $row) {?>
	<div class="evento">
		<div class="foto-evento">
			<img src="http://xdeporte.online/<?php echo $row['imagen']; ?>" alt="">
		</div>
		<div class="evento-titulo">
			<h3><a href="evento.php?evento=<?php echo $row['ID']; ?>"><?php echo $row['titulo']; ?></a> </h3>
		</div>
		<div class="cat">
		Categoria: <?php echo $row['categoria']; ?>
		</div>
		<div class="fech">
		Fecha:  <?php echo $row['fecha_evento']; ?>
		</div>      
		
		<div class="ciudad">
			Ciudad: <?php echo $row['ciudad']; ?>
		</div>
		<?php 
									$conv = $row['convocante'];

									$sql_convocante = "SELECT nombre, apellido FROM dep_users WHERE ID = '$conv'";
									$cons= $pdo->prepare($sql_convocante);
									$cons->execute(array());
									$res = $cons->fetch();
									 ?>

		<div class="organizador">
			Convoca: <?php echo ucfirst($res['nombre'])." ".ucfirst($res['apellido']); ?>
		</div>
		<div class="precio">
			Precio: $<?php echo " ".$row['precio']; ?>
		</div>
		
	</div>
<?php }
?>
	
