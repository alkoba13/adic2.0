<?php
$origen="";
if (isset($_SERVER['HTTP_ORIGIN'])) {
	$origen=$_SERVER['HTTP_ORIGIN'];
}
else{
	$origen="*";
}

header("Access-Control-Allow-Origin:".$origen);/*
header("Access-Control-Allow-Origin:".$_SERVER['HTTP_ORIGIN']);*/
header('Access-Control-Allow-Credentials: true');

require_once('autoloader.php');
require_once('../config.php');

use pdomysql AS pdomysql;
use user AS user;
use posts AS posts;

$mensaje="";
$error="no_error";
$continuar="no_ok";
$datos="";
$action="";
switch($_SERVER['REQUEST_METHOD'])
{
	case 'GET':
	if (isset($_GET["action"]) && !empty($_GET["action"])) {
		$action=$_GET["action"];
	}
	break;
	case 'POST':
	if (isset($_POST["action"]) && !empty($_POST["action"])) {
		$action=$_POST["action"];
	}
	break;
	default:
}
if (is_ajax()){
	if ($action!="") {
		switch($action) { /*//Switch case for value of action*/
			case 'sesion': sesion_function();break;
			case 'loginU': login_function(); break;
			case 'logout': logout_function();break;
			case 'registerU': register_user();break;
			case 'getPost': getPost_function();break;
			case 'getPostSocio': getPostSocio_function();break;
			case 'getNegocios': getNegocios_function();break;
			case 'getAddress': getAddress_function();break;
			case 'activateT': activateToken_function();break;
			case 'info' : info_function();break;
			case 'getImages': getImages_function();break;

		}

	}else{
		$continuar="no_ok";
		$mensaje="no hay accion";
	}
	$return = json_encode(array('continuar' => $continuar,'error'=>$error,'mensaje'=> $mensaje,'datos'=>$datos),JSON_FORCE_OBJECT );
	header('Content-type: application/json; charset=utf-8');
	echo $return;
}
function is_ajax() {
	return true;/*isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';*/
}
function info_function(){
	global $db_con;
	global $continuar;
	global $error;
	global $datos;
	global $mensaje;
	$result = posts::info_info();
	if (!empty($result)) {
		$continuar ="ok";
		$datos=$result;		
	}
	else{
		$continuar="no_ok";
		$error="no_ok";
		$mensaje="no mms"; /* wrong details */
	}		
}
function getImages_function(){
	global $db_con;
	global $continuar;
	global $error;
	global $datos;
	global $mensaje;
	$result = posts::getImages();
	$return = json_encode(array('data' => $result),JSON_FORCE_OBJECT );
	header('Content-type: application/json; charset=utf-8');
	echo $return;		
}
function register_user(){
	global $db_con;
	global $continuar;
	global $error;
	global $datos;
	global $mensaje;
	$logUser="";
	$logPass="";	
	switch($_SERVER['REQUEST_METHOD'])
	{
		case 'GET':

		if (isset($_GET["mail"]) && !empty($_GET["mail"])) {
			$logUser=$_GET["mail"];
		}
		if (isset($_GET["pass"]) && !empty($_GET["pass"])) {
			$logPass=$_GET["pass"];
		}
		break;
		case 'POST':		
		if (isset($_POST["mail"]) && !empty($_POST["mail"])) {
			$logUser=$_POST["mail"];
		}
		if (isset($_POST["pass"]) && !empty($_POST["pass"])) {
			$logPass=$_POST["pass"];
		}
		break;
		default:
	}	
	if($logUser!=""){
		$logUser = trim($logUser);
		$logPass = trim($logPass);
		$register_result = user::register($logUser, $logPass, "email");
		if ($register_result=="Y") {
			$result = user::login($logUser, $logPass);
			if (!empty($result)) {
				$continuar ="ok"; /*login on*/
				$datos['row']=$result;
				$newToken=	user::obtenToken512($logUser,$result[0]['iduser'],"localhost","prueba");
				if($newToken){
					$datos['token']=$newToken;
				}	
			}
			else{
				$continuar="no_ok";
				$error="no_error";
				$mensaje="email o contraseña no existen "; /* wrong details */
			}		
		}else{
			$continuar="no_ok";
			$error="no_ok";
			$mensaje="usario/correo ya registrado"; /* wrong details */
		}


	}
	else{
		$continuar="no_ok";
		$error="no_error";
		$mensaje="favor de revisar los campos requeridos";

	}
}
function login_function()
{
	global $db_con;
	global $continuar;
	global $error;
	global $datos;
	global $mensaje;
	$logUser="";
	$logPass="";	
	switch($_SERVER['REQUEST_METHOD'])
	{
		case 'GET':

		if (isset($_GET["logUser"]) && !empty($_GET["logUser"])) {
			$logUser=$_GET["logUser"];
		}
		if (isset($_GET["logPass"]) && !empty($_GET["logPass"])) {
			$logPass=$_GET["logPass"];
		}
		break;
		case 'POST':		
		if (isset($_POST["logUser"]) && !empty($_POST["logUser"])) {
			$logUser=$_POST["logUser"];
		}
		if (isset($_POST["logPass"]) && !empty($_POST["logPass"])) {
			$logPass=$_POST["logPass"];
		}
		break;
		default:
	}
	if($logUser!=""){
		$logUser = trim($logUser);
		$logPass = trim($logPass);
		//$logPass = md5($logPass);
		$result = user::login($logUser, $logPass);
		if (!empty($result)) {
			$continuar ="ok"; /*login on*/
			$datos['row']=$result;
			$newToken=	user::obtenToken512($logUser,$result[0]['iduser'],"localhost","prueba");
			if($newToken){
				$datos['token']=$newToken;
			}	
		}
		else{
			$continuar="no_ok";
			$error="no_ok";
			$mensaje="email o contraseña no existen "; /* wrong details */
		}		
	}
	else{
		$continuar="no_ok";
		$error="no_error";
		$mensaje="favor de revisar los campos requeridos";

	}
}

