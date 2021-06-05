<?php
	include_once '../conexion.php';
	// aqi vamos a sacr los valores del data que tenemos en  de teacher.php asta el final
	$matricula = $_POST['matricula'];
	$email = $_POST['email'];
	$carrera = $_POST['carrera'];
	$cuatrimestre = $_POST['cuatrimestre'];
	$no_folio = $_POST['no_folio'];

	// en los values se ponen los valores de arriva 

		$sentencia = "INSERT INTO reinscripcion VALUES(null, '$matricula', '$email', '$carrera', '$cuatrimestre', '$no_folio', 'activo')";
		

		
		$resultado = $con->query($sentencia);
		if ($resultado) {
			echo json_encode("Insercion de datos: Correcta!");
			

		}else{
			echo json_encode("We have a problem. Try more later!");

			
		}

		
	

?>