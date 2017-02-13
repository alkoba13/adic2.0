<div id="socio_panel" class="right_col" role="main">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Dashboard</h2>
          <ul class="nav navbar-right panel_toolbox">
            <?php /*<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li> */?>
            <?php /*<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
              </ul>
            </li>*/?>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
            <div class="profile_img">
              <div id="crop-avatar">
                <!-- Current avatar -->
                <img class="img-responsive avatar-view" src="http://adondeirenlaciudad.com/imagenes_/profPicture/<?php 
                echo $profile['0']['img']; ?>" alt="Avatar" title="Change the avatar">
              </div>
            </div>

            
            <?php /*
            <ul class="list-unstyled user_data">
              <li><i class="fa fa-map-marker user-profile-icon"></i> San Francisco, California, USA
              </li>

              <li>
                <i class="fa fa-briefcase user-profile-icon"></i> Software Engineer
              </li>

              <li class="m-top-xs">
                <i class="fa fa-external-link user-profile-icon"></i>
                <a href="http://www.kimlabs.com/profile/" target="_blank">www.kimlabs.com</a>
              </li>
            </ul>

            <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
            <br />

            <!-- start skills -->
            <div class="hidden">
              <h4>Skills</h4>
              <ul class="list-unstyled user_data">
                <li>
                  <p>Web Applications</p>
                  <div class="progress progress_sm">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                  </div>
                </li>
                <li>
                  <p>Website Design</p>
                  <div class="progress progress_sm">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70"></div>
                  </div>
                </li>
                <li>
                  <p>Automation & Testing</p>
                  <div class="progress progress_sm">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30"></div>
                  </div>
                </li>
                <li>
                  <p>UI / UX</p>
                  <div class="progress progress_sm">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                  </div>
                </li>
              </ul>
            </div>
            <!-- end of skills -->
            */

$date = strtotime ( '+1 month' , strtotime ( $profile['0']['date_active'] ) ) ;
$date = date ( 'd-m-Y' , $date );
 ?>
          </div>
          <div class="col-md-9 col-sm-9 col-xs-12">
          
            <div class="profile_title">
             <div><h3><?php echo $profile['0']['negocio']; ?></h3>
           <h3 >Proxima fecha de pago: <i style="color: blue;"><?php echo $date; ?></i></h3></div>      
              <div class="col-md-6">

                <?php /*<h2>Reporte de Actividad</h2>
              </div>
              <div class="col-md-6">
                <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
                  <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                  <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                </div>
              </div>
            </div>
            <!-- start of user-activity-graph -->

            <div id="graph_bar" style="width:100%; height:280px;"></div>
            <!-- end of user-activity-graph -->*/?>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
