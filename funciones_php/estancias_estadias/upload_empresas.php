<?php

$directorio = "../../imagenes/";
$archivo = $directorio . basename($_FILES["file"]["name"]);
$tipo_archivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

$versiesimagen= getimagesize($_FILES["file"]["tmp_name"]);

if ($versiesimagen != false) {
	$tamanio = $_FILES["file"]["size"];
	if ($tamanio > 100000) {
		echo "El archivo es demaciado grande";
		
	}else{
		if ($tipo_archivo == "jpeg" || $tipo_archivo == "png" || $tipo_archivo == "jpg") {

			if(move_uploaded_file($_FILES["file"]["tmp_name"], $archivo)){
				echo "SE subio corretamente";
				header("Location: ../../Empresas_vinculadas.php");
			}
			
		}else{
			echo "SOLO DE ADMITEN IMAGENES DE TIPO JPEG, JPG Y PNG";
		}

	}
	
}else{
	echo "El documento no es una imgen";
}



?>