<?php
	include_once '../conexion.php';
	// aqi vamos a sacr los valores del data que tenemos en  de estrasyUA.php asta el final

	$fechaT = $_POST['fechas'];
	$carreraT = $_POST['carrera'];
	$materiaT = $_POST['materia'];
	$cuatrimestreT = $_POST['cuatrimestre'];
	

	// en los values se ponen los valores de arriva 

		$sentencia = "INSERT INTO extras VALUES(null, '$fechaT', '$carreraT', '$materiaT', '$cuatrimestreT', 'pendiente')";

		
		$resultado = $con->query($sentencia);
		if ($resultado) {
			echo json_encode("Data inserted succefuffy");
			

		}else{
			echo json_encode("We have a problem. Try more later!");

			
		}

		
	

?>