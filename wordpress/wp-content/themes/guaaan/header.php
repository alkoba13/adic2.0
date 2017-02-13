<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uaaan
 */

?>

<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>

		<meta charset="UTF-8" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 


		<title>uaaan</title>

		<link rel="shortcut icon" href="/favicon.ico">

		<link rel="stylesheet" type="text/css" href="<?php echo __DIRCSS__; ?>font-awesome.min.css" />		

		<link rel="stylesheet" type="text/css" href="<?php echo __DIRCSS__; ?>animate.css" />		

		<!-- Latest compiled and minified CSS -->

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Optional theme -->

		<link rel="stylesheet" type="text/css" href="<?php echo __DIRCSS__; ?>inicio.css" />

		

		<script type="text/javascript">

			var dir_theme = '<?php echo __DIRTEMA__; ?>';

		</script>

	</head>
<body <?php body_class(); ?>>
	<header id="headermain" class="container">
		<div id="topheader">
			
		</div>
		<div id="bottomheader">
			<div id="logo" class="col-xs-6 col-md-6">
				<img src="<?php echo __DIRIMG__ ?>logo.png" alt="logo" class="center-block">
			</div>
			<div id="titulo" class="col-s-6 col-md-6">
				<div class="home-title">Unidad Laguna</div>
			</div>
		</div>
	</header>
	<header id="header-menu" >
		<div id="menu-container" class="container">
  		<nav id="nav-responsive-menu" role="navigation" class="container dl-menuwrapper">
	  		<button class="dl-trigger">Open Menu</button>
			<?php 

   				$defaults = array(

					  'theme_location'  => 'primary',

					  'menu'            => '',

					  'container'       => 'false',

					  'container_class' => '',

					  'container_id'    => '',

					  'menu_class'      => 'ul-menu-responsive dl-menu',

					  'menu_id'         => '',

					  'echo'            => true,

					  'fallback_cb'     => 'wp_page_menu',

					  'before'          => '',

					  'after'           => '',

					  'link_before'     => '',

					  'link_after'      => '',

					  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',

					  'depth'           => 0,

					  'walker'          => ''

					);



				wp_nav_menu( $defaults );


			 ?>
		</nav></div>
    <script>
			jQuery(function ($){
				$(document).ready(function(){	
					$( '#nav-responsive-menu' ).dlmenu();
					    var nav = $('#menu-container');
					    var adminbar=$('#wpadminbar');
					    var header=$('#menu-container');

					    $(window).scroll(function () {
					    	if ($(window).width()>=1200) {
					    		if ($(this).scrollTop() > 200) {					        	
						            nav.addClass("fixed");
						            header.removeClass('container')
						            nav.css('top', 0+adminbar.height()+'px');
					        	} else {					            
						            nav.removeClass("fixed");
						            nav.css('top', '0px');
						            header.addClass('container')

					        	}
					   		}else{
					   			nav.removeClass("fixed");
						        nav.css('top', '0px');
						        header.addClass('container')
					   		}





					        
					    });

				});


			});
		</script>
	</header>

