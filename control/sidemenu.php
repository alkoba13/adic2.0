<!--sidemenu-->
<div class="col-md-3 left_col bgDarkBlue">
  <div class="left_col scroll-view bgDarkBlue">
    <div class="navbar nav_title" style="border: 0;">
      <a href="index.php" class="site_title text-center noPadding">
        <img src="../images/logos/logo.png" alt="..." class="h60">
        <!-- <i class="fa fa-code"></i> <span>asd</span> -->
      </a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile">
      <div class="profile_pic">
        <div style="background-image: url(http://adondeirenlaciudad.com/imagenes_/profPicture/<?php echo $profile['0']['img']; ?>);" class="img-circle profile_img profile_img_sidemenu"></div>
      </div>
      <div class="profile_info">
        <span>Bienvenido,</span>
        <h2><?php if(isset($profile['0']['name'])){ echo $profile['0']['name']; }; ?></h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <div class="clear h10"></div>

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <?php
      if (isset($_SESSION['rol']) && $_SESSION['rol'] != '') {
        switch ($_SESSION['rol']) {
          case 'administrador': ?>
            <div class="menu_section">
              <h3>Socios</h3>
              <ul class="nav side-menu">
                <li>
                  <a href="solicitudes.php"><i class="fa fa-check"></i> Solicitudes de Registro</a>
                </li>
                <li>
                  <a href="socios.php"><i class="fa fa-users"></i> Ver Socios Registrados</a>
                </li>
                <li>
                  <a href="standby.php"><i class="fa fa-user-times"></i> Ver Socios En StandBy</a>
                </li>
                <li>
                  <a href="new.php"><i class="fa fa-plus"></i> Registrar Socio</a>
                </li>
              </ul>
            </div>
          <?php break;
          case 'socio': ?>
            <div class="menu_section">
              <h3>Acciones</h3>
              <ul class="nav side-menu">
                <li>
                  <a href="publicaciones.php"><i class="fa fa-dollar"></i> Publicaciones</a>
                </li>
                <li class="hidden">
                  <a href="event.php"><i class="fa fa-calendar-check-o"></i> Crear Evento</a>
                </li>
              </ul>
            </div>
            <div class="menu_section">
              <h3>Configuración</h3>
              <ul class="nav side-menu">
                <li>
                  <a href="profile.php"><i class="fa fa-users"></i> Cuenta</a>
                </li>
                <li style="display: none;">
                  <a href="pagos.php"><i class="fa fa-credit-card"></i> Pagos</a>
                </li>
              </ul>
            </div>
          <?php break;
          case 'usuario': ?>
          <?php break;
          default:
            break;
        }
      } else {
        echo 'nope';
      } ?>
    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout" id="logOutbtn">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>
<!--/sidemenu-->
