<?php
	include_once '../conexion.php';
	// aqi vamos a sacr los valores del data que tenemos en  de teacher.php asta el final
	$nombre = $_POST['nombre'];
	$telefono = $_POST['telefono'];
	
	$taller = $_POST['taller'];
	$carreracuatrimestre = $_POST['carreracuatrimestre'];
	

	// en los values se ponen los valores de arriva 

		$sentencia = "INSERT INTO talleres VALUES(null, '$nombre', '$telefono','$taller','activo','$carreracuatrimestre')";
		
		$resultado = $con->query($sentencia);
		if ($resultado) {
			echo json_encode("Data inserted succefuffy");
			

		}else{
			echo json_encode("We have a problem. Try more later!");

			
		}

		
	

?>