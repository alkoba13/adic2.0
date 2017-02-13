<?php
  require_once(__DIR__.'/../classes/autoloader.php');
  require_once(__DIR__.'/../config.php');

  if(isset($_SESSION['user'])){
    header('Location: '.'dashboard.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login | </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="css/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/helpers.css" rel="stylesheet">
        <!--sweet alert -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/6.3.2/sweetalert2.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/6.3.2/sweetalert2.css">
  </head>

  <body id="login" class="login bgDarkBlue" data-iduser="<?php echo isset($_SESSION['user'])? $_SESSION['user'] : '' ; ?>">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="clear h200" style="display: none;"></div>
      <div class="z-block centered">
        <img src="../images/logos/logo.png" alt="..." class="h200" style="margin-top: 15%;">
      </div>
      <div class="clearfix"></div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form id="loginSocio">
              <h1>Login</h1>
              <div>
                <input Id="userSoc" type="text" class="form-control" placeholder="Usuario" name="user" value="">
              </div>
              <div>
                <input Id="passwSoc" type="password" class="form-control" placeholder="Contraseña" name="pass" value="">
              </div>
              <div class="clear"></div>
              <div>
                <button type="button" id="logSocio" href="perfil.php" class="btn bgGreen cWhite s20 text-center noTransform boxShadow">
                  Iniciar Sesión
                </button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">No tienes cuenta?
                  <a href="#signup" class="to_register"> Solicita tu regístro </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div class="hidden">
                  <h1><i class="fa fa-code"></i></h1>
                  <p>Copyright (c) 2016 Copyright Holder All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form id="registerSocio" enctype="multipart/form-data" method="post">
              <h1>Solicitar Cuenta</h1>
              <div>
                <input id="nameNegocio" type="text" class="form-control" placeholder="Nombre Negocio" name="nameBussiness" value="">
              </div>
              <div>
                <input id="nameSocio" type="text" class="form-control" placeholder="Nombre Representante" name="nameSocio" value="">
              </div>
              <div>
                <input id="telSocio" type="text" class="form-control" placeholder="Teléfono" name="telSocio" value="">
              </div>
              <div>
                <input id="mailSocio" type="text" class="form-control" placeholder="Correo" name="mailSocio" value="">
              </div>
              <div>
              <select id="categorySocio" class="form-control" name="categorySocio">
              <option value="0">--SELECCIONE UNA OPCION--</option>
                <?php
                 $result = posts::getCategory();
                // error_log(print_r($result,true));
                 for ($i=0; $i <count($result) ; $i++) { 
                  echo '<option value='.$result[$i]['idcategory'].'>'.$result[$i]['nombre'].'</option>';
                 }
                ?>
              </select>
              </div>
              <div class="clear"></div>
              <div>
                <button type="button" id="createSoc" class="btn bgGreen cWhite s20 text-center noTransform boxShadow">
                  Crear cuenta
                </button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Ya tienes cuenta?
                  <a href="#signin" class="to_register"> Haz Login </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div class="hidden">

                  <p>Copyright (c) 2015 Copyright Holder All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
  <!-- jQuery -->
  <script src="js/jquery.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/xpull.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/scripts.js"></script>
  <script src="js/functions.js"></script>
  <script src="js/jquery.validate.min.js"></script>
         <!--sweet alert   -->
  <script type="text/javascript" charset="utf8" src="https://cdn.jsdelivr.net/sweetalert2/6.3.2/sweetalert2.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.jsdelivr.net/sweetalert2/6.3.2/sweetalert2.js"></script>
</html>
