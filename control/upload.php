<?php

require_once('../classes/autoloader.php');
require_once('../config.php');


use pdomysql AS pdomysql;
use user AS user;
use post AS post;
use posts AS posts;


$modulo="";

$action="";
$iduserXXX="x";
if (isset($_POST['action'])) {
	$action=$_POST['action'];
}
if (isset($_POST['modulo'])) {
	$modulo=$_POST['modulo'];
}
if (isset($_POST['iduser'])) {
	$iduserXXX=$_POST['iduser'];
}

//error_log("modulo".$modulo);

switch($modulo) {
	case 'post': post_function();break;
	case 'profileImage': profile_function(); break;
	case 'galeria': galeria_function();break;

	default: echo 0; die;
}

function post_function(){
	global $action;

	switch($action) {
		case 'a': create_post_function();break;
        case 'b': update_post_function();break;
		default: echo 0;die;
	}
}
function profile_function(){
	global $action;

	switch($action) {
		case 'a': update_profile_function();break;

		default: echo 0;die;
	}
	
}
function galeria_function(){
	global $action;

	switch($action) {
		case 'a': upload_galeria_function();break;
		case 'b': delete_galeria_function();break;

		default: echo 0;die;
	}
	
}

function update_profile_function(){
	global $iduserXXX;
	
	try{
		$directory = "../imagenes_/profPicture/";
		if (!file_exists($directory)) {
			mkdir($directory, 0777,true);
		}
		if (!file_exists($directory.$iduserXXX)) {
			mkdir($directory.$iduserXXX, 0777,true);
		}
		error_log("message");
		$file=$_FILES['fileImage'];
		$nombreArchivo=isset($_FILES['fileImage']['name']) ?$_FILES['fileImage']['name']: null;
		$nombreTemporal=isset($_FILES['fileImage']['tmp_name'])?$_FILES['fileImage']['tmp_name']:null;

		$nombreArchivo=$iduserXXX."_".time()."_".str_replace(" ", "_", $nombreArchivo);

		$rutaArchivo=$directory.$nombreArchivo;
		
		move_uploaded_file($nombreTemporal,$rutaArchivo);

		$img=$nombreArchivo;
		$result = user::updateProfPicture($img,$iduserXXX);
		echo json_encode($result);
		die;
	}
	catch(Exception $e){
		error_log($e);
		return 0;
	}

}

