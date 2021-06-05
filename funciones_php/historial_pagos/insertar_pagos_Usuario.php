<?php

include_once '../conexion.php';

	$concepto = $_POST['concepto'];
	$materia_carrera = $_POST['materia_carrera'];
	$cuatrimestre = $_POST['cuatrimestre'];
	$fecha = $_POST['fecha'];
	$folio_boucher = $_POST['folio_boucher'];
	

	$sentencia = "INSERT INTO pagoscumplidos VALUES (null, '$concepto', '$materia_carrera', '$cuatrimestre', '$fecha', '$folio_boucher', null)";

	$resultado = $con->query($sentencia);
	if($resultado){
		echo json_encode("Data insert Successfully");

	}else{
		echo json_encode("We have a problem. try more later!");
	}
	$conexion->close();



?>