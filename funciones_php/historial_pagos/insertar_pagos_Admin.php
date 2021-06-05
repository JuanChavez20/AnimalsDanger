<?php

include_once '../conexion.php';

	$concepto = $_POST['concepto'];
	$carrera = $_POST['carrera'];
	$cuatrimestre = $_POST['cuatrimestre'];
	$fecha = $_POST['fecha'];
	$cantidad = $_POST['cantidad'];
	

	$sentencia = "INSERT INTO registroadmin VALUES (null, '$concepto', '$carrera', '$cuatrimestre', '$fecha', '$cantidad')";

	$resultado = $con->query($sentencia);
	if($resultado){
		echo json_encode("Data insert Successfully");

	}else{
		echo json_encode("We have a problem. try more later!");
	}
	$conexion->close();



?>