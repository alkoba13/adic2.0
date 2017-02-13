<?php 

require_once('../../classes/autoloader.php');
require_once('../../config.php');

//invocacion de clases
use pdomysql AS pdomysql;
use user AS user;

//Login
if (isset($_POST['loginAdmin'])) {
	$result = user::login($_POST['user'], $_POST['pass']);
	if (!empty($result)) {
		$_SESSION['user'] = $result[0]['username'];
		$_SESSION['rol'] = $result[0]['role'];
		$_SESSION['iduser'] = $result[0]['iduser'];
		if ($_SESSION['rol'] == 'administrador') {
			echo json_encode($result);
		}else{
			echo 0;
		}
	}else{
		echo 0;
	}
}
?>