<?php

$directorio = "../../imagenes/";
$archivo = $directorio . basename($_FILES["file"]["name"]);
$tipo_archivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
$versiesmiimagen = getimagesize($_FILES["file"]["tmp_name"]);

if ($versiesmiimagen != false) {


	$tamanio = $_FILES["file"]["size"];

	if ($tamanio > 100000) {
		echo "El archiivo es muy grande";
	}else{

		if ($tipo_archivo == "jpeg" || $tipo_archivo == "png" || $tipo_archivo == "jpg") {


			if (move_uploaded_file($_FILES["file"]["name"], $archivo)) {
				echo "Se subio correctamente";
				header("Location: ../../registro_nuevo_ingreso_registro_nuevo.php")
			}

		}else{

			echo "Solo se admiten imagenes de tipo JPEG, JPG Y PNG";

		}

	}
	
}else{
	echo "El documento no es una imagen";
}
?>