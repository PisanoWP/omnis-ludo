<?php

define('OML_THEME_PATH', get_template_directory() );
define('OML_THEME_URL', get_template_directory_uri() );
define('OML_THEME_VERSION', '0.1.0' );

define('JGN_THEME_URL', get_template_directory_uri() );


if ( 'production' == wp_get_environment_type() ):
	define('OML_SCRIPT_SUFFIX', '.min');
else:
	define('OML_SCRIPT_SUFFIX', '');	
endif;



/**
 * Enqueue Theme Styles
 */
function omlwp_setup_enqueue_styles() {
		
	if (!is_admin()) {

    //  Vendor CSS Files     
		wp_enqueue_style( 'omlwp-font', OML_THEME_URL . '/vendor/fontawesome-free/css/all.min.css', array(), OML_THEME_VERSION);		

    // Template Main CSS File
    wp_enqueue_style( 'omlwp-style', OML_THEME_URL . '/css/freelancer' . OML_SCRIPT_SUFFIX . '.css', array(), OML_THEME_VERSION);        
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
	wp_enqueue_script( 'owlwp', OML_THEME_URL . '/js/freelancer' . OML_SCRIPT_SUFFIX . '.js',  array('jquery'), OML_THEME_VERSION, true );
			
}
add_action( 'wp_enqueue_scripts', 'omlwp_enqueue_scripts');