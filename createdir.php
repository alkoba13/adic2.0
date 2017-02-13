<?php

$carpetaAdjunta="images/profPicture/1/";
try{
	if (!file_exists($carpetaAdjunta)) {
		if (mkdir($carpetaAdjunta, 0777)) {
			echo "creada correctamente";
		}
		else{
			echo "no se pudo crear la carpeta";
		}
	}
	else{
		echo "ya existe";
	}
}
catch(Exception $e){
	echo $e;
}
?>