<?php

$post_types = array(
		'Products',
		'Invoice',
	);

foreach ($post_types as $post_type) {
	if(file_exists(__DIR__.'/post_types/'.$post_type.'.php'))
		require_once('post_types/'.$post_type.'.php');
}
	
$taxonomies = array(
		'topics',
	);

foreach ($taxonomies as $taxonomy) {
	if(file_exists(__DIR__.'/taxonomies/'.$taxonomy.'.php'))
		require_once('taxonomies/'.$taxonomy.'.php');
}

$widgets = array(
		'single-product-widget',
		'latest-added-men-widget',
		'latest-added-woman-widget',
		'latest-added-kides-widget'
	);
foreach ($widgets as $widget) {
	if(file_exists(__DIR__.'/widgets/'.$widget.'.php'))
		require_once('widgets/'.$widget.'.php');
}
require_once('custom-fields.php');

function setup_sidebars(){
	$args = array(
	        'name'          => __( 'Primary', 'theme_text_domain' ),
	        'id'            => 'primary',
	        'description'   => '',
	        'class'         => '',
	        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</li>',
	        'before_title'  => '<h2 class="widgettitle">',
	        'after_title'   => '</h2>'
	);
	register_sidebar($args);

	$args = array(
	        'name'          => __( 'Main Sidebar', 'theme_text_domain' ),
	        'id'            => 'main-sidebar',
	        'description'   => '',
	        'class'         => '',
	        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</li>',
	        'before_title'  => '<h2 class="widgettitle">',
	        'after_title'   => '</h2>'
	);
	register_sidebar($args);
}
add_action( 'widgets_init', 'setup_sidebars' );