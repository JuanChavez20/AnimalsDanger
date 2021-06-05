<?php


	session_start();
	if(!$_SESSION){
		header('Location:../../index.php');
	}

	include_once '../conexion.php';

	$matricula = $_POST['matricula'];
	$nombre = $_POST['nombre'];
	$apellido_paterno = $_POST['apellido_paterno'];
	$apellido_materno = $_POST['apellido_materno'];
	$plantel = $_POST['plantel'];
	$institucion = $_POST['institucion'];
	$promedio_general = $_POST['promedio_general'];
	$promedio_anterior = $_POST['promedio_anterior'];
	$regular = $_POST['regular'];
	$tipo_periodo = $_POST['tipo_periodo'];
	$total_periodos = $_POST['total_periodos'];
	$periodo_actual = $_POST['periodo_actual'];
	$carrera = $_POST['carrera'];
	$grado_academico = $_POST['grado_academico'];
	


		$sentencia = "INSERT INTO registro_ipes VALUES(null, '$matricula', '$nombre','$apellido_paterno', '$apellido_materno', '$plantel', '$institucion', $promedio_general, $promedio_anterior,'$regular', '$tipo_periodo',$total_periodos, $periodo_actual,'$carrera', '$grado_academico')";

		echo json_encode($sentencia);
		
		$resultado = $con->query($sentencia);

		if ($resultado) {
			echo json_encode("Data inserted succefuffy");
			

		}else{
			echo json_encode("We have a problem. Try more later!");

			
		}


		
	

?>