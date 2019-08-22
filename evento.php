<?php
include('header.php');
include('global/conexion.php');

if(isset($_GET['evento'])){
	$evento = $_GET['evento'];


	$sql_evento = "SELECT * FROM dep_eventos WHERE ID='$evento'";
	$consulta = $pdo->prepare($sql_evento);
	$consulta->execute(array());
	$resultado = $consulta->fetch();

}
?>
<style type="text/css">
	.container{
		margin-top: 50px;
		margin-bottom: 50px;
	}
	.descripcion{
		padding: 10px;
	}
	span, p{
		font-size: 1.2em;
		font-weight: bold;
	}
	#imagen{
		width: 600px;
		margin-bottom: 10px;
	}
	h3{
		color: #6633ff;
	}
	.acciones{
		padding: 20px;
		font-size: 1.2em;
	}
	#side-right{
		background: #fef2fe;
	}
	#likes{
		color: #3399ff;
	}
	#f{
		display: none;
	}
	.ficha-convocante{
		padding: 20px;
	}
	.ficha-convocante td{
		padding: 5px;
	}
</style>

<div class="container">
	<div class="row">
		<div class="col-8">
	<div class="imagen">

		<img src="<?php echo $resultado['imagen']; ?>" alt="" id="imagen" ><!--http://xdeporte.online/-->
		
	</div>
</div>
<div class="col-4" id="side-right">
	<div class="ficha-convocante">
		<?php 
		$convocante = $resultado['convocante'];
		$sql_convocante = "SELECT * FROM dep_users WHERE ID='$convocante'";
		$con = $pdo->prepare($sql_convocante);
		$con->execute(array());
		$res = $con->fetch();	
		
		 ?>
		 <table>
		 	<tr>
		 		<td>Nombre: </td><td><?php echo ucfirst($res['nombre']." "); echo ucfirst($res['apellido']); ?></td>
		 	</tr>
		 	<tr>
		 		<td>Club: </td><td><?php echo ucfirst($res['club']); ?></td>
		 	<tr>
		 		<td>Ciudad: </td><td><?php echo ucfirst($res['ciudad']); ?></td>
		 	</tr>
		 </table>
		
	</div>
	<div class="acciones">
		<span>Me Gusta</span><br>
		<a href="">Quiero participar</a>
	</div>
</div>
</div>
	<div class="fecha">

		<h6>Fecha del evento:</h6>
		<h4><?php echo $resultado['fecha_evento'];?></h4><span id="likes"><?php echo "Likes: ".$resultado['likes']; ?></span><hr>
	</div>
	
	<div class="titulo">
		<h3><?php echo $resultado['titulo']; ?></h3>
	</div>
	<div class="club">
		Ubicacion: <br>
		<?php echo $resultado['ciudad']; ?><br><hr>
	</div>
	<div class="descripcion">
		Descripcion: <br>
		<p><?php echo $resultado['descripcion']; ?></p>
	</div>
	<div class="precio">
		Precio :  <span><?php echo "$ ".$resultado['precio']; ?></span>
	</div>
	
</div>
<div id="f">
	
</div>
<script type="text/javascript">

</script>