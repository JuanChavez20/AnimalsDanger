<?php

include('../conexion.php');

$id_ = $_POST['id'];

if($id_ > 0){
	
	$checkRecord = mysqli_query($con, "SELECT * FROM reinscripcion WHERE id_student=".$id_);
	$totalrows = mysqli_num_rows($checkRecord);

	if($totalrows > 0){
		$row = $checkRecord->fetch_assoc();
		if ($row['estado']== 'activo') {
			$query = "UPDATE reinscripcion SET estado='inactivo' WHERE id_student=".$id_;
			mysqli_query($con,$query);
			echo 1;
			exit;
			# code...
		}else{
			$query = "UPDATE reinscripcion SET estado='activo' WHERE id_student=".$id_;
			mysqli_query($con,$query);
			echo 1;
			exit;

		}
	}	
}
echo 0;
exit;


?>