<?php
/**
 * UF CLAS Brand functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package UF_CLAS_Brand
 */

/**
 * Enqueue scripts and styles.
 * 
 * @since 0.0.1
 */
function ufclas_brand_styles_scripts() {
	
	// Custom styles
	wp_enqueue_style('brand', get_stylesheet_directory_uri() . '/style.css', false, '1.0.0', 'all');
	
}
add_action( 'wp_enqueue_scripts', 'ufclas_brand_styles_scripts' );

/**
 * Adds Google Analytics tracking code for non-logged in users
 *
 * @since 1.0.0
 */
function ufclas_brand_analytics(){

	if( !is_user_logged_in() ){
		get_template_part('inc/google-analytics');
	}
}
add_action('wp_head', 'ufclas_brand_analytics');