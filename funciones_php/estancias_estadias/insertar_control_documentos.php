<?php
	include_once '../conexion.php';
	// aqi vamos a sacr los valores del data que tenemos en  de teacher.php asta el final
	$nombre = $_POST['nombre'];
	
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];

	// en los values se ponen los valores de arriva 

		$sentencia = "INSERT INTO documentos VALUES(null, '$nombre', '$telefono', '$email', '$direccion', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'vinculado')";

		
		$resultado = $con->query($sentencia);
		if ($resultado) {
			echo json_encode("Data inserted succefuffy");
			

		}else{
			echo json_encode("We have a problem. Try more later!");

			
		}

		
	

?>