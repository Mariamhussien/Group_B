<?php
// Register Custom Post Type
function Invoice_post_type() {

	$labels = array(
		'name'                  => _x( 'Invoices', 'Post Type General Name', 'Invoice' ),
		'singular_name'         => _x( 'Invoice', 'Post Type Singular Name', 'Invoice' ),
		'menu_name'             => __( 'Invoice', 'Invoice' ),
		'name_admin_bar'        => __( 'Invoice', 'Invoice' ),
		'archives'              => __( 'Invoice Archives', 'Invoice' ),
		'parent_item_colon'     => __( 'Parent Invoice', 'Invoice' ),
		'all_items'             => __( 'All Invoices', 'Invoice' ),
		'add_new_item'          => __( 'Add New Invoice', 'Invoice' ),
		'add_new'               => __( 'Add New', 'Invoice' ),
		'new_item'              => __( 'New Invoice', 'Invoice' ),
		'edit_item'             => __( 'Edit Invoice', 'Invoice' ),
		'update_item'           => __( 'UpdateInvoice', 'Invoice' ),
		'view_item'             => __( 'View Invoice', 'Invoice' ),
		'search_items'          => __( 'Search Invoice', 'Invoice' ),
		'not_found'             => __( 'Not found', 'Invoice' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Invoice' ),
		'featured_image'        => __( 'Featured Image', 'Invoice' ),
		'set_featured_image'    => __( 'Set featured image', 'Invoice' ),
		'remove_featured_image' => __( 'Remove featured image', 'Invoice' ),
		'use_featured_image'    => __( 'Use as featured image', 'Invoice' ),
		'insert_into_item'      => __( 'Insert into Invoice', 'Invoice' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'Invoice' ),
		'items_list'            => __( 'Invoices list', 'Invoice' ),
		'items_list_navigation' => __( 'Invoices list navigation', 'Invoice' ),
		'filter_items_list'     => __( 'Filter Invoices list', 'Invoice' ),
	);
	$args = array(
		'label'                 => __( 'Invoice', 'Invoice' ),
		'description'           => __( 'Invoice Description', 'Invoice' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Invoice', $args );

}
add_action( 'init', 'Invoice_post_type', 0 );