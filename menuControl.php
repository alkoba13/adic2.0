<nav class="nav z-container-fluid bgDark boxShadow">
  <div class="z-row noMargin">
    <div class="z-block h50">
      <div class="z-content-fluid z-contentMiddle text-left">
        <a id="openAside" role="button" class="cLightGrey s15">
          <span class="fa fa-bars s25"></span>
        </a>
      </div>
      <div class="z-content-fluid z-contentMiddle text-center">
        <a href="index.php" role="button" class="cLightGrey s15">
          <img class="h35" src="images/logos/48x48.png" alt="logo" />
        </a>
      </div>
      <div class="z-content-fluid z-contentMiddle text-right">
        <!-- <div id="openSearch" class="cLightGrey s20 text-bold" >
          <button class="searchDay bgDark noBorder" value="<?php echo date('Y-m-d'); ?>"><?php echo posts::getCurrentDay(strtotime(str_replace('-','/', date('Y-m-d H:i:s')))); ?></button><span class="fa fa-chevron-down s15"></span>
        </div> -->
      </div>
    </div>
  </div>
</nav>
<!-- <nav class="nav-movil hidden">
  <div class="fab bgBlue"><span class="fa fa-plus s25"></span></div>
  <div class="nav-modal">
    <div class="bgCover"></div>
    <ul>
      <li class="z-block h50">
        <a href="#" class="z-content z-contentMiddle cDark s20 text-bold text-center">
          Link
        </a>
      </li>
      <li class="z-block h50">
        <a href="#" class="z-content z-contentMiddle cDark s20 text-bold text-center">
          Link
        </a>
      </li>
      <li class="z-block h50">
        <a href="#" class="z-content z-contentMiddle cDark s20 text-bold text-center">
          Link
        </a>
      </li>
    </ul>
  </div>
</nav> -->
<aside id="sidebar" off-canvas="asideNav left push" role="navigation" class="mainContainer sidebar boxShadowRight bgLightBlue">
  <form class="z-container-fluid">
    <div class="clear"></div>
    <div class="z-row">
      <div class="z-col-lg-8 z-col-md-8 z-col-sm-8 z-col-xs-12">
        <div class="form-section">
          <input id="search" class="form-control square has-addon" type="text" name="search" value="" placeholder="Buscar...">
          <button type="button" id="searchBtn" class="z-btn cWhite bgGreen s15 form-addon"><span class="fa fa-search"></span></button>
        </div>
      </div>
    </div>
    <div class="sidebar-nav">
      <div class="list-group bgTransparent noBorder square">
        <a href="main.php" role="button" class="list-group-item cLightGrey s20 square noBorder noMargin bgTransparent">
          <span class="sidebar-icon fa fa-home cLightGrey"></span> Inicio
        </a>
        <a id="findRestaurant" role="button" class="list-group-item cLightGrey s20 square noBorder noMargin bgTransparent">
          <span class="sidebar-icon fa fa-cutlery cLightGrey"></span> Restaurantes
        </a>
        <a id="findBar" role="button" class="list-group-item cLightGrey s20 square noBorder noMargin bgTransparent">
          <span class="sidebar-icon fa fa-beer cLightGrey"></span> Bares
        </a>
        <a id="findAntro" role="button" class="list-group-item cLightGrey s20 square noBorder noMargin bgTransparent">
          <span class="sidebar-icon fa fa-glass cLightGrey"></span> Antros
        </a>
        <a id="findFoodTruck"  role="button" class="list-group-item cLightGrey s20 square noBorder noMargin bgTransparent">
          <span class="sidebar-icon fa fa-truck cLightGrey"></span> FoodTrucks
        </a>
        <a id="findEvent" role="button" class="list-group-item cLightGrey s20 square noBorder noMargin bgTransparent">
          <span class="sidebar-icon fa fa-calendar cLightGrey"></span> Eventos
        </a>
        <a id="findUbication" role="button" class="list-group-item cLightGrey s20 square noBorder noMargin bgTransparent">
          <span class="sidebar-icon fa fa-map cLightGrey"></span> Ubicaciones
        </a>
      </div>
    </div>

    <div class="z-row">
      <div class="z-forceBlock h50">
        <div class="z-block h150 hidden">
          <div class="z-content z-contentMiddle">
            <a href="user.php" class="sidebar-image panelImg bgDark ">
            </a>
          </div>
        </div>
        <a data-toggle="collapse" href="#profile-dropdown" role="button" class="z-block h50 cWhite bgDarkClear">
          <div class="z-content z-contentMiddle">
            <div class="z-panelBody">
              <span class="fa fa-user"></span>
          <?php
          if(isset($_SESSION['user'])) {
            echo $_SESSION['user'];
          } else {
            echo "no";
          }
           ?>
              <span class="fa fa-caret-down pull-right"></pan>
            </div>
          </div>
        </a>
        <div class="collapse" id="profile-dropdown">
          <div class="list-group bgLightGrey noBorder square">
            <a href="profile.php" role="button" class="list-group-item cWhite s15 square noBorder noMargin bgDark">
              Editar Perfil (socio)
            </a>
            <a href="#" role="button" class="list-group-item cWhite s15 square noBorder noMargin bgDark">
              link
            </a>
            <a role="button" id="logOutbtn" class="list-group-item cWhite s15 square noBorder noMargin bgDark">
              Cerrar sesión
            </a>
          </div>
        </div>
      </div>
    </div>
  </form>
  <div class="hidden" id="do_drag_search_close"></div>
