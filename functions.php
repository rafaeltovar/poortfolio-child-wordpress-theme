<?php

/**
 * Functions
 *
 * Core functionality and initial theme setup
 */

/**
 * Enqueue Scripts and Styles for Front-End
 */

if ( ! function_exists( 'poortfoliochild_assets' ) ) :

function poortfoliochild_assets() {

	if (!is_admin()) {
		wp_enqueue_style( 'poortfolio-child', get_stylesheet_directory_uri().'/css/poortfolio-child.min.css' );	
	}

}

add_action( 'wp_enqueue_scripts', 'poortfoliochild_assets', 11);

endif;

?>