<?php
// functions.php
function theme_setup(){
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('post-thumbnails');
set_post_thumbnail_size('large' );    //600, 300, true 
add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
	) );
	add_theme_support('page-attributes',array('parent','order'));
	
}
add_action('after_setup_theme', 'theme_setup');

function load_scripts_and_styles(){
	wp_enqueue_style('style', get_stylesheet_uri());
	
}
add_action('wp_enqueue_scripts', 'load_scripts_and_styles');
function add_stylesheet(){
	wp_register_style('bootstrap.min',get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap.min');
}
add_action('wp_enqueue_scripts','add_stylesheet');

require_once('lib/index.php');
//custom background
$defaults = array(
 'default-color' => 'FF00FF',
 'default-image' => '',
 'wp-head-callback' => '_custom_background_cb',
 'admin-head-callback' => '',
 'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );

