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
	$direccion = mysqli_real_escape_string($con, (strip_tags($_POST['edit_direccionT'], ENT_QUOTES)));
	$telefono = mysqli_real_escape_string($con, (strip_tags($_POST['edit_telefonoT'], ENT_QUOTES)));
	$correo = mysqli_real_escape_string($con, (strip_tags($_POST['edit_correoT'], ENT_QUOTES)));
	$sexo = mysqli_real_escape_string($con, (strip_tags($_POST['edit_sexoT'], ENT_QUOTES)));
	$especialidad = mysqli_real_escape_string($con, (strip_tags($_POST['edit_especialidadT'], ENT_QUOTES)));
	$id = intval($_POST['id_alumno']);

	$sql = "UPDATE registro_maestros SET nombre='".$nombre."', apellido_p='".$apellido_p."', apellido_m='".$apellido_m."', direccion='".$direccion."', telefono='".$telefono."', correo='".$correo."', sexo='".$sexo."', especialidad='".$especialidad."' WHERE id_maestro=".$id." ";

	$query = mysqli_query($con, $sql);

	if($query){
		$messages[] = "El maestro ha sido actualizado";
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