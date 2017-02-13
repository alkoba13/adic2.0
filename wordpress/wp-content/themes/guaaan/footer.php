<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uaaan
 */

?>

<footer id="footer">
	<div class="container">
		<div class="row top-footer">
			<div class="col-xs-12 col-sm-12 col-md-4">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Izquierdo')) : ?>
				<?php endif; ?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Centro')) : ?>
				<?php endif; ?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Derecho')) : ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row sub-footer">
			<div class="col-md-4 copyright copyright-left">
					Derechos Reservados 2015
			</div>
			<div class="col-md-4 copyright copyright-center" >
				Diseño y Desarrollo Web  <a href="http://www.rosvel.com" target="_blank"><img src="http://www.rosvel.com/rvl-amarillo-oscuro.png" alt="Rosvel Estudio Multimedia"></a>
        	</div>
			<div class="col-md-4 copyright copyright-right">
										<?php
										$defaults = array(
											'theme_location'  => 'rvl-footer',
											'menu'            => '',
											'container'       => 'div',
											'container_class' => '',
											'container_id'    => '',
											'menu_class'      => 'menu',
											'menu_id'         => '',
											'echo'            => true,
											'fallback_cb'     => 'wp_page_menu',
											'before'          => '<span class="separador"></span>',
											'after'           => '',
											'link_before'     => '',
											'link_after'      => '',
											'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
											'depth'           => 0,
											'walker'          => ''
										);

										wp_nav_menu( $defaults );

										?>
			</div>	
		</div>
	</div>
<?php wp_footer(); ?>

	</body>

</html>
