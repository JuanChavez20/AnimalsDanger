<?php

if (empty($_POST['id_alumno'])) {
	$errors[] = " El ID esta vacio, no podemos actualizar, por favor seleccione uno.";
}elseif(!empty($_POST['id_alumno'])){

	require_once("../conexion.php");




	$primera_opcion = mysqli_real_escape_string($con, (strip_tags($_POST['edit_primera_opcionT'], ENT_QUOTES)));
	$segunda_opcion = mysqli_real_escape_string($con, (strip_tags($_POST['edit_segunda_opcionT'], ENT_QUOTES)));
	$tercera_opcion = mysqli_real_escape_string($con, (strip_tags($_POST['edit_tercera_opcionT'], ENT_QUOTES)));
	$nombre = mysqli_real_escape_string($con, (strip_tags($_POST['edit_nombre_personalT'], ENT_QUOTES)));
	$apellidop = mysqli_real_escape_string($con, (strip_tags($_POST['edit_apellidopT'], ENT_QUOTES)));
	$apellidom = mysqli_real_escape_string($con, (strip_tags($_POST['edit_apellidomT'], ENT_QUOTES)));
	$estado_nacimiento = mysqli_real_escape_string($con, (strip_tags($_POST['edit_estado_nacimientoT'], ENT_QUOTES)));
	$municipio_nacimiento = mysqli_real_escape_string($con, (strip_tags($_POST['edit_municipio_nacimientoT'], ENT_QUOTES)));
	$localidad_nacimiento = mysqli_real_escape_string($con, (strip_tags($_POST['edit_localidad_nacimientoT'], ENT_QUOTES)));
	$fecha_nacimiento = mysqli_real_escape_string($con, (strip_tags($_POST['edit_fecha_nacimientoT'], ENT_QUOTES)));
	$Sexo = mysqli_real_escape_string($con, (strip_tags($_POST['edit_SexoT'], ENT_QUOTES)));
	$estado_civil = mysqli_real_escape_string($con, (strip_tags($_POST['edit_estado_civilT'], ENT_QUOTES)));
	$personas_que_dependen_de_ti = mysqli_real_escape_string($con, (strip_tags($_POST['edit_personas_que_dependen_de_tiT'], ENT_QUOTES)));
	$tipo_sangre = mysqli_real_escape_string($con, (strip_tags($_POST['edit_tipo_sangreT'], ENT_QUOTES)));
	$numero_seguridad_social = mysqli_real_escape_string($con, (strip_tags($_POST['edit_numero_seguridad_socialT'], ENT_QUOTES)));
	$enfermedad_conica = mysqli_real_escape_string($con, (strip_tags($_POST['edit_enfermedad_conicaT'], ENT_QUOTES)));
	$enfermedad_respuesta = mysqli_real_escape_string($con, (strip_tags($_POST['edit_enfermedad_respuestaT'], ENT_QUOTES)));
	$discapacidad = mysqli_real_escape_string($con, (strip_tags($_POST['edit_discapacidadT'], ENT_QUOTES)));
	$instancia_medica = mysqli_real_escape_string($con, (strip_tags($_POST['edit_instancia_medicaT'], ENT_QUOTES)));
	$lenguas_indigenas = mysqli_real_escape_string($con, (strip_tags($_POST['edit_lenguas_indigenasT'], ENT_QUOTES)));
	$trabajas_actualmente = mysqli_real_escape_string($con, (strip_tags($_POST['edit_trabajas_actualmenteT'], ENT_QUOTES)));
	$nombre_padre_tutor = mysqli_real_escape_string($con, (strip_tags($_POST['edit_nombre_padre_tutorT'], ENT_QUOTES)));
	$telefono_padre_tutor = mysqli_real_escape_string($con, (strip_tags($_POST['edit_telefono_padre_tutorT'], ENT_QUOTES)));
	$calle = mysqli_real_escape_string($con, (strip_tags($_POST['edit_calleT'], ENT_QUOTES)));
	$numero_casa = mysqli_real_escape_string($con, (strip_tags($_POST['edit_numero_casaT'], ENT_QUOTES)));
	$codigo_postal = mysqli_real_escape_string($con, (strip_tags($_POST['edit_codigo_postalT'], ENT_QUOTES)));
	$colonia_contacto = mysqli_real_escape_string($con, (strip_tags($_POST['edit_colonia_contactoT'], ENT_QUOTES)));
	$localidad_contacto = mysqli_real_escape_string($con, (strip_tags($_POST['edit_localidad_contactoT'], ENT_QUOTES)));
	$municipio_contacto = mysqli_real_escape_string($con, (strip_tags($_POST['edit_municipio_contactoT'], ENT_QUOTES)));
	$estado_contacto = mysqli_real_escape_string($con, (strip_tags($_POST['edit_estado_contactoT'], ENT_QUOTES)));
	$telefono_contacto = mysqli_real_escape_string($con, (strip_tags($_POST['edit_telefono_contactoT'], ENT_QUOTES)));
	$celular_contacto = mysqli_real_escape_string($con, (strip_tags($_POST['edit_celular_contactoT'], ENT_QUOTES)));
	$email_contacto = mysqli_real_escape_string($con, (strip_tags($_POST['edit_email_contactoT'], ENT_QUOTES)));
	$escuela_egreso_escolar = mysqli_real_escape_string($con, (strip_tags($_POST['edit_escuela_egreso_escolarT'], ENT_QUOTES)));
	$estado_escolar = mysqli_real_escape_string($con, (strip_tags($_POST['edit_estado_escolarT'], ENT_QUOTES)));
	$municipio_escolar = mysqli_real_escape_string($con, (strip_tags($_POST['edit_municipio_escolarT'], ENT_QUOTES)));
	$Localidad_escolar = mysqli_real_escape_string($con, (strip_tags($_POST['edit_Localidad_escolarT'], ENT_QUOTES)));
	$año_bachillerato_inicio_escolar = mysqli_real_escape_string($con, (strip_tags($_POST['edit_año_bachillerato_inicio_escolarT'], ENT_QUOTES)));
	$año_bachillerato_fin_escolar = mysqli_real_escape_string($con, (strip_tags($_POST['edit_año_bachillerato_fin_escolarT'], ENT_QUOTES)));
	$perfil_escolar = mysqli_real_escape_string($con, (strip_tags($_POST['edit_perfil_escolarT'], ENT_QUOTES)));
	$especialidad_bachillerato_escolarT = mysqli_real_escape_string($con, (strip_tags($_POST['edit_especialidad_bachillerato_escolarT'], ENT_QUOTES)));
	$promedio_escolar = mysqli_real_escape_string($con, (strip_tags($_POST['edit_promedio_escolarT'], ENT_QUOTES)));
	$curp = mysqli_real_escape_string($con, (strip_tags($_POST['edit_curpT'], ENT_QUOTES)));




	$id = intval($_POST['id_alumno']);

	$sql = "UPDATE ejemplo2 SET primera_opcion='".$primera_opcion."',
	 segunda_opcion='".$segunda_opcion."',
	  tercera_opcion='".$tercera_opcion."', 
	  nombre='".$nombre."', apellidop='".$apellidop."', 
	  apellidom='".$apellidom."',
	   estado_nacimiento='".$estado_nacimiento."',
	    municipio_nacimiento='".$municipio_nacimiento."',
	     localidad_nacimiento='".$localidad_nacimiento."',
	      fecha_nacimiento='".$fecha_nacimiento."',
	       Sexo='".$Sexo."',
	        estado_civil='".$estado_civil."',
	         personas_que_dependen_de_ti='".$personas_que_dependen_de_ti."',
	          tipo_sangre='".$tipo_sangre."',
	           numero_seguridad_social='".$numero_seguridad_social."',
	            enfermedad_conica='".$enfermedad_conica."',
	             enfermedad_respuesta='".$enfermedad_respuesta."',
	              discapacidad='".$discapacidad."',
	               instancia_medica='".$instancia_medica."',
	                lenguas_indigenas='".$lenguas_indigenas."',
	                 trabajas_actualmente='".$trabajas_actualmente."',
	                  nombre_padre_tutor='".$nombre_padre_tutor."',
	                   telefono_padre_tutor='".$telefono_padre_tutor."',
	                    calle='".$calle."',
	                     numero_casa='".$numero_casa."',
	                      codigo_postal='".$codigo_postal."',
	                       colonia_contacto='".$colonia_contacto."',
	                        localidad_contacto='".$localidad_contacto."',
	                         municipio_contacto='".$municipio_contacto."',
	                          estado_contacto='".$estado_contacto."',
	                           telefono_contacto='".$telefono_contacto."',
	                            celular_contacto='".$celular_contacto."',
	                             email_contacto='".$email_contacto."',
	                              escuela_egreso_escolar='".$escuela_egreso_escolar."',
	                               estado_escolar='".$estado_escolar."',
	                                municipio_escolar='".$municipio_escolar."',
	                                 Localidad_escolar='".$Localidad_escolar."',
	                                  año_bachillerato_inicio_escolar='".$año_bachillerato_inicio_escolar."', año_bachillerato_inicio_escolar='".$año_bachillerato_fin_escolar."',
	                                   perfil_escolar='".$perfil_escolar."',
	                                    promedio_escolar='".$promedio_escolar."',
	                                     curp='".$curp."' WHERE id_student=".$id." ";

	$query = mysqli_query($con, $sql);

	if($query){
		$messages[] = "¡El alumno ha sido actualizado con exito!";
	}else{
		$errors[] = "Lo sentimos, la actualizacion fallo. Por favor intenta mas tarde.";
	}
}else{
	$errors[] = "El error que se ha presentado es indetectable.";
}

if (isset($errors)) {
	?>
	<div class="alert alert-danger" role="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button> 
		<strong>Error!</strong>
		<?php
			foreach ($errors as $err) {
				echo $err;
			}
		?>
	</div>
	<?php
}

if (isset($messages)) {
	?>
	<div class="alert alert-success" role="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button> 
		<strong>Bien Hecho!</strong>
		
		<?php
			foreach ($messages as $mess) {
				echo $mess;
			}
		?>
	</div>
	<?php
}

?>