function activateToken_function(){
	global $db_con;
	global $continuar;
	global $error;
	global $datos;
	global $mensaje;
	$token="";
	$email="";
	switch($_SERVER['REQUEST_METHOD'])
	{
		case 'GET':

		if (isset($_GET["token"]) && !empty($_GET["token"])) {
			$token=$_GET["token"];
		}
		if (isset($_GET["email"]) && !empty($_GET["email"])) {
			$email=$_GET["email"];
		}
		break;
		case 'POST':		
		if (isset($_POST["token"]) && !empty($_POST["token"])) {
			$token=$_POST["token"];
		}
		if (isset($_POST["email"]) && !empty($_POST["email"])) {
			$email=$_POST["email"];
		}
		break;
		default:
	}
	if($email!=""){
		$user=user::userExist($email);
		if (!empty($user)) {

			/*var_dump($user);*/
			/*activado normal*/
			$activate=user::tokenActivate($token,$user[0]['iduser']);
			if ($activate) {
				$continuar ="ok"; 
			}
			else{
				$continuar="no_ok";
				$error="no_error";
				$mensaje="no se activo el token";
			}

		}
		else{
			/*registro de usuario y activado*/
			$user=user::registerOnMailDefault($email);
			if (!empty($user)) {
				$activate=user::tokenActivate($token,$email);
				if ($activate) {
					$continuar ="ok"; 
				}
				else{
					$continuar="no_ok";
					$error="no_error";
					$mensaje="no se activo el token";
				}
			}
			else{
				$continuar="no_ok";
				$error="no_error";
				$mensaje="ocurrio un problema inesperado";

			}

		}

	}
	else{
		$continuar="no_ok";
		$error="no_error";
		$mensaje="ocurrio un problema inesperado";

	}
}
/* funcion que sirve para verificar el token de session emula el uso de la session en php */
function sesion_function(){
	global $continuar;
	global $error;
	global $datos;
	global $mensaje;
	$user_email="";
	$token="";
	switch($_SERVER['REQUEST_METHOD'])
	{
		case 'GET':

		if (isset($_GET["token"]) && !empty($_GET["token"])) {
			$token=$_GET["token"];
		}
		break;
		case 'POST':		
		if (isset($_POST["token"]) && !empty($_POST["token"])) {
			$token=$_POST["token"];
		}
		break;
		default:
	}
	if ($token!="") {
		$validate=user::tokenValidate($token);
		if ($validate) {
			$continuar="ok";
			$error="no_error";
			return;
		}
	}
	$continuar="no_ok";
	$error="no_error";
	$mensaje="no ha iniciado session";
	return;
}

