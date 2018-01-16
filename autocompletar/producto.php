<?php
	
	$conexion = new mysqli('localhost','root','','carrito');
	$id = $_POST['id'];
	$consulta = "select producto, precio, vig, empresa, idioma, edad FROM productos WHERE id = '$id'";

	$result = $conexion->query($consulta);
	
	$respuesta = new stdClass();
	if($result->num_rows > 0){
		$fila = $result->fetch_array();
		$respuesta->producto = $fila['producto'];
		$respuesta->precio = $fila['precio'];
		$respuesta->vig = $fila['vig'];
        $respuesta->empresa = $fila['empresa'];
        $respuesta->idioma = $fila['idioma'];
        $respuesta->edad = $fila['edad'];
	}
	echo json_encode($respuesta);

?>