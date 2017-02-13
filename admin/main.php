<!DOCTYPE html>
<?php

require_once('../classes/autoloader.php');
require_once('../config.php');

//invocacion de clases
use pdomysql AS pdomysql;
use user AS user;


if ( $_SESSION['rol'] != 'administrador') {
    header("Location: index.php");
}
?>
<html>

  <head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="css/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- Theme style -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="../css/helpers.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/>



    <style type="text/css">

    </style>
  </head>

  <body class="skin-black">
    <!-- header logo: style can be found in header.less -->
    <header class="header">
      <a href="index.php" class="logo">
        <img class="h50 img-responsive center-block" src="../images/logos/logo.png" alt="logo" />
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div class="navbar-right">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu hidden">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope"></i>
                <span class="label label-success">4</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 4 messages</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <img src="img/26115.jpg" class="img-circle" alt="User Image" />
                        </div>
                        <h4>Support Team</h4>
                        <p>Why not buy a new awesome theme?</p>
                        <small class="pull-right"><i class="fa fa-clock-o"></i> 5 mins</small>
                      </a>
                    </li>
                    <!-- end message -->
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="img/26115.jpg" class="img-circle" alt="user image" />
                        </div>
                        <h4>Director Design Team</h4>
                        <p>Why not buy a new awesome theme?</p>
                        <small class="pull-right"><i class="fa fa-clock-o"></i> 2 hours</small>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="img/avatar.png" class="img-circle" alt="user image" />
                        </div>
                        <h4>Developers</h4>
                        <p>Why not buy a new awesome theme?</p>
                        <small class="pull-right"><i class="fa fa-clock-o"></i> Today</small>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="img/26115.jpg" class="img-circle" alt="user image" />
                        </div>
                        <h4>Sales Department</h4>
                        <p>Why not buy a new awesome theme?</p>
                        <small class="pull-right"><i class="fa fa-clock-o"></i> Yesterday</small>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="img/avatar.png" class="img-circle" alt="user image" />
                        </div>
                        <h4>Reviewers</h4>
                        <p>Why not buy a new awesome theme?</p>
                        <small class="pull-right"><i class="fa fa-clock-o"></i> 2 days</small>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">See All Messages</a></li>
              </ul>
            </li>
            <li class="dropdown tasks-menu hidden">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-tasks"></i>
                <span class="label label-danger">9</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 9 tasks</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <!-- Task item -->
                      <a href="#">
                        <h3>Design some buttons
                          <small class="pull-right">20%</small>
                        </h3>
                        <div class="progress progress-striped xs">
                          <div class="progress-bar progress-bar-success" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">20% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                    <li>
                      <!-- Task item -->
                      <a href="#">
                        <h3>Create a nice theme
                          <small class="pull-right">40%</small>
                        </h3>
                        <div class="progress progress-striped xs">
                          <div class="progress-bar progress-bar-danger" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">40% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                    <li>
                      <!-- Task item -->
                      <a href="#">
                        <h3>Some task I need to do
                          <small class="pull-right">60%</small>
                        </h3>
                        <div class="progress progress-striped xs">
                          <div class="progress-bar progress-bar-info" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                    <li>
                      <!-- Task item -->
                      <a href="#">
                        <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                        <div class="progress progress-striped xs">
                          <div class="progress-bar progress-bar-warning" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">80% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                  </ul>
                </li>
                <li class="footer">
                  <a href="#">View all tasks</a>
                </li>
              </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="">
              <a href="../main.php">
                <i class="fa fa-home"></i>
                <span>Inicio</span>
              </a>
            </li>
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user"></i>
                <span>Admin <i class="caret"></i></span>
              </a>
              <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                <li class="dropdown-header text-center">Account</li>
                <li class="hidden">
                  <a href="#">
                    <i class="fa fa-clock-o fa-fw pull-right"></i>
                    <span class="badge badge-success pull-right">10</span> Updates</a>
                  <a href="#">
                    <i class="fa fa-envelope-o fa-fw pull-right"></i>
                    <span class="badge badge-danger pull-right">5</span> Messages</a>
                  <a href="#"><i class="fa fa-magnet fa-fw pull-right"></i>
                                        <span class="badge badge-info pull-right">3</span> Subscriptions</a>
                  <a href="#"><i class="fa fa-question fa-fw pull-right"></i> <span class=
                                        "badge pull-right">11</span> FAQ</a>
                </li>

                <li class="divider"></li>

                <li>
                  <a href="#">
                    <i class="fa fa-user fa-fw pull-right"></i> Profile
                  </a>
                  <a data-toggle="modal" href="#modal-user-settings">
                    <i class="fa fa-cog fa-fw pull-right"></i> Settings
                  </a>
                </li>

                <li class="divider"></li>

                <li>
                  <a href="#"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="left-side sidebar-offcanvas bgDarkBlue">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../images/profile/01.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Admin</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..." />
              <span class="input-group-btn">
                                        <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                                    </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="active">
              <a href="index.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <!--<li>
              <a href="general.php">
                <i class="fa fa-gavel"></i> <span>General</span>
              </a>
            </li>

            <li>
              <a href="basic_form.php">
                <i class="fa fa-globe"></i> <span>Basic Elements</span>
              </a>
            </li>

            <li>
              <a href="simple.php">
                <i class="fa fa-glass"></i> <span>Simple tables</span>
              </a>
            </li>-->

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <aside class="right-side bgLightGrey">

        <!-- Main content -->
        <section class="content bgTransparent noPadding">
          <div class="clear"></div>
          <div id="accesos_directos" class="row" style="margin-bottom:5px;">
            <div class="col-md-3 col-xs-6">
              <div class="sm-st clearfix">
                <span class="sm-st-icon st-red"><i class="fa fa-check-square-o"></i></span>
                <div class="sm-st-info">
                  <span>3200</span> Total Tasks
                </div>
              </div>
            </div>
            <div class="col-md-3 col-xs-6">
              <div class="sm-st clearfix">
                <span class="sm-st-icon st-violet"><i class="fa fa-envelope-o"></i></span>
                <div class="sm-st-info">
                  <span>2200</span> Total Messages
                </div>
              </div>
            </div>
            <div class="col-md-3 col-xs-6">
              <div class="sm-st clearfix">
                <span class="sm-st-icon st-blue"><i class="fa fa-dollar"></i></span>
                <div class="sm-st-info">
                  <span>100,320</span> Total Profit
                </div>
              </div>
            </div>
            <div class="col-md-3 col-xs-6">
              <div class="sm-st clearfix">
                <span class="sm-st-icon st-green"><i class="fa fa-paperclip"></i></span>
                <div class="sm-st-info">
                  <span>4567</span> Total Documents
                </div>
              </div>
            </div>
          </div>

          <!-- Main row -->
          <div class="row">

            <div id="grafica_ganancias" class="col-lg-8 col-md-8 hidden">
              <!--earning graph start-->
              <section class="panel">
                <header class="panel-heading">
                  Earning Graph
                </header>
                <div class="panel-body">
                  <canvas id="linechart" width="600" height="330"></canvas>
                </div>
              </section>
              <!--earning graph end-->

            </div>
            <div id="notificaciones" class="col-lg-4 hidden">
              <!--chat start-->
              <section class="panel">
                <header class="panel-heading">
                  Notifications
                </header>
                <div class="panel-body" id="noti-box">

                  <div class="alert alert-block alert-danger">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
                  </div>
                  <div class="alert alert-success">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                    <strong>Well done!</strong> You successfully read this important alert message.
                  </div>
                  <div class="alert alert-info">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                    <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                  </div>
                  <div class="alert alert-warning">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                    <strong>Warning!</strong> Best check yo self, you're not looking too good.
                  </div>


                  <div class="alert alert-block alert-danger">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
                  </div>
                  <div class="alert alert-success">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                    <strong>Well done!</strong> You successfully read this important alert message.
                  </div>
                  <div class="alert alert-info">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                    <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                  </div>
                  <div class="alert alert-warning">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                    <strong>Warning!</strong> Best check yo self, you're not looking too good.
                  </div>



                </div>
              </section>



            </div>

          </div>
          <div class="row">

            <div id="solicitudes_socios" class="col-md-lg-8 col-md-8">
              <section class="panel">
                <header class="panel-heading">
                  Solicitudes<br>

                </header>

                <div class="panel-body table-responsive">

                  <table id="socTabla" class="table table-hover">
                    <thead>
                      <tr>
                        <th>Mail</th>
                        <th>Usuario</th>
                        <th>Negocio</th>
                        <th>Password</th>
                        <th>Rol</th>
                        <th>Estatus</th>
                        <th>Tipo de registro</th>
                        <th>Activacion</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $socios = user::getSoc(); 

                    foreach ($socios as $key => $value) {

                      $socios[$key]['active'] = ($socios[$key]['active'] == 0)? 'Inactivo' : 'activo';

                      $row = '<tr>'.
                        '<td>'.$socios[$key]['username'].'</td>'.
                        '<td>'.$socios[$key]['name'].'</td>'.
                        '<td>'.$socios[$key]['negocio'].'</td>'.
                        '<td>'.$socios[$key]['pass'].'</td>'.
                        '<td>'.$socios[$key]['role'].'</td>'.
                        '<td>'.$socios[$key]['active'].'</td>'.
                        '<td>'.$socios[$key]['reg_type'].'</td>'.
                        '<td><form class="ActiveSoc" action="activateuser.php" method="post"><input type="hidden" value="'.$socios[$key]['username'].'" name="usuario"><button class="activeBtn"  type="button" >Activar</button></form></td>'.
                        '</tr>';
                      echo $row;
                    }
                    ?>
                    </tbody>
                  </table>
                </div>
              </section>


            </div>
            <div class="col-lg-4 col-md-4">
              <form id="formCat" class="form-section panel" action="" method="post">
                <header class="panel-heading">
                  Crear Categoria
                </header>
                <div class="panel-body">
                  <input id="categoryTitle" type="text" class="form-control" placeholder="Nombre de Categoria">
                  <div class="clear"></div>
                  <textarea id="descriptionx" class="form-control h100" rows="4" placeholder="Descripción"></textarea>
                </div>
                <div class="panel-body">
                  <button type="button" id="createCategory" class="z-btn bgGreen cWhite" name="createCategory">Crear</button>
                </div>
              </form>
            </div>
            <!--end col-6 -->
            <div class="col-md-4 hidden">
              <section class="panel">
                <header class="panel-heading">
                  Twitter Feed
                </header>
                <div class="panel-body">
                  <div class="twt-area">
                    <form action="#" method="post">
                      <textarea class="form-control" name="profile-tweet" placeholder="Share something on Twitter.." rows="3"></textarea>

                      <div class="clearfix">
                        <button class="btn btn-sm btn-primary pull-right" type="submit">
                                    <i class="fa fa-twitter"></i>
                                    Tweet
                                </button>
                        <a class="btn btn-link btn-icon fa fa-location-arrow" data-original-title="Add Location" data-placement="bottom" data-toggle="tooltip" href="#" style="text-decoration:none;" title=""></a>
                        <a class="btn btn-link btn-icon fa fa-camera" data-original-title="Add Photo" data-placement="bottom" data-toggle="tooltip" href="#" style="text-decoration:none;" title=""></a>
                      </div>
                    </form>
                  </div>
                  <ul class="media-list">
                    <li class="media">
                      <a href="#" class="pull-left">
                        <img src="img/26115.jpg" alt="Avatar" class="img-circle" width="64" height="64">
                      </a>
                      <div class="media-body">
                        <span class="text-muted pull-right">
                                    <small><em>30 min ago</em></small>
                                </span>
                        <a href="page_ready_user_profile.php">
                          <strong>John Doe</strong>
                        </a>
                        <p>
                          In hac <a href="#">habitasse</a> platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend.
                          <a href="#" class="text-danger">
                            <strong>#dev</strong>
                          </a>
                        </p>
                      </div>
                    </li>
                    <li class="media">
                      <a href="#" class="pull-left">
                        <img src="img/26115.jpg" alt="Avatar" class="img-circle" width="64" height="64">
                      </a>
                      <div class="media-body">
                        <span class="text-muted pull-right">
                                    <small><em>30 min ago</em></small>
                                </span>
                        <a href="page_ready_user_profile.php">
                          <strong>John Doe</strong>
                        </a>
                        <p>
                          In hac <a href="#">habitasse</a> platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend.
                          <a href="#" class="text-danger">
                            <strong>#design</strong>
                          </a>
                        </p>
                      </div>
                    </li>
                  </ul>
                </div>
              </section>
            </div>

          </div>
          <div class="row hidden">
            <div class="col-md-5">
              <div class="panel">
                <header class="panel-heading">
                  Teammates
                </header>

                <ul class="list-group teammates">
                  <li class="list-group-item">
                    <a href=""><img src="img/26115.jpg" width="50" height="50"></a>
                    <span class="pull-right label label-danger inline m-t-15">Admin</span>
                    <a href="">Damon Parker</a>
                  </li>
                  <li class="list-group-item">
                    <a href=""><img src="img/26115.jpg" width="50" height="50"></a>
                    <span class="pull-right label label-info inline m-t-15">Member</span>
                    <a href="">Joe Waston</a>
                  </li>
                  <li class="list-group-item">
                    <a href=""><img src="img/26115.jpg" width="50" height="50"></a>
                    <span class="pull-right label label-warning inline m-t-15">Editor</span>
                    <a href="">Jannie Dvis</a>
                  </li>
                  <li class="list-group-item">
                    <a href=""><img src="img/26115.jpg" width="50" height="50"></a>
                    <span class="pull-right label label-warning inline m-t-15">Editor</span>
                    <a href="">Emma Welson</a>
                  </li>
                  <li class="list-group-item">
                    <a href=""><img src="img/26115.jpg" width="50" height="50"></a>
                    <span class="pull-right label label-success inline m-t-15">Subscriber</span>
                    <a href="">Emma Welson</a>
                  </li>
                </ul>
                <div class="panel-footer bg-white">
                  <!-- <span class="pull-right badge badge-info">32</span> -->
                  <button class="btn btn-primary btn-addon btn-sm">
                                        <i class="fa fa-plus"></i>
                                        Add Teammate
                                    </button>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <section class="panel tasks-widget">
                <header class="panel-heading">
                  Todo list
                </header>
                <div class="panel-body">

                  <div class="task-content">

                    <ul class="task-list">
                      <li>
                        <div class="task-checkbox">
                          <!-- <input type="checkbox" class="list-child" value=""  /> -->
                          <input type="checkbox" class="flat-grey list-child" />
                          <!-- <input type="checkbox" class="square-grey"/> -->
                        </div>
                        <div class="task-title">
                          <span class="task-title-sp">Director is Modern Dashboard</span>
                          <span class="label label-success">2 Days</span>
                          <div class="pull-right hidden-phone">
                            <button class="btn btn-default btn-xs"><i class="fa fa-check"></i></button>
                            <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="task-checkbox">
                          <!-- <input type="checkbox" class="list-child" value=""  /> -->
                          <input type="checkbox" class="flat-grey" />
                        </div>
                        <div class="task-title">
                          <span class="task-title-sp">Fully Responsive & Bootstrap 3.0.2 Compatible</span>
                          <span class="label label-danger">Done</span>
                          <div class="pull-right hidden-phone">
                            <button class="btn btn-default btn-xs"><i class="fa fa-check"></i></button>
                            <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="task-checkbox">
                          <!-- <input type="checkbox" class="list-child" value=""  /> -->
                          <input type="checkbox" class="flat-grey" />
                        </div>
                        <div class="task-title">
                          <span class="task-title-sp">Latest Design Concept</span>
                          <span class="label label-warning">Company</span>
                          <div class="pull-right hidden-phone">
                            <button class="btn btn-default btn-xs"><i class="fa fa-check"></i></button>
                            <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="task-checkbox">
                          <!-- <input type="checkbox" class="list-child" value=""  /> -->
                          <input type="checkbox" class="flat-grey" />
                        </div>
                        <div class="task-title">
                          <span class="task-title-sp">Write well documentation for this theme</span>
                          <span class="label label-primary">3 Days</span>
                          <div class="pull-right hidden-phone">
                            <button class="btn btn-default btn-xs"><i class="fa fa-check"></i></button>
                            <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="task-checkbox">
                          <!-- <input type="checkbox" class="list-child" value=""  /> -->
                          <input type="checkbox" class="flat-grey" />
                        </div>
                        <div class="task-title">
                          <span class="task-title-sp">Don't bother to download this Dashbord</span>
                          <span class="label label-inverse">Now</span>
                          <div class="pull-right">
                            <button class="btn btn-default btn-xs"><i class="fa fa-check"></i></button>
                            <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="task-checkbox">
                          <!-- <input type="checkbox" class="list-child" value=""  /> -->
                          <input type="checkbox" class="flat-grey" />
                        </div>
                        <div class="task-title">
                          <span class="task-title-sp">Give feedback for the template</span>
                          <span class="label label-success">2 Days</span>
                          <div class="pull-right hidden-phone">
                            <button class="btn btn-default btn-xs"><i class="fa fa-check"></i></button>
                            <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="task-checkbox">
                          <!-- <input type="checkbox" class="list-child" value=""  /> -->
                          <input type="checkbox" class="flat-grey" />
                        </div>
                        <div class="task-title">
                          <span class="task-title-sp">Tell your friends about this admin template</span>
                          <span class="label label-danger">Now</span>
                          <div class="pull-right hidden-phone">
                            <button class="btn btn-default btn-xs"><i class="fa fa-check"></i></button>
                            <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-default btn-xs"><i class="fa fa-times"></i></button>
                          </div>
                        </div>
                      </li>

                    </ul>
                  </div>

                  <div class=" add-task-row">
                    <a class="btn btn-success btn-sm pull-left" href="#">Add New Tasks</a>
                    <a class="btn btn-default btn-sm pull-right" href="#">See All Tasks</a>
                  </div>
                </div>
              </section>
            </div>
          </div>
          <!-- row end -->
        </section>
        <!-- /.content -->
        <div class="footer-main">
        </div>
      </aside>
      <!-- /.right-side -->

    </div>
    <!-- ./wrapper -->


    <!-- jQuery 2.0.2 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/jquery.min.js" type="text/javascript"></script>

    <!-- jQuery UI 1.10.3 -->
    <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

    <script src="js/plugins/chart.js" type="text/javascript"></script>

    <!-- datepicker
        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>-->
    <!-- Bootstrap WYSIHTML5
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>-->
    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- calendar -->
    <script src="js/plugins/fullcalendar/fullcalendar.js" type="text/javascript"></script>

    <!-- Director App -->
    <script src="js/Director/app.js" type="text/javascript"></script>

    <!-- Director dashboard demo (This is only for demo purposes) -->
    <script src="js/Director/dashboard.js" type="text/javascript"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>

    <!-- Director for demo purposes -->
    <script type="text/javascript">


    $('.activeBtn').on('click', function(){
      $(this).closest("form").submit();
    });


      $('input').on('ifChecked', function(event) {
        // var element = $(this).parent().find('input:checkbox:first');
        // element.parent().parent().parent().addClass('highlight');
        $(this).parents('li').addClass("task-done");
        console.log('ok');
      });
      $('input').on('ifUnchecked', function(event) {
        // var element = $(this).parent().find('input:checkbox:first');
        // element.parent().parent().parent().removeClass('highlight');
        $(this).parents('li').removeClass("task-done");
        console.log('not');
      });
    </script>
    <script>
      $('#noti-box').slimScroll({
        height: '400px',
        size: '5px',
        BorderRadius: '5px'
      });

      $('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({
        checkboxClass: 'icheckbox_flat-grey',
        radioClass: 'iradio_flat-grey'
      });
    </script>
    <script type="text/javascript">
      $(function() {
        "use strict";
        //BAR CHART
        var data = {
          labels: ["January", "February", "March", "April", "May", "June", "July"],
          datasets: [{
            label: "My First dataset",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 80, 81, 56, 55, 40]
          }, {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [28, 48, 40, 19, 86, 27, 90]
          }]
        };
        new Chart(document.getElementById("linechart").getContext("2d")).Line(data, {
          responsive: true,
          maintainAspectRatio: false,
        });

      });




/*
          var table = $('#socTabla').DataTable({
          "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.10/i18n/Spanish.json"
          },
          "iDisplayLength":100,
          "processing":true,
          "serverSide":true,
          //"scrollY": 500,
          //"scrollX": true,
          "ajax":{
              data:{},
              type:  'post',
              url: '../classes/controller/socTable.php'
          },
          "columnDefs":[
                {
                  "targets" : [5],
                  "render": function(data,type,full){
                      if(data == 1){
                        return 'Activo';
                      }else{
                        return 'Inactivo';
                      }

                  }
                }
              ],
          "sDom":'ltrip',
          "initComplete": function(settings, json) {
              }
            });
*/

      // Chart.defaults.global.responsive = true;
    </script>
  </body>

</html>
