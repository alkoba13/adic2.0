<?php
require_once('../classes/autoloader.php');
require_once('../config.php');

//invocacion de clases
use pdomysql AS pdomysql;
use user AS user;
echo json_encode($_POST);
user::activateUser($_POST['usuario']);
header('Location: index.php');
?>