function create_post_function(){
	global $iduserXXX;
	try{
		$directory = "../imagenes_/post/";
		/*if (!file_exists($directory)) {
			mkdir($directory, 0777,true);
		}
		if (!file_exists($directory.$iduserXXX)) {
			mkdir($directory.$iduserXXX, 0777,true);
		}*/
		$nombreArchivo=isset($_FILES['file']['name']) ?$_FILES['file']['name']: null;
		$nombreTemporal=isset($_FILES['file']['tmp_name'])?$_FILES['file']['tmp_name']:null;

		$nombreArchivo=$iduserXXX."_".time()."_".str_replace(" ", "_", $nombreArchivo);

		$rutaArchivo=$directory.$nombreArchivo;

		move_uploaded_file($nombreTemporal,$rutaArchivo);

		$img=$nombreArchivo;
		error_log($img);
		$result = user::regPost($_POST['title'], $_POST['description'], $_POST['date'], $iduserXXX, $img);

		echo json_encode($result);
		die;
	}
	catch(Exception $e){
		error_log($e);
		return 0;
	}

	

}
function update_post_function(){
		global $iduserXXX;
	try{
		$directory = "../imagenes_/post/";
		/*if (!file_exists($directory)) {
			mkdir($directory, 0777,true);
		}
		if (!file_exists($directory.$iduserXXX)) {
			mkdir($directory.$iduserXXX, 0777,true);
		}*/
		$nombreArchivo=isset($_FILES['file']['name']) ?$_FILES['file']['name']: $_POST['imgAnt'];
		$nombreTemporal=isset($_FILES['file']['tmp_name'])?$_FILES['file']['tmp_name']:null;
		$nombreArchivo=$iduserXXX."_".time()."_".str_replace(" ", "_", $nombreArchivo);
		$rutaArchivo=$directory.$nombreArchivo;
		move_uploaded_file($nombreTemporal,$rutaArchivo);
		$img=$nombreArchivo;
		//error_log($img);
        // error_log(print_r($_FILES['file']['name'],true));
		$result=new post;
		$result->setIdpost($_POST['idPst']);
		$result->setTitle($_POST['title']);
		$result->setDescription($_POST['description']);
		$result->setDate($_POST['date']);
		if ($_FILES['file']['name']==''||$_FILES['file']['name']==null) {
		$result->setImage('');
		}else{
			$result->setImage($img);
		}
         //error_log(print_r($result->updatePost(),true));
		echo json_encode($result->updatePost());
		die;
	}
	catch(Exception $e){
		error_log($e);
		return 0;
	}

}
function upload_galeria_function()
{
		global $iduserXXX;
	try{
		$directory = "../imagenes_/galeria/";
		if (!file_exists($directory)) {
			mkdir($directory, 0777,true);
		}
		$subio_mas_imagenes=false;
		$numActual=count(posts::getImages($iduserXXX));

		$num =count(isset($_FILES['imagenes']['name'])?$_FILES['imagenes']['name']:0);

		$alto=10;
		$numNuevo=$num+$numActual;
		if ($numNuevo<=$alto) {
			$alto=$num;
		}
		else{

			$subio_mas_imagenes=true;
			$alto=$alto-$numActual;
		}
		error_log($alto);

		//error_log(json_encode($_FILES['imagenes']['name'][1]));
		for($i = 0; $i < $alto; $i++) {
			$nombreArchivoA=isset($_FILES['imagenes']['name'][$i])?$_FILES['imagenes']['name'][$i]:null;
			//error_log($nombreArchivoA);
			$nombreTemporal=isset($_FILES['imagenes']['tmp_name'][$i])?$_FILES['imagenes']['tmp_name'][$i]:null;
			//error_log($nombreTemporal);
			$nombreArchivo=$iduserXXX."_".time()."_".str_replace(" ", "_", $nombreArchivoA);
			//error_log($nombreArchivo);
			$rutaArchivo=$directory.$nombreArchivo;
			move_uploaded_file($nombreTemporal,$rutaArchivo);
			$img=$nombreArchivo;
			posts::insertImageGallery($img,$nombreArchivoA,"http://adondeirenlaciudad.com/imagenes_/galeria/",$iduserXXX);
		}
		$galeria=posts::getImages($iduserXXX);
		$result=0;
		if ($subio_mas_imagenes) {
			$result = array('continuar' => 'ok','galeria'=>$galeria,'mensaje'=>'solo se puden subir hasta 10 imagenes');
		}else
		{
			$result = array('continuar' => 'ok','galeria'=>$galeria,'mensaje'=>'listo');
		}
		echo json_encode($result);
		die;
	}
	catch(Exception $e){
		error_log($e);
		return 0;
	}

}
function delete_galeria_function()
{
	global $iduserXXX;
	$id=0;
	if (isset($_POST['id'])) {
	$id=$_POST['id'];
	}
	$img=0;
	if (isset($_POST['img'])) {
	$img=$_POST['img'];
	}

	try{
		$directory = "../imagenes_/galeria/";
		if (!file_exists($directory)) {
			mkdir($directory, 0777,true);
		}
		
		$result = posts::deleteImageGallery($id);
		$galeria=posts::getImages($iduserXXX);
		$result = array('continuar' => 'ok','galeria'=>$galeria,'mensaje'=>'listo');
		unlink($directory.$img);
		echo json_encode($result);
		die;
	}
	catch(Exception $e){
		error_log($e);
		return 0;
	}

}




?>