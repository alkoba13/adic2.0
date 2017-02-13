<?php
include ('header.php');
//autoloader para cargar clases
require_once(__DIR__.'/classes/autoloader.php');
require_once(__DIR__.'/config.php');

//invocacion de clases
use pdomysql AS pdomysql;
use user AS user;

if(isset($_SESSION['user'])){
  header('Location: '.'main.php');
}
?>

  <main class="z-container-fluid splash bgDark noPadding hFull">

    <!--<div class="bgCover"></div>
    <div class="z-container">
      <div class="hFull z-block">
        <div class="z-content z-contentMiddle">
          <div class="z-row">
            <div class="z-col-lg-12">
              <img src="images/logos/logo.png" class="centered z-forceBlock wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s" />
            </div>
          </div>
          <div class="clear h100"></div>
          <div class="z-row wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
            <div class="z-col-xs-12">
              <h1 class="cWhite text-center s25">Bienvenido</h1>
            </div>
            <div class="z-col-lg-4 z-col-lg-offset-2 z-col-md-4 z-col-md-offset-2 z-col-sm-4 z-col-sm-offset-2 z-col-xs-8 z-col-xs-offset-2">
              <a href="main.html" class="z-btn h50 btn-rounded bgGreen cWhite s20 text-center noTransform boxShadow" data-toggle="modal" data-target="#loginModal">
                Inicia sesión<br>
              </a>
              <div class="clear"></div>
            </div>
            <div class="z-col-lg-4 z-col-md-4 z-col-sm-4 z-col-sm-offset-0 z-col-xs-8 z-col-xs-offset-2">
              <a href="main.html" class="z-btn btn-rounded h50 bgLightBlue cWhite s20 text-center noTransform boxShadow" data-toggle="modal" data-target="#regModal">
                Crea una cuenta
              </a>
              <div class="clear"></div>
            </div>
          </div>
        </div>
      </div>
    </div>-->
  </main>

  <div class="modal fade bgWhite" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content noShadow noBorder bgTransparent">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Ingresa</h4>
        </div>
        <div class="modal-body">
          <form id="lognUser" class="form-section">
            <label for="logUser"></label>
            <input id="logUser" type="text" class="form-control" placeholder="Usuario" name="logUser" value="">
            <div class="clear"></div>
            <label for="logPass"></label>
            <input id="logPass" type="password" class="form-control" placeholder="Contraseña" name="logPass" value="">
            <div class="clear"></div>
            <button type="button" id="loginU"  class="z-btn h50 btn-rounded bgGreen cWhite s20 text-center noTransform boxShadow" disabled>
              Iniciar Sesión
            </button>
          </form>
          <hr>
          <div class="form-section">
            <a href="main.php" class="z-btn btn-rounded h50 bgBlue cWhite s20 text-center noTransform boxShadow">
              Facebook
            </a>
            <div class="clear"></div>
            <a href="main.php" class="z-btn btn-rounded h50 bgRed cWhite s20 text-center noTransform boxShadow">
              Google+
            </a>
          </div>
        </div>
        <!--<div class="modal-footer">
          <a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>-->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  <div class="modal fade bgWhite" id="regModal" tabindex="-1" role="dialog" aria-labelledby="regModalLabel" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content noShadow noBorder bgTransparent">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Registrate</h4>
        </div>
        <div class="modal-body">
          <form id="registerUser" class="form-section">

            <label for="ruMail"></label>
            <input id="ruMail" type="text" class="form-control" placeholder="Correo" name="ruMail" value="" required>

            <div class="clear"></div>

            <label for="ruPass"></label>
            <input id="ruPass" type="password" class="form-control" placeholder="Contraseña" name="ruPass" value="" required>

            <div class="clear"></div>
            <button type="button" id="crteAccountE" class="z-btn btn-rounded h50 bgGreen cWhite s20 text-center noTransform boxShadow" disabled>
              Crear cuenta
            </button>
          </form>
          <hr>
          <div class="form-section">
            <a href="main.php" class="z-btn btn-rounded h50 bgBlue cWhite s20 text-center noTransform boxShadow">
              Facebook
            </a>
            <div class="clear"></div>
            <a href="main.<?php  ?>" class="z-btn btn-rounded h50 bgRed cWhite s20 text-center noTransform boxShadow">
              Google+
            </a>
          </div>
        </div>
        <!--<div class="modal-footer">
          <a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>-->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>

<?php include ('footer.php'); ?>
