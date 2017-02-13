<?php
$origen="";
if (isset($_SERVER['HTTP_ORIGIN'])) {
	$origen=$_SERVER['HTTP_ORIGIN'];
}
else{
	$origen="*";
}

header("Access-Control-Allow-Origin:".$origen);
require_once('autoloader.php');
require_once('../config.php');

//invocacion de clases
use pdomysql AS pdomysql;
use user AS user;
use admin AS admin;
//Registrar  usuario
if (isset($_POST['reg_user'])) {
//	$_POST['pass'] = sha1($_POST['pass']);
	$result = user::register($_POST['mail'], $_POST['pass'], "email");

	$resultl = user::login($_POST['mail'], $_POST['pass']);
	if (!empty($result)) {
		$_SESSION['userproble'] = $resultl[0]['username'];
		$_SESSION['rol'] = $resultl[0]['role'];
		$_SESSION['iduser'] = $resultl[0]['iduser'];
	}
	echo json_encode($result[0]);
}
//Login
if (isset($_POST['login_user'])) {
//	$_POST['pass'] = isset($_POST['pass'])? $_POST['pass'] : 'admin123';
//    $_POST['pass'] = sha1($_POST['pass']);
	$result = user::login($_POST['mail'], $_POST['pass']);
	if (!empty($result)) {
		$_SESSION['user'] = $result[0]['username'];
		$_SESSION['rol'] = $result[0]['role'];
		$_SESSION['iduser'] = $result[0]['iduser'];
		echo json_encode($result);
	}else{
		echo 0;
	}
}

if (isset($_POST['activate_soc']) ) {
	$result = user::activateUser($_POST['iduser'],$_POST['activate_soc']);
	if (!empty($result)) {
		echo json_encode($result);
	}else{
		echo 0;
	}
}

if (isset($_POST['deactivate_soc']) && $_POST['deactivate_soc'] == 1) {
	$result = user::deactivateUser($_POST['iduser']);
	if (!empty($result)) {
		echo json_encode($result);
	}else{
		echo 0;
	}
}
if (isset($_POST['delete_soc'])) {
	$result = user::deleteUser($_POST['iduser']);
	if (!empty($result)) {
		echo json_encode($result);
	}else{
		echo 0;
	}
}

if (isset($_POST['change_access']) && $_POST['change_access'] == 1) {
  $result = user::changeAccess($_SESSION['iduser'],  $_POST['oldPass'], $_POST['newPass'] );
	if (!empty($result)) {
		echo json_encode($result);
	}else{
		echo 0;
	}
}

//Logout en desuso
if (isset($_POST['logout'])) {
	session_destroy();
}

//Editar Perfil
if (isset($_POST['editProfile'])) {
	//$_POST['file'] = isset($_POST['file'])?  $_POST['file'] : null;
	$result = user::editProfileData($_POST['name'], $_POST['number'],$_POST['email'], $_POST['negocio'], $_SESSION['iduser']);
	echo json_encode($result);
}

//Registrar publicacion
if (isset($_POST['create_Post'])) {
	$_POST['file'] = 'images/posts/'.$_POST['file'];
	$result = user::regPost($_POST['title'], $_POST['description'], $_POST['date'], $_SESSION['iduser'], $_POST['file']);
	echo json_encode($result);
}

if (isset($_POST['save_direccion'])){
  $result = user::saveDireccion($_POST['calle'], $_POST['numero'], $_POST['municipio'], $_POST['estado'], $_POST['pais'], $_POST['cp'], $_POST['lat'], $_POST['lon'], $_SESSION['iduser']);
  echo json_encode($result);
}

//Registrar socio
if (isset($_POST['reg_soc'])) {
 //  $_POST['pass'] = isset($_POST['pass'])? $_POST['pass'] : 'admin123';
//   $_POST['pass'] = sha1($_POST['pass']);
  //  $_POST['img'] = 'images/profPicture/'.$_POST['img'];
	$result = user::registerSoc($_POST['name'], $_POST['phone'], $_POST['mail'],  null, $_POST['typeReg'], "01.png", $_POST['negocio'], $_POST['category']);
	//admin::sendEmailWelCome($_POST['mail'],$_POST['name'],POST['negocio']);
	$time = time();
$fecha = date("Y-m-d (H:i:s)", $time) ;
//	admin::sendEmailWelCome(null,null,null,$fecha."");
	//$resultl = user::login($_POST['mail'], $_POST['pass']);
	//if (!empty($result)) {
		// $_SESSION['user'] = isset($resultl[0]['username'])? $resultl[0]['username'] : null ;
		// $_SESSION['rol'] =  isset($resultl[0]['role'])? $resultl[0]['role'] : null ;
		// $_SESSION['iduser'] = isset($resultl[0]['iduser'])? $resultl[0]['iduser'] : null ;
	//}
  echo json_encode($result[0]);
}

//Actualizar Imagen
if (isset($_GET['update_profPictureAjax'])) {
	$result = user::updateProfPicture($_GET['img'],$_GET['iduser']);
	
  echo json_encode($result[0]);
}
if(isset($_POST['editUs'])){
$result = user::editUserData($_POST['user'],$_SESSION['iduser']);
	echo json_encode($result);
}
if (isset($_POST['firstLog'])) {
    $result = user::firstLogin($_POST['idUs']);
    echo json_encode($result);
	
}




?>