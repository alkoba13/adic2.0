<!-- top navigation -->
<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="user-profile dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
            <div class="profile_pic">
            <div style="background-image: url(http://adondeirenlaciudad.com/imagenes_/profPicture/<?php echo $profile['0']['img']; ?>);" class="img-circle profile_img profile_img_sidemenu"></div>
            </div><?php
            if(isset($_SESSION['user'])) {
              echo $_SESSION['user'];
            } else {
              echo "no";
            }
             ?>
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
           <li><a href="publicaciones.php"><i class="fa fa-dollar"></i> Publicaciones</a></li>
            <li><a href="profile.php"><i class="fa fa-users"></i> Cuenta</a></li>
            <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
          </ul>
        </li>

        
      </ul>
    </nav>
  </div>
</div>
<!-- /top navigation -->
