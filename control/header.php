<?php
  //autoloader para cargar clases
  require_once(__DIR__.'/../classes/autoloader.php');
  require_once(__DIR__.'/../config.php');

  //invocacion de clases
  use pdomysql AS pdomysql;
  use user AS user;

  $profile = user::getProfile($_SESSION['iduser']);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php $title= isset($_SESSION['user']) ? $_SESSION['user'].' | A donde ir en la Ciudad' : 'A donde ir en la Ciudad';echo $title; ?>  </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="css/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="css/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="css/bootstrap/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="css/jqvmap/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="css/bootstrap/daterangepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/owl/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="plugins/owl/assets/owl.theme.default.min.css">
    <!-- Custom Theme Style -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/helpers.css" rel="stylesheet">
    <link href="css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
        <!--dataTables Style -->
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
    <!--sweet alert -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/6.3.2/sweetalert2.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/6.3.2/sweetalert2.css">
  <script>
    var id_user=<?php echo $_SESSION['iduser']; ?>;
  </script>
  </head>


  <body class="nav-md" data-iduser="<?php echo $_SESSION['iduser'] ; ?>" >
    <div class="container body">
      <div class="main_container">
        <?php include dirname(__FILE__).'/sidemenu.php'; ?>
        <?php include dirname(__FILE__).'/topnavigation.php'; ?>

        <!-- page content -->
