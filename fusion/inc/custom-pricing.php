<?php
// Register Custom Post Type Pricing
function create_pricing_cpt() {

	$labels = array(
		'name' => _x( 'Pricing', 'Post Type General Name', 'fusion' ),
		'singular_name' => _x( 'Pricing', 'Post Type Singular Name', 'fusion' ),
		'menu_name' => _x( 'Pricing', 'Admin Menu text', 'fusion' ),
		'name_admin_bar' => _x( 'Pricing', 'Add New on Toolbar', 'fusion' ),
		'archives' => __( 'Pricing Archives', 'fusion' ),
		'attributes' => __( 'Pricing Attributes', 'fusion' ),
		'parent_item_colon' => __( 'Parent Pricing:', 'fusion' ),
		'all_items' => __( 'All Pricing', 'fusion' ),
		'add_new_item' => __( 'Add New Pricing', 'fusion' ),
		'add_new' => __( 'Add New', 'fusion' ),
		'new_item' => __( 'New Pricing', 'fusion' ),
		'edit_item' => __( 'Edit Pricing', 'fusion' ),
		'update_item' => __( 'Update Pricing', 'fusion' ),
		'view_item' => __( 'View Pricing', 'fusion' ),
		'view_items' => __( 'View Pricing', 'fusion' ),
		'search_items' => __( 'Search Pricing', 'fusion' ),
		'not_found' => __( 'Not found', 'fusion' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'fusion' ),
		'featured_image' => __( 'Featured Image', 'fusion' ),
		'set_featured_image' => __( 'Set featured image', 'fusion' ),
		'remove_featured_image' => __( 'Remove featured image', 'fusion' ),
		'use_featured_image' => __( 'Use as featured image', 'fusion' ),
		'insert_into_item' => __( 'Insert into Pricing', 'fusion' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Pricing', 'fusion' ),
		'items_list' => __( 'Pricing list', 'fusion' ),
		'items_list_navigation' => __( 'Pricing list navigation', 'fusion' ),
		'filter_items_list' => __( 'Filter Pricing list', 'fusion' ),
	);
	$args = array(
		'label' => __( 'Pricing', 'fusion' ),
		'description' => __( '', 'fusion' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-chart-area',
		'supports' => array('title', 'editor', 'revisions'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'page',
	);
	register_post_type( 'pricing', $args );

}
add_action( 'init', 'create_pricing_cpt', 0 );