</aside>
<aside class="userNav sidebar boxShadowLeft bgLightBlue mainContainer sidebar" off-canvas="userNav right push" role="panel" class="">
  <div class="sidebar-header header-cover z-forceBlock h50 panelImg">
    <div class="z-block h150 hidden">
      <div class="z-content z-contentMiddle">
        <a href="user.php" class="sidebar-image panelImg bgDark ">
        </a>
      </div>
    </div>
    <a data-toggle="collapse" href="#profile-dropdown" role="button" class="z-block h50 cDark text-bold bgWhiteClear">
      <div class="z-content z-contentMiddle">
        <div class="z-panelBody">
          usuario@correo.com
          <span class="fa fa-caret-down pull-right"></pan>
        </div>
      </div>
    </a>
  </div>
  <div class="collapse" id="profile-dropdown">
    <div class="list-group bgLightGrey noBorder square">
      <a href="#" role="button" class="list-group-item cWhite s15 square noBorder noMargin bgDark">
        link
      </a>
      <a href="#" role="button" class="list-group-item cWhite s15 square noBorder noMargin bgDark">
        link
      </a>
      <a role="button" href="index.php" class="list-group-item cWhite s15 square noBorder noMargin bgDark">
        Cerrar sesión
      </a>
    </div>
  </div>
</aside>
<aside class="searchSidebar sidebar boxShadowLeft bgLightBlue mainContainer sidebar" off-canvas="searchNav right push" role="panel">
  <div class="sidebar-nav">
    <!--<div class="list-group bgTransparent noBorder square">
      <a href="main.php" role="button" class="list-group-item cLightGrey s20 square noBorder noMargin bgTransparent">
        <span class="sidebar-icon fa fa-newspaper-o cLightGrey"></span> Noticias
      </a>
      <a href="main.php" role="button" class="list-group-item cLightGrey s20 square noBorder noMargin bgTransparent">
        <span class="sidebar-icon fa fa-calendar cLightGrey"></span> Eventos
      </a>
      <a href="main.php" role="button" class="list-group-item cLightGrey s20 square noBorder noMargin bgTransparent">
        <span class="sidebar-icon fa fa-bell cLightGrey"></span> Alertas
      </a>
      <a href="main.php" role="button" class="list-group-item cLightGrey s20 square noBorder noMargin bgTransparent">
        <span class="sidebar-icon fa fa-tag cLightGrey"></span> etc...
      </a>
    </div>-->
    <!--<hr class="separator">-->
    <div class="list-group bgTransparent noBorder square">
      <?php
      for ($i = 1; $i <= 6; $i++) {
          $day = date('Y-m-d', strtotime('+'.$i.' day'));
      ?>
       <button type="button"  class="list-group-item cLightGrey s20 square noBorder noMargin bgTransparent searchDay" value="<?php echo $day; ?>">
       <?php

            echo posts::getCurrentDay(strtotime(str_replace('-','/', $day)));
        ?>
        </button>
      <?php
            }
       ?>

    </div>
  </div>
</aside>
<div id="do_drag"></div>
<div id="do_drag_search_open"></div>
