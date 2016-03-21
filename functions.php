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

/**
 * Adds title for the homepage and site name to other pages
 *
 * @since 1.0.1
 */
function ufclas_brand_title( $title ){
	
	$site_name = get_bloginfo('name');
	
	if( empty( $title ) && ( is_home() || is_front_page() ) ){
		$title = $site_name . ' | ' . __('University of Florida', 'ufclas_brand');
	}
	else {
		$title .= $site_name;
	}
	return $title;
}
add_action('wp_title', 'ufclas_brand_title');