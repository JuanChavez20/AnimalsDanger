<?php

include('../conexion.php');

$id_ = $_POST['id'];

if($id_ > 0){
	
	$checkRecord = mysqli_query($con, "SELECT * FROM documentos WHERE id_doc=".$id_);
	$totalrows = mysqli_num_rows($checkRecord);

	if($totalrows > 0){
		$row = $checkRecord->fetch_assoc();
		if ($row['Documento1']== 'Si') {
			$query = "UPDATE documentos SET Documento1='No' WHERE id_doc=".$id_;
			mysqli_query($con,$query);
			echo 1;
			exit;
			# code...
		}else{
			$query = "UPDATE documentos SET Documento1='Si' WHERE id_doc=".$id_;
			mysqli_query($con,$query);
			echo 1;
			exit;

		}
	}	
}
echo 0;
exit;


?>



