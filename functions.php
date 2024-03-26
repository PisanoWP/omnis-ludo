<?php

define('OML_THEME_PATH', get_template_directory() );
define('OML_THEME_URL', get_template_directory_uri() );
define('OML_THEME_VERSION', '0.4.0' );

define('JGN_THEME_URL', get_template_directory_uri() );


if ( 'production' == wp_get_environment_type() ):
	define('OML_SCRIPT_SUFFIX', '.min');
else:
	define('OML_SCRIPT_SUFFIX', '');	
endif;


require_once( OML_THEME_PATH . '/includes/jueganess.php' );


function omlwp_setup(){

	add_theme_support( "title-tag" ) ;
	add_theme_support( "post-thumbnails" );

	// Añadimos un nuevo tamaño
	add_image_size( 'thumbnail-16-9', 265, 150, array( 'center', 'center' ) );

	// Add RSS Support
	add_theme_support( 'automatic-feed-links' );

	// Default thumbnail size
	//set_post_thumbnail_size(150, 150, true);	
	add_theme_support( 'align-wide' );

  // Add HTML5 Support
  add_theme_support( 'html5',
           array(
            'comment-list',
            'comment-form',
            'search-form',
           )
  );

	add_editor_style();

	omnisludowp_check_update();

}
add_action( 'after_setup_theme', 'omlwp_setup');


/**
 * Enqueue Theme Styles
 */
function omlwp_setup_enqueue_styles() {
		
	if (!is_admin()) {

    //  Vendor CSS Files     
		wp_enqueue_style( 'omlwp-font', OML_THEME_URL . '/vendor/fontawesome-free/css/all.min.css', array(), OML_THEME_VERSION);		

    // Template Main CSS File
    wp_enqueue_style( 'omlwp-style', OML_THEME_URL . '/assets/css/freelancer' . OML_SCRIPT_SUFFIX . '.css', array(), OML_THEME_VERSION);        
		wp_enqueue_style( 'omlwp', get_stylesheet_uri(), array(), OML_THEME_VERSION);

	}

}
add_action( 'wp_enqueue_scripts', 'omlwp_setup_enqueue_styles' );


/**
 * Enqueue Theme Scripts
*/
function omlwp_enqueue_scripts() {
  
	if (!is_admin()) {
  
		// Vendor JS Files                                                    		
	  wp_enqueue_script( 'omlwp-bootstrap', OML_THEME_URL . '/vendor/bootstrap/js/bootstrap.bundle' . OML_SCRIPT_SUFFIX . '.js',  array('jquery'), OML_THEME_VERSION, true );
    
	  wp_enqueue_script( 'owlwp-easing', OML_THEME_URL . '/vendor/jquery-easing/jquery.easing' . OML_SCRIPT_SUFFIX . '.js',  array('jquery'), OML_THEME_VERSION, true );
    
  }

	// Template Main JS File 
	wp_enqueue_script( 'owlwp', OML_THEME_URL . '/assets/js/freelancer' . OML_SCRIPT_SUFFIX . '.js',  array('jquery'), OML_THEME_VERSION, true );
			
}
add_action( 'wp_enqueue_scripts', 'omlwp_enqueue_scripts');


//
// MENUS
//
class OWLWP_Menu_Walker extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth = 0, $args = null) {		

	}

	//function start_el(&$output, $item, $depth = 0, $args = null) {
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
			$classes = empty($item->classes) ? array() : (array) $item->classes;

			$classes[] = 'nav-item'; 
			$classes[] = 'mx-0';
			$classes[] = 'mx-lg-1';			
			$output .= "<li class='" . esc_attr(implode(' ', $classes)) . "'>";

			$atts = array();
			$atts['title']  = !empty($item->title)  ? $item->title  : '';
			$atts['target'] = !empty($item->target) ? $item->target : '';
			$atts['rel']    = !empty($item->xfn)    ? $item->xfn    : '';
			$atts['href']   = !empty($item->url)    ? $item->url    : '';

			$atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args);

			$attributes = '';
			foreach ($atts as $attr => $value) {
					if (!empty($value)) {
							$attributes .= ' ' . $attr . '="' . esc_attr($value) . '"';
					}
			}

			$item_output = $args->before;
			$item_output .= '<a class="nav-link py-3 px-0 px-lg-3 rounded  js-scroll-trigger" href="' . esc_url($item->url) . '"' . $attributes . '>';
			$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
			$item_output .= '</a>';
			$item_output .= $args->after;

			$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}
}


