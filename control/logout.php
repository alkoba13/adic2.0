<?php
require_once(__DIR__.'/../classes/autoloader.php');
require_once(__DIR__.'/../config.php');
session_destroy();
header('Location: '.'index.php');
 ?>
