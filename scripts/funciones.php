<?php
include('../global/conexion.php');


function sumLike($num_publicacion,$conector){
	$sql = "UPDATE dep_eventos SET likes=likes+1 WHERE ID='$num_publicacion'";
	$consulta = $conector->prepare($sql);
	$consulta->execute(array());

}

