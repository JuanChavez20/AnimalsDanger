<?php
$directorio = "../../imagenes_Pagos/";
$archivo = $directorio . basename($_FILES["foto"]["name"]);
$tipo_archivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
$versiesimagen = getimagesize($_FILES["foto"]["tmp_name"]);

if ($versiesimagen != false) {
	$tamanio = $_FILES["foto"]["size"];
	if ($tamanio > 500000) {
		echo "El archivo es muy grande";
	}else{
		if ($tipo_archivo == "jpeg" || $tipo_archivo == "png" || $tipo_archivo == "jpg") {
			if (move_uploaded_file($_FILES["foto"]["tmp_name"], $archivo)) {
				echo "Se subio correctamente";
				header("Location: ../../historialPagos.php");
			}
		}else{
			echo "Solo se admiten imagenes de tipo jpeg, png y jpg";
		}
	}
}else{
	echo "El documento no es una imagen";
}


?>