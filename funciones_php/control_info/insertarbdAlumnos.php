<?php

	session_start();
	if(!$_SESSION){
		header('Location:../../index.php');
	}

	include_once '../conexion.php';
	// aqui vamos a sacar los valores del data que tenemos en  de teacher.php asta el final
	
	$nombre = $_POST['nombre'];
	$apellidop = $_POST['apellidop'];
	$apellidom = $_POST['apellidom'];
	$nacimiento = $_POST['nacimiento'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$sexo = $_POST['sexo'];
	$estadocivil = $_POST['estadocivil'];
	$curp = $_POST['curp'];
	$carrera = $_POST['carrera'];
	$cuatrimestre = $_POST['cuatrimestre'];
	$grupo = $_POST['grupo'];
	$egreso = $_POST['egreso'];
	$promedio = $_POST['promedio'];

	// en los values se ponen los valores de arriva 
	$carr = "arqui";
	if($carrera == "Tecnologias de la información"){
		$carr = "TIC";

	}else if ($carrera == "Biotecnologia") {
		$carr = "BIO";
	}else{
		$carr ="GAS";
	}


	$sentenciaid = "SELECT id_alumno FROM registro_alumnos ORDER by id_alumno desc LIMIT 1";
	$resultado1 = $con->query($sentenciaid);
	$fila = $resultado1->fetch_assoc();
	$iddd = intval($fila["id_alumno"])+ 1;
	$matricula = "UTOM"  .$iddd."" .$carr;


	$clave = $nombre[0]. $apellidop[0]. $apellidom[0]. $nacimiento. $carrera;
	$clave_encrip = md5($clave);

		$sentencia = "INSERT INTO registro_alumnos VALUES(null, '$matricula', '$clave_encrip', '$nombre', '$apellidop', '$apellidom', '$nacimiento', '$direccion', '$telefono', '$email', '$sexo', '$estadocivil', '$curp', '$carrera', '$cuatrimestre', '$grupo', '$egreso', '$promedio', 'activo')";
		$resultado = $con->query($sentencia);




		if ($resultado) {
			echo json_encode("Datos insertados correctamente");
			

		}else{
			echo json_encode("Tenemos un problema., intentelo mas tarde...");

			
		}

		
	

?>