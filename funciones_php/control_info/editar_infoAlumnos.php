<?php


	session_start();
	if(!$_SESSION){
		header('Location:../../index.php');
	}

if (empty($_POST['id_alumno'])) {
	$errors[] = " El ID esta vacio, no podemos actualizar";
}elseif(!empty($_POST['id_alumno'])){

	require_once("../conexion.php");
	$nombre = mysqli_real_escape_string($con, (strip_tags($_POST['edit_nombreT'], ENT_QUOTES)));
	$apellido_p = mysqli_real_escape_string($con, (strip_tags($_POST['edit_apellidopT'], ENT_QUOTES)));
	$apellido_m = mysqli_real_escape_string($con, (strip_tags($_POST['edit_apellidomT'], ENT_QUOTES)));
	$fecha_nacimiento = mysqli_real_escape_string($con, (strip_tags($_POST['edit_nacimientoT'], ENT_QUOTES)));
	$direccion = mysqli_real_escape_string($con, (strip_tags($_POST['edit_direccionT'], ENT_QUOTES)));
	$telefono = mysqli_real_escape_string($con, (strip_tags($_POST['edit_telefonoT'], ENT_QUOTES)));
	$correo = mysqli_real_escape_string($con, (strip_tags($_POST['edit_correoT'], ENT_QUOTES)));
	$sexo = mysqli_real_escape_string($con, (strip_tags($_POST['edit_sexoT'], ENT_QUOTES)));
	$estado_civil = mysqli_real_escape_string($con, (strip_tags($_POST['edit_estadocivilT'], ENT_QUOTES)));
	$curp = mysqli_real_escape_string($con, (strip_tags($_POST['edit_curpT'], ENT_QUOTES)));
	$carrera = mysqli_real_escape_string($con, (strip_tags($_POST['edit_carreraT'], ENT_QUOTES)));
	$cuatrimestre = mysqli_real_escape_string($con, (strip_tags($_POST['edit_cuatrimestreT'], ENT_QUOTES)));
	$grupo = mysqli_real_escape_string($con, (strip_tags($_POST['edit_grupoT'], ENT_QUOTES)));
	$escuela_egreso = mysqli_real_escape_string($con, (strip_tags($_POST['edit_egresoT'], ENT_QUOTES)));
	$promedio = mysqli_real_escape_string($con, (strip_tags($_POST['edit_promedioT'], ENT_QUOTES)));
	$id = intval($_POST['id_alumno']);

	$sql = "UPDATE registro_alumnos SET nombre='".$nombre."', apellido_p='".$apellido_p."', apellido_m='".$apellido_m."', fecha_nacimiento='".$fecha_nacimiento."', direccion='".$direccion."', telefono='".$telefono."', correo='".$correo."', sexo='".$sexo."', estado_civil='".$estado_civil."', curp='".$curp."', carrera='".$carrera."', cuatrimestre='".$cuatrimestre."',grupo='".$grupo."',escuela_egreso='".$escuela_egreso."',promedio=".$promedio."  WHERE id_alumno=".$id." ";

	$query = mysqli_query($con, $sql);

	if($query){
		$messages[] = "El alumno ha sido actualizado";
	}else{
		$errors[] = "Lo sentimos, la actualizacion fallo. Por favor intenta mas tarde.";
	}
}else{
	$errors[] = "Error desconocido";
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