/* logout function */
function logout_function(){
	global $db_con;
	global $continuar;
	global $error;
	global $datos;
	global $mensaje;
	$user_email="";
	$token="";
	switch($_SERVER['REQUEST_METHOD'])
	{
		case 'GET':

		if (isset($_GET["token"]) && !empty($_GET["token"])) {
			$token=$_GET["token"];
		}
		break;
		case 'POST':		
		if (isset($_POST["token"]) && !empty($_POST["token"])) {
			$token=$_POST["token"];
		}
		break;
		default:
	}
	if ($token!="") {
		$validate=user::tokenValidateDelete($token);
		$datos=$validate;
		$continuar="ok";
		$error="no_error";
		return;


	}
	else{
		$continuar="no_ok";
		$error="no_error";
		$mensaje="token vacio";
	}
}
function getPost_function(){
	global $db_con;
	global $continuar;
	global $error;
	global $datos;
	global $mensaje;
	$categoria="";
	$fecha="";
	switch($_SERVER['REQUEST_METHOD'])
	{
		case 'GET':

		if (isset($_GET["fecha"]) && !empty($_GET["fecha"])) {
			$fecha=$_GET["fecha"];
		}
		if (isset($_GET["categoria"]) && !empty($_GET["categoria"])) {
			$categoria=$_GET["categoria"];
		}
		break;
		case 'POST':
		if (isset($_POST["categoria"]) && !empty($_POST["categoria"])) {
			$categoria=$_POST["categoria"];
		}		
		if (isset($_POST["fecha"]) && !empty($_POST["fecha"])) {
			$fecha=$_POST["fecha"];
		}
		break;
		default:
	}
	$post=posts::getPost($categoria,$fecha);
	if (!empty($post)){
		$datos=$post;
		$addresses=posts::getAddress($categoria);	
		
		if (!empty($addresses)){
			$array = array('post' => $post, 'addresses' =>$addresses);
			$datos=$array;
			$continuar="ok";
			$error="no_error";
		}
		else{
			$addresses = array();
			$array = array('post' => $post, 'addresses' =>$addresses);
			$continuar="ok";
			$error="no_error";
			$datos=$array;
			$mensaje="direccones vacias";
		}
	}
	else{
		$continuar="no_ok";
		$error="error";
		$datos=$post;
		$mensaje="no hay publicaciones";
	}

}

function getPostSocio_function(){
	global $db_con;
	global $continuar;
	global $error;
	global $datos;
	global $mensaje;
	$iduser="";
	switch($_SERVER['REQUEST_METHOD'])
	{
		case 'GET':

		if (isset($_GET["iduser"]) && !empty($_GET["iduser"])) {
			$iduser=$_GET["iduser"];
		}
		break;
		case 'POST':		
		if (isset($_POST["iduser"]) && !empty($_POST["iduser"])) {
			$iduser=$_POST["iduser"];
		}
		break;
		default:
	}

	$post=posts::getPostSocio($iduser);


	if (!empty($post)){
		$images=posts::getImgSocio($iduser);
		$array= array('post' => $post,'images'=>$images );
		$datos=$array;
		$continuar="ok";
		$error="no_error";

	}
	else{
		$continuar="no_ok";
		$error="no_error";
		$images=posts::getImgSocio($iduser);
		$array= array('post' => $post,'images'=>$images );
		$datos=$array;
		$mensaje="ocurrio algo";
	}

}
function getNegocios_function(){
	global $db_con;
	global $continuar;
	global $error;
	global $datos;
	global $mensaje;
	$categoria="";
	switch($_SERVER['REQUEST_METHOD'])
	{
		case 'GET':


		if (isset($_GET["categoria"]) && !empty($_GET["categoria"])) {
			$categoria=$_GET["categoria"];
		}
		break;
		case 'POST':
		if (isset($_POST["categoria"]) && !empty($_POST["categoria"])) {
			$categoria=$_POST["categoria"];
		}		

		break;
		default:
	}
	$post=posts::getNegocios($categoria);

	if (!empty($post)){
		$datos=$post;
		$addresses=posts::getAddress($categoria);	
		if (!empty($addresses)){
			$array = array('negocios' => $post, 'addresses' =>$addresses);
			$datos=$array;
			$continuar="ok";
			$error="no_error";
		}
		else{
			$addresses = array();
			$array = array('negocios' => $post, 'addresses' =>$addresses);
			$continuar="ok";
			$error="no_error";
			$datos=$array;
			$mensaje="direccones vacias";
		}
	}
	else{
		$continuar="no_ok";
		$error="error";
		$datos=$post;
		$mensaje="no hay negocios";
	}

}
function getAddress_function(){
	global $db_con;
	global $continuar;
	global $error;
	global $datos;
	global $mensaje;
	$categoria="";
	switch($_SERVER['REQUEST_METHOD'])
	{
		case 'GET':


		if (isset($_GET["categoria"]) && !empty($_GET["categoria"])) {
			$categoria=$_GET["categoria"];
		}
		break;
		case 'POST':
		if (isset($_POST["categoria"]) && !empty($_POST["categoria"])) {
			$categoria=$_POST["categoria"];
		}		

		break;
		default:
	}
	$addresses=posts::getaddresses($categoria);	
	if (!empty($addresses)){
		$datos=$addresses;
		$continuar="ok";
		$error="no_error";
	}
	else{
		$continuar="no_ok";
		$error="no_error";
		$datos=$addresses;
		$mensaje="ocurrio algo";
	}

}

?>