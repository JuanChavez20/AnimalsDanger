<?php
	include_once 'conexion.php';
	// aqi vamos a sacr los valores del data que tenemos en  de teacher.php asta el final
	$nombre = $_POST['nombre'];
	$apellidop = $_POST['apellidop'];
	$apellidom = $_POST['apellidom'];
	$curp2 = $_POST['curp'];
	$seguro2 = $_POST['seguro'];
	$direccion2 = $_POST['direccion'];
	$estudiosprevios2 = $_POST['eprevios'];
	$tipodesangre2 = $_POST['tipos'];
	$tel2 = $_POST['telefonoT'];	
	$email2 = $_POST['email'];	
	$nomytel2 = $_POST['nya'];
	$telauto2 = $_POST['telefonoTa'];
	$carrera2 = $_POST['carrera'];

	// en los values se ponen los valores de arriva 

		$sentencia = "INSERT INTO solicitudficha VALUES(null, '$nombre', '$apellidop', '$apellidom', '$curp2', '$seguro2', '$direccion2', '$estudiosprevios2', '$tipodesangre2', '$tel2', '$email2', '$nomytel2', '$telauto2', '$carrera2', 'activo')";

		
		$resultado = $con->query($sentencia);
		if ($resultado) {
			echo json_encode("Data inserted succefuffy");			

		}else{
			echo json_encode("We have a problem. Try more later!");			
		}	

?>