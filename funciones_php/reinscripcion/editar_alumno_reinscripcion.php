<?php

if (empty($_POST['id_alumno'])) {
	$errors[] = "ID esta vacio, no podemos actualizar";
}elseif(!empty($_POST['id_alumno'])){

	require_once("../conexion.php");
	
	$email = mysqli_real_escape_string($con, (strip_tags($_POST['edit_emailT'], ENT_QUOTES)));
	
	$cuatrimestre = mysqli_real_escape_string($con, (strip_tags($_POST['edit_cuatrimestreT'], ENT_QUOTES)));
	
	$id = intval($_POST['id_alumno']);

	$sql = "UPDATE reinscripcion SET  email='".$email."', cuatrimestre='".$cuatrimestre."' WHERE id_student=".$id." ";

	$query = mysqli_query($con, $sql);

	if($query){
		$messages[] = "La información ha sido actualizada.";
	}else{
		$errors[] = "Lo sentimos, la actualizacion fallo. Por favor intenta mas tarde.";
	}
}else{
	$errors[] = "Error desconocido.";
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