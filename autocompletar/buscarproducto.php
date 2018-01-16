<?php

$conexion = new mysqli('localhost','root','','carrito');
$id = $_GET['term'];
$consulta = "select id FROM productos WHERE id LIKE '%$id%'";

$result = $conexion->query($consulta);

if($result->num_rows > 0){
	while($fila = $result->fetch_array()){
		$ids[] = $fila['id'];
	}
	echo json_encode($ids);
}

?>