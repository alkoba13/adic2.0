<?php
/**
 * uaaan functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package uaaan
 */

if ( ! function_exists( 'uaaan_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function uaaan_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on uaaan, use a find and replace
	 * to change 'uaaan' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'uaaan', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size('oferta_educativa', 768, 500,true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'uaaan' ),
		) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'uaaan_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
		) ) );
}
endif; // uaaan_setup
add_action( 'after_setup_theme', 'uaaan_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function uaaan_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'uaaan_content_width', 640 );
}
add_action( 'after_setup_theme', 'uaaan_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function uaaan_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'uaaan' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		) );
	register_sidebar( array(
		'name'          => __( 'Footer Izquierdo' ),
		'id'            => 'sidebar-footer1',
		'description'   => __( 'Este widget es para el footer lado isquierdo' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		) );
	register_sidebar( array(
		'name'          => __( 'Footer Centro' ),
		'id'            => 'sidebar-footer2',
		'description'   => __( 'Este widget es para el footer central' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		) );
	register_sidebar( array(
		'name'          => __( 'Footer Derecho' ),
		'id'            => 'sidebar-footer3',
		'description'   => __( 'Este widget es para el footer lado derecho' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		) );
	register_sidebar( array(
		'name'          => __( 'Oferta Educativa' ),
		'id'            => 'sidebar-oeducativa',
		'description'   => __( 'Este widget es para oferta educativa' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		) );
}
add_action( 'widgets_init', 'uaaan_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function uaaan_scripts() {
	wp_enqueue_style( 'uaaan-style', get_stylesheet_uri() );
	wp_enqueue_script('modernizr',__DIRJS__."modernizr.custom.js",array(),"1.0",true);
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'uaaan-menu-responsive', __DIRJS__ . 'dl.menu.js', array('jquery','modernizr'),'20120206', true );
	wp_enqueue_script( 'uaaan-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0', true );

	wp_enqueue_script( 'uaaan-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'uaaan_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/*custom*/

/*constantes*/
define("__DIRTEMA__", get_template_directory_uri()."/" );
define("__DIRIMG__", get_template_directory_uri()."/img/");
define("__DIRCSS__", get_template_directory_uri()."/css/");
define("__DIRJS__", get_template_directory_uri()."/js/");
/*navs*/
register_nav_menus( array(
	'rvl-footer' => esc_html__( 'Footer Menu', 'rosvel' ),
	) );

/*custom post*/
add_action('init', 'function_pagina_noticias');
function function_pagina_noticias() {

	$labels = array(
		'name' => __( 'Noticias' ),
		'singular_name' => __( 'Noticia' ),
		'add_new' => 'Agregar Nueva Noticia',
		'add_new_item' => 'Agregar Nueva Noticia',
		'edit_item' => __( 'Editar' ),
		'new_item' => __( 'Nuevo'),
		'view_item' => __( 'Ver'),
		'search_items' => __( 'Buscar'),
		'not_found' =>  __('No se encontró nada'),
		'not_found_in_trash' => __('No se encontró nada en la papelera'),
		'parent_item_colon' => ''
		);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'rewrite' => true,
		'rewrite' => array( 'slug' => 'noticias' ),
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title','thumbnail','editor','author')
		); 

	register_post_type( 'raganaxi_noticias' , $args );
}

/*hook into the init action and call create_book_taxonomies when it fires*/
add_action( 'init', 'funcion_crear_categorias_noticias', 0 );

//create a custom taxonomy name it topics for your posts

function funcion_crear_categorias_noticias() {

/* Add new taxonomy, make it hierarchical like categories
first do the translations part for GUI*/

$labels = array(
	'name' => _x( 'Categoria', 'taxonomy general name' ),
	'singular_name' => _x( 'Categoria', 'taxonomy singular name' ),
	'search_items' =>  __( 'Search Categoria' ),
	'all_items' => __( 'All Categoria' ),
	'parent_item' => __( 'Parent Categoria' ),
	'parent_item_colon' => __( 'Parent Categoria:' ),
	'edit_item' => __( 'Edit Categoria' ), 
	'update_item' => __( 'Update Categoria' ),
	'add_new_item' => __( 'Add New Categoria' ),
	'new_item_name' => __( 'New Categoria Name' ),
	'menu_name' => __( 'Categoria' ),
	); 	

/* Now register the taxonomy*/

register_taxonomy('raganaxi_categoria_noticias',array('raganaxi_noticias'), array(
	'hierarchical' => true,
	'labels' => $labels,
	'show_ui' => true,
	'show_admin_column' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'categoria' ),
	));

$labels = array(
	'name' => _x( 'Especial', 'taxonomy general name' ),
	'singular_name' => _x( 'Especial', 'taxonomy singular name' ),
	'search_items' =>  __( 'Search Especial' ),
	'all_items' => __( 'All Especial' ),
	'parent_item' => __( 'Parent Especial' ),
	'parent_item_colon' => __( 'Parent Especial:' ),
	'edit_item' => __( 'Edit Especial' ), 
	'update_item' => __( 'Update Especial' ),
	'add_new_item' => __( 'Add New Especial' ),
	'new_item_name' => __( 'New Especial Name' ),
	'menu_name' => __( 'Especial' ),
	); 	

/* Now register the taxonomy*/

register_taxonomy('raganaxi_especial_noticias',array('raganaxi_noticias'), array(
	'hierarchical' => true,
	'labels' => $labels,
	'show_ui' => true,
	'show_admin_column' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'categoria' ),
	));


}
add_action( 'tgmpa_register', 'raganaxi_register_required_plugins' );
/**
 * Register required plugins
 * @return void
 * @since  1.0
 */
function raganaxi_register_required_plugins()
{
	$plugins = array(
		array(
			'name'               => 'Meta Box',
			'slug'               => 'meta-box',
			'required'           => true,
			'force_activation'   => false,
			'force_deactivation' => false,
			),
        // Premium extensions
		array(
			'name'               => 'Meta Box Tabs',
			'slug'               => 'meta-box-tabs',
			'source'             => get_template_directory() . '/plugins/meta-box-tabs.zip',
			'required'           => false,
			'force_activation'   => false,
			'force_deactivation' => false,
			),
        // You can add more plugins here if you want
		);
	$config  = array(
		'domain'           => 'raganaxi',
		'default_path'     => '',
		'parent_menu_slug' => 'themes.php',
		'parent_url_slug'  => 'themes.php',
		'menu'             => 'install-required-plugins',
		'has_notices'      => true,
		'is_automatic'     => false,
		'message'          => '',
		'strings'          => array(
			'page_title'                      => __( 'Install Required Plugins', 'raganaxi' ),
			'menu_title'                      => __( 'Install Plugins', 'raganaxi' ),
			'installing'                      => __( 'Installing Plugin: %s', 'raganaxi' ),
			'oops'                            => __( 'Something went wrong with the plugin API.', 'raganaxi' ),
			'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ),
			'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ),
			'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ),
			'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ),
			'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ),
			'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ),
			'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ),
			'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ),
			'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
			'activate_link'                   => _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
			'return'                          => __( 'Return to Required Plugins Installer', 'raganaxi' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'raganaxi' ),
			'complete'                        => __( 'All plugins installed and activated successfully. %s', 'raganaxi' ),
			'nag_type'                        => 'updated',
			)
		);
	tgmpa( $plugins, $config );
}
define( 'RWMB_DIR', get_template_directory() . '/lib/meta-box/' );
define( 'RWMB_URL', get_template_directory_uri() . '/lib/meta-box/' );
require_once RWMB_DIR . 'meta-box.php';
    /**
 * This file demonstrates how to use 'text' field
 */
    add_filter( 'rwmb_meta_boxes', 'raganaxi_text_demo' );
    function raganaxi_text_demo( $meta_boxes )
    {
    	$meta_boxes[] = array(
    		'id'         	=> 'raganaxi_titulo_noticia',
    		'title'  		=> __( 'Titulo', 'uaaan' ),
    		'post_types'  	=> array( 'raganaxi_noticias'),
    		'fields' => array(
    			array(
    				'name'        => __( 'Titulo 1', 'uaaan' ),
    				'id'          => 'text_raganaxi',
    				'desc'        => __( 'Titulo fuente 40px', 'uaaan' ),
    				'type'        => 'text',
				// Default value (optional)
    				'std'         => __( 'Default text value', 'uaaan' ),
				// CLONES: Add to make the field cloneable (i.e. have multiple value)
    				'clone'       => false,
				// Placeholder
    				'placeholder' => __( 'Teclea algo dentro', 'uaaan' ),
				// Input size
    				'size'        => 30,
				// Datalist
    				'datalist'    => array(
					// Unique ID for datalist
    					'id'      => 'text_datalist',
					// List of predefined options
    					'options' => array(
    						__( 'What', 'uaaan' ),
    						__( 'When', 'uaaan' ),
    						__( 'Where', 'uaaan' ),
    						__( 'Why', 'uaaan' ),
    						__( 'Who', 'uaaan' ),
    						),
    					),
    				),
    			array(
    				'id'   => 'text_raganaxi2',
    				'name' => __( 'Titulo 2', 'textdomain' ),
    				'type' => 'text',
    				'desc'        => __( 'Titulo fuente 70px', 'uaaan' ),
    				),
    			array(
    				'id'   => 'text_raganaxi3',
    				'name' => __( 'Titulo 3', 'textdomain' ),
    				'type' => 'text',
    				'desc'        => __( 'Titulo fuente 58px', 'uaaan' ),
    				),

    			),
    		);
    	return $meta_boxes;
    }
/*
parametros 
clase icono => icon=""
titulo   => titulo""
contenido => contenido""
[link_home_uaaan]
[link_home_uaaan icon="" titulo="" contenido="" link=""]
*/

function link_home_narro( $atts, $content = null, $code = "" ) {
	$parametros = shortcode_atts( array (
		

		), $atts );
	$return='';
   	// get attibutes and set defaults
	extract(shortcode_atts(array(
		'icon' => 'No especificado',
		'titulo' => 'No especificado',
		'contenido' =>'No especificado',
		'link' => '#'
		), $atts));
	$return.='<li><a href="'.$link.'"><b class="link-space"></b>';
	$return.='<b class="link-icon"><i class="'.$icon.'"></i></b>';
	$return.='<b class="link-text"><h3>'.$titulo.'</h3>';
	$return.='<span>'.$contenido.'</span></b><div class="shadow"></div></a></li>';
	return $return;
}

// El ShortCode
add_shortcode( 'link_home_uaaan', 'link_home_narro' );

function link_home_narro_js() {
	wp_enqueue_script('modernizr',__DIRJS__."modernizr.custom.js",array(),"1.0",true);
	wp_enqueue_style( 'link_icon', __DIRCSS__."fonts-icon-uaan.css" );
	wp_enqueue_script('jquery');	
	wp_enqueue_script('hoverdir',__DIRJS__."jquery.hoverdir.js",array('jquery'),"1.0",true);
	wp_enqueue_script('hoverdir',__DIRJS__."jquery.hoverdir.js",array('jquery'),"1.0",true);
	$return="<script type=\"text/javascript\">
	jQuery(function ($){
		$(document).ready(function(){				
			$(' #da-thumbs > li').each( function() { $(this).hoverdir(); } );

		});
	});
</script>";
return $return;
}

add_shortcode( 'link_home_uaaan_js', 'link_home_narro_js' );


add_filter( 'dlm_do_not_force', '__return_true' );

add_action( 'admin_menu', 'register_pagina_exportar_formulario' );

function register_pagina_exportar_formulario(){
	add_menu_page( 'Exportar Formulario', 'Exportar egresados', 'manage_options', 'exportaregresados', 'funcion_pagina_egresados', '', 7); 
}

function funcion_pagina_egresados(){
	echo '<div class="wrap"><h1>Exportar Formulario</h1></div><div class="wrap">'.do_shortcode('[cfdb-export-link form="egresados" enc="xlsx" linktext="Descargar Archivo"]').'</div>';	
}
function fn_imagen_destacada($id,$tamaño) {
	//echo "<br>".$id;
	$thumbID = get_post_thumbnail_id( $id );
	$imgDestacada = wp_get_attachment_image_src( $thumbID, $tamaño ); 
    return $imgDestacada[0]; // 0 = ruta, 1 = altura, 2 = anchura, 3 = boolean
}

/*
parametros 
nombre => nombre =""
titulo   => titulo""
contenido => contenido""
[link_home_uaaan]
[link_home_uaaan icon="" titulo="" contenido="" link=""]
*/

function fn_owl_carrusel( $atts, $content = null, $code = "" ) {
	wp_enqueue_style( 'owlcarousel-style',__DIRTEMA__."owlcarousel/assets/owl.carousel.css");
	wp_enqueue_script( 'jquery');
	wp_enqueue_script('owlcarousel-script',__DIRTEMA__."owlcarousel/owl.carousel.min.js",array('jquery'),"1.0",true);
	$return='';
   	// get attibutes and set defaults
	extract(shortcode_atts(array(
		'nombre' => 'No especificado',
		'ids' => null,
		), $atts));

	$nombres = explode(",", $nombre);
	$imagenes = explode(",", $ids);
	$return.='
	<div class="row">
		<div class="col-xs-12 col-md-6">
			<ul id=\'carousel-custom-dots\' class="owl-dots responsive-padding-768" >';
				foreach ($nombres as $li => $valor) {
					$return.='<li class=\'owl-dot\'><a href="'.get_the_permalink(strval($imagenes[$li])).'">'.$valor.'</a></li>';
				}
				$return.='</ul>
			</div>
			<div class="col-xs-12 col-md-6">
				<div id=\'carousel\' class=\'owl-carousel\'>';
					foreach ($imagenes as $key => $value) {
						$url_img=fn_imagen_destacada($value,'oferta_educativa');
						$titulo=get_the_title( strval($value) );

						$return.='<img class="owl-lazy" data-src="'
						.$url_img.'" data-src-retina="'
						.$url_img.'" alt="'
						.$titulo.'">';
					}
					$return.='					
				</div>

			</div>
		</div>';
		?>
		<script type="text/javascript">
			jQuery(document).ready(function($){
				$(".owl-carousel").owlCarousel({
					items:1,
					lazyLoad:true,
					loop:true,
					margin:15,
					stagePadding:15,
					dotsContainer: '#carousel-custom-dots',
					smartSpeed:450

				});
				owl = $('.owl-carousel').owlCarousel();
				$('.owl-dot').hover(function() {
					owl.trigger('to.owl.carousel', [$(this).index(), 300]);
				}, function() {
					/* Stuff to do when the mouse leaves the element */
				});

			});
		</script>
		<?php

		return $return;
	}

// El ShortCode
	add_shortcode( 'show-list', 'fn_owl_carrusel' );
/*
parametros 
tit =>  tit =""
ids   => ids= ""
[otras_licenciaturas]
[otras_licenciaturas ids="223,210,233, 235,237,240,242"]
*/

function fn_otras_licenciaturas( $atts, $content = null, $code = "" ) {
	global $post;
	$return='';
   	// get attibutes and set defaults
	extract(shortcode_atts(array(
		'ids' => null,
		'tit'=> 'OTRAS LICENCIATURAS',
		), $atts));
	$imagenes = explode(",", $ids);
	$return.='<div class="title-otraseducativa">'.$tit.'</div>
	<div class="row flex-box flex-center">';
		foreach ($imagenes as $key => $value) {
			if($value==$post->ID){
				continue;
			}
			$url_img=fn_imagen_destacada($value,'oferta_educativa');
			$titulo=get_the_title( strval($value) );
			$link=get_the_permalink(strval($value));
			$return.='<div class="col-xs-6 col-sm-4 col-md-2 wpb_animate_when_almost_visible wpb_appear">';
			$return.='<a href="'.$link.'" alt="'.$titulo.'" title="'.$titulo.'"><div class="img-otraeducativa">
			<img class="img-responsive" src="'.$url_img.'" alt="'.$titulo.'">
			</div></a>
			<a href="'.$link.'" alt="'.$titulo.'" title="'.$titulo.'"><div class="titulo-otraeducativa">'.$titulo.' </div></a></div>';
		}
		$return.='

	</div>';


	return $return;
}

// El ShortCode
add_shortcode( 'otras_licenciaturas', 'fn_otras_licenciaturas' );

function fn_otros_posgrados( $atts, $content = null, $code = "" ) {
	global $post;
	$return='';
   	// get attibutes and set defaults
	extract(shortcode_atts(array(
		'ids' => null,
		'tit'=> 'OTROS POSGRADOS',
		), $atts));
	$imagenes = explode(",", $ids);
	$return.='<div class="title-otraseducativa">'.$tit.'</div>
	<div class="row flex-box flex-center">';
		foreach ($imagenes as $key => $value) {
			if($value==$post->ID){
				continue;
			}
			$url_img=fn_imagen_destacada($value,'oferta_educativa');
			$titulo=get_the_title( strval($value) );
			$link=get_the_permalink(strval($value));
			$return.='<div class="col-xs-6 col-sm-4 col-md-2 wpb_animate_when_almost_visible wpb_appear">';
			$return.='<a href="'.$link.'" alt="'.$titulo.'" title="'.$titulo.'"><div class="img-otraeducativa">
			<img class="img-responsive" src="'.$url_img.'" alt="'.$titulo.'">
			</div></a>
			<a href="'.$link.'" alt="'.$titulo.'" title="'.$titulo.'"><div class="titulo-otraeducativa">'.$titulo.' </div></a></div>';
		}
		$return.='

	</div>';


	return $return;
}

// El ShortCode
add_shortcode( 'otros_posgrados', 'fn_otros_posgrados' );

