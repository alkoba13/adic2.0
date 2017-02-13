<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package uaaan
 */

get_header(); 


?>


	<div id="primary" class="container">
		<main id="main" class="site-main" role="main">

			<?php
			if ( is_home() && ! is_front_page() )
{
	echo "home";
}
			while ( have_posts() ) : the_post();
				if( $post->post_parent !== 0 ) {
				    get_template_part('template-parts/content', 'page-child');
				} else {
				    get_template_part( 'template-parts/content', 'page' );
				}
				

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary container -->

<?php

get_footer();
