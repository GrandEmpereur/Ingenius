<?php
/**
 * Twenty Twenty functions and definitions
 *
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_child
 * @since Twenty Twenty 1.0
 */

/**
 * Table of Contents:
 * Custome css
 * Custome Js
 */

function styleandscript() {
    
	wp_enqueue_style( 'prent-style', get_template_directory_uri() . '/style.css' );

	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . './assets/css/style.css');

	wp_enqueue_script( 'child-script', get_stylesheet_directory_uri() . './assets/js/app.js', array ( 'jquery' ), 1.1, true);

}
add_action('wp_enqueue_scripts', 'styleandscript');
