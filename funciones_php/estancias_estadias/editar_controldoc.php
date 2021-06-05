<!-- este es utilizado para actualizar los datos en el formulario y se esta mandando llamar en funciones.js -->

<?php

if (empty($_POST['id_doc'])) {

	$errors[] = "ID eta vacia , mo podemos actualizar";

}elseif(!empty($_POST['id_doc'])) {

	require_once("../conexion.php");
	$nombre = mysqli_real_escape_string($con,(strip_tags($_POST['edit_nombreEM'], ENT_QUOTES)));
	
	$direccion = mysqli_real_escape_string($con,(strip_tags($_POST['edit_direccionEM'], ENT_QUOTES)));
	$correo = mysqli_real_escape_string($con,(strip_tags($_POST['edit_email_userEM'], ENT_QUOTES)));
	$telefono = mysqli_real_escape_string($con,(strip_tags($_POST['edit_telefonoEM'], ENT_QUOTES)));

	$id = intval($_POST['id_doc']);

	$sql ="UPDATE documentos SET nombre='".$nombre."',  telefono='".$telefono."', correo='".$correo."', direccion='".$direccion."' WHERE id_doc=".$id."";
	$query = mysqli_query($con,$sql);

	if ($query) {
		$messages[] = "El alumno ha sido actualizado correctamente ";

	}else{
		$errors[] = "Lo sentimos , la ctualizacion fallo, por favor intenta mas tarde";
	}

}else{
	$errors[] = "Error desconocido";

}

if(isset($errors)){
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
if(isset($messages)){
	?>
	<div class="alert alert-success" role="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Bien Hecho!</strong>
		<?php
			foreach ($messages  as $mess) {
				echo $mess;
			}
		?>
	</div>
	<?php
	
}
?>