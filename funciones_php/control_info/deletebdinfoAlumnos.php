<?php

	session_start();
	if(!$_SESSION){
		header('Location:../../index.php');
	}

include('../conexion.php');

$id_ = $_POST['id'];

if($id_ > 0){
	
	$checkRecord = mysqli_query($con, "SELECT * FROM registro_alumnos WHERE id_alumno=".$id_);
	$totalrows = mysqli_num_rows($checkRecord);

	if($totalrows > 0){
		$row = $checkRecord->fetch_assoc();
		if ($row['estado']== 'activo') {
			$query = "UPDATE registro_alumnos SET estado='inactivo' WHERE id_alumno=".$id_;
			mysqli_query($con,$query);
			echo 1;
			exit;
			# code...
		}else{
			$query = "UPDATE registro_alumnos SET estado='activo' WHERE id_alumno=".$id_;
			mysqli_query($con,$query);
			echo 1;
			exit;

		}
	}	
}
echo 0;
exit;


?>