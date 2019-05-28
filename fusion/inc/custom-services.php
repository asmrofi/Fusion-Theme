<?php
// Register Custom Post Type Service
function create_service_cpt() {

	$labels = array(
		'name' => _x( 'Service', 'Post Type General Name', 'fusion' ),
		'singular_name' => _x( 'Service', 'Post Type Singular Name', 'fusion' ),
		'menu_name' => _x( 'Service', 'Admin Menu text', 'fusion' ),
		'name_admin_bar' => _x( 'Service', 'Add New on Toolbar', 'fusion' ),
		'archives' => __( 'Service Archives', 'fusion' ),
		'attributes' => __( 'Service Attributes', 'fusion' ),
		'parent_item_colon' => __( 'Parent Service:', 'fusion' ),
		'all_items' => __( 'All Service', 'fusion' ),
		'add_new_item' => __( 'Add New Service', 'fusion' ),
		'add_new' => __( 'Add New', 'fusion' ),
		'new_item' => __( 'New Service', 'fusion' ),
		'edit_item' => __( 'Edit Service', 'fusion' ),
		'update_item' => __( 'Update Service', 'fusion' ),
		'view_item' => __( 'View Service', 'fusion' ),
		'view_items' => __( 'View Service', 'fusion' ),
		'search_items' => __( 'Search Service', 'fusion' ),
		'not_found' => __( 'Not found', 'fusion' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'fusion' ),
		'featured_image' => __( 'Featured Image', 'fusion' ),
		'set_featured_image' => __( 'Set featured image', 'fusion' ),
		'remove_featured_image' => __( 'Remove featured image', 'fusion' ),
		'use_featured_image' => __( 'Use as featured image', 'fusion' ),
		'insert_into_item' => __( 'Insert into Service', 'fusion' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Service', 'fusion' ),
		'items_list' => __( 'Service list', 'fusion' ),
		'items_list_navigation' => __( 'Service list navigation', 'fusion' ),
		'filter_items_list' => __( 'Filter Service list', 'fusion' ),
	);
	$args = array(
		'label' => __( 'Service', 'fusion' ),
		'description' => __( '', 'fusion' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-list-view',
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
		'capability_type' => 'post',
	);
	register_post_type( 'service', $args );

}
add_action( 'init', 'create_service_cpt', 0 );
