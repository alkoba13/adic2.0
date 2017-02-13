<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package raganaxi_theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
    	<div id="page" class="site">
    		

    		<div id="content" class="site-content">
