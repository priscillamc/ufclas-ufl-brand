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
 */
function ufclas_brand_styles_scripts() {
	
	// Custom styles
	wp_enqueue_style('brand', get_stylesheet_directory_uri() . '/style.css', false, '0.0.0', 'all');
	
}
add_action( 'wp_enqueue_scripts', 'ufclas_brand_styles_scripts' );