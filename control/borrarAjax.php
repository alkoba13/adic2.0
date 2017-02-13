<?php 

require_once('../classes/autoloader.php');
require_once('../config.php');


use pdomysql AS pdomysql;
use user AS user;



$directory = "../imagenes_/profPicture/";
if (!file_exists($directory)) {
                  mkdir($directory, 0777,true);
                }
                
if($_SERVER['REQUEST_METHOD']=="DELETE" || $_SERVER['REQUEST_METHOD']=="POST"){
			parse_str(file_get_contents("php://input"),$datosDELETE);
			$key= $datosDELETE['key'];
			//error_log("datosdelete ".$key);
			$infoImagenes=explode("/",$key);
			$iduser=$infoImagenes[0];
			//error_log("id usuario ".$iduser);
			$img='';
			user::updateProfPicture($img,$iduser);
	

			unlink($directory.$key);
			
			echo 0;

}

?>