<?php


require_once('../classes/autoloader.php');
require_once('../config.php');


use pdomysql AS pdomysql;
use user AS user;



$iduser="x";
if (isset($_GET['iduser'])) {
    $iduser=$_GET['iduser'];
}
if (isset($_POST['iduser'])) {
    $iduser=$_POST['iduser'];
}
$directory = "../imagenes_/profPicture/";
if (!file_exists($directory.$iduser)) {
    mkdir($directory.$iduser, 0777,true);
}


// Contar envían por el plugin
$Imagenes =count(isset($_FILES['imagenes']['name'])?$_FILES['imagenes']['name']:0);
$infoImagenesSubidas = array();
for($i = 0; $i < $Imagenes; $i++) {
    // El nombre y nombre temporal del archivo que vamos para adjuntar
    $nombreArchivo=isset($_FILES['imagenes']['name'][$i])?$_FILES['imagenes']['name'][$i]:null;
    $nombreTemporal=isset($_FILES['imagenes']['tmp_name'][$i])?$_FILES['imagenes']['tmp_name'][$i]:null;
    $nombreArchivo=$iduser."/".str_replace(" ", "_", $nombreArchivo);
    $rutaArchivo=$directory.$nombreArchivo;
    
    move_uploaded_file($nombreTemporal,$rutaArchivo);
    
    $infoImagenesSubidas[$i]=array("caption"=>"$nombreArchivo","height"=>"120px","url"=>"borrarAjax.php","key"=>$nombreArchivo);
    $ImagenesSubidas[$i]="<img  height='120px'  src='$rutaArchivo' class='file-preview-image'>";
    
    $img=$nombreArchivo;
    user::updateProfPicture($img,$iduser);
}
$arr = array("file_id"=>0,"overwriteInitial"=>true,"initialPreviewConfig"=>$infoImagenesSubidas,
   "initialPreview"=>$ImagenesSubidas);



echo json_encode($arr);
?>