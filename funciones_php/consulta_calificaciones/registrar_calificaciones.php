<?php


if(empty($_POST['id_alumno'])){

	$errors[] = "ID esta vacio, no podemos actualizar";


}elseif (!empty($_POST['id_alumno'])){

	require_once("../conexion.php");
	$nombre = mysqli_real_escape_string($con,(strip_tags($_POST['edit_nombreT'], ENT_QUOTES)));

	$materia = mysqli_real_escape_string($con,(strip_tags($_POST['edit_apellidopT'], ENT_QUOTES)));

	$calificacion = mysqli_real_escape_string($con,(strip_tags($_POST['edit_apellidomT'], ENT_QUOTES)));

	$competencia = mysqli_real_escape_string($con,(strip_tags($_POST['edit_telefonoT'], ENT_QUOTES)));

	

	
	$id = intval($_POST['id_alumno']);

	$sql="UPDATE consultar SET nombre='".$nombre."', materia='".$materia."', calificacion='".$calificacion."', competencia='".$competencia."'  WHERE id_student=".$id." ";

	$query=mysqli_query($con, $sql);

	if($query){
		$messages[] = "El alumno ha sido actualizado correctamente";
	}else{
		$errors[] = $sql;
	}

}else{
	$errors[] = "Error Desconocido";

 
}

if(isset($errors)){

?>
	<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<strong>Error!</strong>
	<?php
		foreach ($errors as $err){
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
		foreach ($messages as $mess){
			echo $mess;

		}
	?>
</div>
<?php 
}

?>


