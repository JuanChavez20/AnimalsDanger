<?php
	include_once '../conexion.php';
	// aqui vamos a sacar los valores del data que tenemos en  de teacher.php asta el final


	$primera_opcion = $_POST['primera_opcionT'];
	$segunda_opcion = $_POST['segunda_opcionT'];
	$tercera_opcion = $_POST['tercera_opcionT'];
	$nombre_personal = $_POST['nombre_personalT'];
	$apellidop = $_POST['apellidopT'];
	$apellidom = $_POST['apellidomT'];
	$estado_nacimiento = $_POST['estado_nacimientoT'];
	$municipio_nacimiento = $_POST['municipio_nacimientoT'];
	$localidad_nacimiento = $_POST['localidad_nacimientoT'];
	$fecha_nacimiento = $_POST['fecha_nacimientoT'];
	$Sexo = $_POST['SexoT'];
	$estado_civil = $_POST['estado_civilT'];
	$personas_que_dependen_de_ti = $_POST['personas_que_dependen_de_tiT'];
	$tipo_sangre = $_POST['tipo_sangreT'];
	$numero_seguridad_social = $_POST['numer_seguridad_socialT'];
	$enfermedad_conica = $_POST['enfermedad_conicaT'];
	$enfermedad_respuesta = $_POST['enfermedad_respuestaT'];
	$discapacidad = $_POST['discapacidadT'];
	$instancia_medica = $_POST['instancia_medicaT'];
	$lenguas_indigenas = $_POST['lenguas_indigenasT'];
	$trabajas_actualmente = $_POST['trabajas_actualmenteT'];
	$nombre_padre_tutor = $_POST['nombre_padre_tutorT'];
	$telefono_padre_tutor = $_POST['telefono_padre_tutorT'];
	$calle = $_POST['calleT'];
	$numero_casa = $_POST['numero_casaT'];
	$codigo_postal = $_POST['codigo_postalT'];
	$colonia_contacto = $_POST['colonia_contactoT'];
	$localidad_contacto = $_POST['localidad_contactoT'];
	$municipio_contacto = $_POST['municipio_contactoT'];
	$estado_contacto = $_POST['estado_contactoT'];
	$telefono_contacto = $_POST['telefono_contactoT'];
	$celular_contacto = $_POST['celular_contactoT'];
	$email_contacto = $_POST['email_contactoT'];
	$escuela_egreso_escolar = $_POST['escuela_egreso_escolarT'];
	$estado_escolar = $_POST['estado_escolarT'];
	$municipio_escolar = $_POST['municipio_escolarT'];
	$Localidad_escolar = $_POST['Localidad_escolarT'];
	$año_bachillerato_inicio_escolar = $_POST['año_bachillerato_inicio_escolarT'];
	$año_bachillerato_fin_escolar = $_POST['año_bachillerato_fin_escolarT'];
	$perfil_escolar = $_POST['perfil_escolarT'];
	$especialidad_bachillerato_escolar = $_POST['especialidad_bachillerato_escolarT'];
	$promedio_escolar = $_POST['promedio_escolarT'];
	$curp = $_POST['curpT'];


	// en los values se ponen los valores de arriba 

	

		$sentencia = "INSERT INTO ejemplo2 VALUES (null, '$primera_opcion', '$segunda_opcion', '$tercera_opcion', '$nombre_personal', '$apellidop', '$apellidom', '$estado_nacimiento', '$municipio_nacimiento', '$localidad_nacimiento', '$fecha_nacimiento', '$Sexo', '$estado_civil', '$personas_que_dependen_de_ti', '$tipo_sangre', '$numero_seguridad_social', '$enfermedad_conica', '$enfermedad_respuesta', '$discapacidad', '$instancia_medica', '$lenguas_indigenas', '$trabajas_actualmente', '$nombre_padre_tutor', '$telefono_padre_tutor', '$calle', '$numero_casa', '$codigo_postal', '$colonia_contacto', '$municipio_contacto', '$estado_contacto', '$telefono_contacto', '$celular_contacto', '$email_contacto', '$escuela_egreso_escolar', '$estado_escolar', '$municipio_escolar', '$localidad_escolar', '$año_bachillerato_inicio_escolar', '$año_bachillerato_fin_escolar', '$perfil_escolar', '$promedio_escolar', '$curp',  'activo')";

		
		$resultado = $con->query($sentencia);
		if ($resultado) {
			echo json_encode("Datos insertados correctamente");
			

		}else{
			echo json_encode("Tenemos un problema., intentelo mas tarde...");

			
		}


?>