<?php 
include('header.php');
include('global/conexion.php');
?>
<link rel="stylesheet" href="css/index.css">
<div class="container">
	<?php

$deporte = $_GET['deporte'];

$sql = "SELECT * FROM dep_eventos WHERE categoria = '$deporte'  LIMIT 50";

$consulta = $pdo->prepare($sql);
$consulta->execute(array());
$res = $consulta->fetchAll();

foreach ($res as $row) {?>
		<!---------------------------------------------------------------------->
		<div class="row">
			<div class="col-2 fila">
				<div class="img-evento-box">
						<img src="<?php echo $row['imagen']; ?>" alt="imagen del evento" class="img-evento">
				</div>
			</div>	
			<div class="col-6 fila">
					
					<div class="descripcion-evento">
						<p class="descripcion-text">
							<a href="evento.php?evento=<?php echo $row['ID']; ?>"><?php echo $row['titulo']; ?></a>
						</p>
						
							<div class="tabla">
							<table>
								<tr>
									<td class="celda"><b>Ciudad</b></td>
									<td class="celda"><b>Fecha</b></td>
									<td class="celda"><b>Categoria</b></td>
									<td class="celda"><b>Convoca</b></td>
									<td class="celda"><b>Precio</b></td>
								</tr>
								<tr>
									<td class="celda"><?php echo $row['ciudad']; ?></td>
									<td class="celda"><?php echo $row['fecha_evento']; ?></td>
									<td class="celda"><?php echo $row['categoria']; ?></td>
									<?php 
									$conv = $row['convocante'];

									$sql_convocante = "SELECT nombre, apellido FROM dep_users WHERE ID = '$conv'";
									$cons= $pdo->prepare($sql_convocante);
									$cons->execute(array());
									$res = $cons->fetch();
									 ?>


									<td class="celda"><?php echo ucfirst($res['nombre'])." ".ucfirst($res['apellido']); ?></td>
									<td class="celda">$<?php echo " ".$row['precio']; ?></td>
								</tr>
							</table>
						</div>
						
					</div>
			</div>
			<div class="col-3">
				
			
			</div>	
			
		</div>
		<?php
	} ?>
		<!-------------------------------------------------------------------------------->
	
	</div>
</body>
</html>