// Register menus
register_nav_menus(
	array(
		'owlwp-header-menu-home' => __( 'Menú principal Home', 'jueganess' ),  // Menú principal en home
		'owlwp-header-menu' => __( 'Menú principal resto páginas', 'jueganess' ),			 // Menú principal resto páginas
		'owlwp-footer-menu' => __( 'Menú pie', 'jueganess' )			 // Menú pie para páginas legales

	)
);

// Menú  principal en la página home
function omlwp_header_menu_principal_home() {
	wp_nav_menu( array('theme_location' => 'owlwp-header-menu-home',  // Where it's located in the theme
										 'container'      => 'ul',
										 'menu_class'     => 'navbar-nav ml-auto',
										 'walker' 				=> new OWLWP_Menu_Walker(),
										 'fallback_cb'		=> false
									 )
							);
}

// Menú  principal resto pagínas
function omlwp_header_menu_principal() {
	wp_nav_menu( array('theme_location' => 'owlwp-header-menu',  // Where it's located in the theme
										 'container'      => 'ul',
										 'menu_class'     => 'navbar-nav ml-auto',
										 'walker' 				=> new OWLWP_Menu_Walker(),
										 'fallback_cb'		=> false
									 )
							);

}

// Menú pie
function omlwp_footer_menu_principal(){	
	wp_nav_menu( array('theme_location' => 'owlwp-footer-menu',  // Where it's located in the theme
										 'container'      => 'ul',
										 'menu_class'     => 'navbar-nav ml-auto d-flex flex-row justify-content-around',
										 'walker' 				=> new OWLWP_Menu_Walker(),
										 'fallback_cb'		=> false
									 )
							);
}


//
// Zona de widgets
//
function omlwp_register_sidebars() {

	register_sidebar(
		array(
		'id' => 'omlwp_footer_1_3',
		'name' => __('Pie Columna Izquierda', 'jueganess'),
		'description' => __('Aparece en todas las páginas en el pie en la columna izquierda.', 'jueganess'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		/*'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',*/
	));


	register_sidebar(
		array(
		'id' => 'omlwp_footer_2_3',
		'name' => __('Pie Columna Central', 'jueganess'),
		'description' => __('Aparece en todas las páginas en el pie en la columna central.', 'jueganess'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(
		array(
		'id' => 'omlwp_footer_3_3',
		'name' => __('Pie Columna Derecha', 'jueganess'),
		'description' => __('Aparece en todas las páginas en el pie en la columna derecha.', 'jueganess'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

} // don't remove this bracket!

// adding sidebars to Wordpress
add_action( 'widgets_init', 'omlwp_register_sidebars' );



// Deshabilitamos el api
add_filter( 'rest_authentication_errors', function( $result ) {
	if ( ! empty( $result ) ) {
			return $result;
	}
	if ( ! is_user_logged_in() ) {
			return new WP_Error( 'rest_not_logged_in', 'No has iniciado sesión.', array( 'status' => 401 ) );
	}
	return $result;
});



/*
*
* CÓDIGO PARA COMPROBAR ACTUALIZACIONES
*
*/
require_once 'includes/class-omnisludowp-updater.php';

// Comprobamos si hay versiones nuevas del tema
function omnisludowp_check_update() {
	if ( is_admin() ) {
		
		$github_uri 	= false;
		$github_token = false;

		if ( defined( 'OMNISLUDO_GITHUB_URI' ) )
			$github_uri = OMNISLUDO_GITHUB_URI;

		if ( defined( 'OMNISLUDO_GITHUB_TOKEN' ) )
			$github_token = OMNISLUDO_GITHUB_TOKEN;

		$theme_name = basename( dirname(__FILE__) ) ;
		$config  = array(			                 
			'github_uri' => $github_uri,
			'token'      => $github_token 
		);
		$updater = new OMNISLUDOWP_Updater( $theme_name, $config);
		$updater->check_update();		
    
	}
} // omnisludowp_check_update
