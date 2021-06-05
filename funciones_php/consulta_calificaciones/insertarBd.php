<?php




	include_once '../conexion.php';
	// aqi vamos a sacr los valores del data que tenemos en  de teacher.php asta el final
	$nombre = $_POST['nombre'];
	$materia = $_POST['materia'];
	$calificacion = $_POST['calificacion'];
	
	$competencia = $_POST['competencia'];
	

	// en los values se ponen los valores de arriva 

		$sentencia = "INSERT INTO consultar VALUES(null, '$nombre', '$materia', '$calificacion', '$competencia', 'activo')";

		
		$resultado = $con->query($sentencia);
		if ($resultado) {
			echo json_encode("Data inserted succefuffy");
			

		}else{
			echo json_encode("We have a problem. Try more later!");

			
		}

		
	

?>