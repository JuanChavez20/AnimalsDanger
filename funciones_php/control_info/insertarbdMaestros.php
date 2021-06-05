<?php

	
	

	include_once '../conexion.php';
	// aqui vamos a sacar los valores del data que tenemos en  de teacher.php asta el final
	
	$nombre = $_POST['nombre'];
	$apellidop = $_POST['apellidop'];
	$apellidom = $_POST['apellidom'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$sexo = $_POST['sexo'];
	$especialidad = $_POST['especialidad'];
	

	$clave = $nombre[0]. $apellidop[0]. $apellidom[0]. $sexo[0]. $especialidad;
	$clave_encrip = md5($clave);

		$sentencia = "INSERT INTO registro_maestros VALUES(null, '$nombre', '$apellidop', '$apellidom', '$direccion', '$telefono', '$email', '$clave_encrip', '$sexo', '$especialidad')";
		$resultado = $con->query($sentencia);




		if ($resultado) {
			echo json_encode("Datos insertados correctamente");
			

		}else{
			echo json_encode("Tenemos un problema., intentelo mas tarde...");

			
		}

		
	

?>