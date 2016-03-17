<?php
// Register Custom Post Type
function product_post_type() {

	$labels = array(
		'name'                  => _x( 'Products', 'Post Type General Name', 'Product' ),
		'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'Product' ),
		'menu_name'             => __( 'Products', 'Product' ),
		'name_admin_bar'        => __( 'Products', 'Product' ),
		'archives'              => __( 'Products Archives', 'Product' ),
		'parent_item_colon'     => __( 'Parent Item:', 'Product' ),
		'all_items'             => __( 'All Items', 'Product' ),
		'add_new_item'          => __( 'Add New Product', 'Product' ),
		'add_new'               => __( 'Add New', 'Product' ),
		'new_item'              => __( 'NewProduct', 'Product' ),
		'edit_item'             => __( 'Edit Product', 'Product' ),
		'update_item'           => __( 'Update Product', 'Product' ),
		'view_item'             => __( 'View Product', 'Product' ),
		'search_items'          => __( 'Search Product', 'Product' ),
		'not_found'             => __( 'Not found', 'Product' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Product' ),
		'featured_image'        => __( 'Featured Image', 'Product' ),
		'set_featured_image'    => __( 'Set featured image', 'Product' ),
		'remove_featured_image' => __( 'Remove featured image', 'Product' ),
		'use_featured_image'    => __( 'Use as featured image', 'Product' ),
		'insert_into_item'      => __( 'Insert into Product', 'Product' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Product', 'Product' ),
		'items_list'            => __( 'Products list', 'Product' ),
		'items_list_navigation' => __( 'Products list navigation', 'Product' ),
		'filter_items_list'     => __( 'Filter Products list', 'Product' ),
	);
	$args = array(
		'label'                 => __( 'Product', 'Product' ),
		'description'           => __( 'Post Type Description', 'Product' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'post-formats','page-attributes' ),
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
	register_post_type( 'Products', $args );

}
add_action( 'init', 'product_post_type', 0 );