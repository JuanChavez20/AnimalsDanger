<?php

if (empty($_POST['id_estudiante'])) {
	$errors[] = "ID esta vacio, no podemos actualizar";
}elseif(!empty($_POST['id_estudiante'])){

	require_once("../conexion.php");
	
	$taller = mysqli_real_escape_string($con, (strip_tags($_POST['edit_email_user'], ENT_QUOTES)));
	$id = intval($_POST['id_alumno']);

	$sql = "UPDATE talleres SET taller='".$taller."' WHERE id_estudiante=".$id." ";

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