<?php

$directorio = "../../imagenes/";
$archivo = $directorio. basename($_FILES["file"]["name"]);
$tipo_archivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
$versiesimagen = getimagesize($_FILES["file"]["tmp_name"]);

if($versiesimagen != false){
	$tamanio = $_FILES["file"]["size"];
	if ($tamanio > 100000) {
		echo "El archivo es muy grande";
	}else{
		if ($tipo_archivo == "jpeg" || $tipo_archivo == "png" || $tipo_archivo == "jpg") {
			if(move_uploaded_file($_FILES["file"]["tmp_name"], $archivo)){
				echo "se subio correctamente";
				header("location: ../../extrasyUA.php");
			}
		}else{
			echo "solo se admiten imagenes de tipo JPEG, JPG y PNG";
		}
	}
}else{
	echo "El documento no es una imagen";
}

?>