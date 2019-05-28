<?php
// Register Custom Post Type Testimonial
function create_testimonial_cpt() {

	$labels = array(
		'name' => _x( 'Testimonial', 'Post Type General Name', 'fusion' ),
		'singular_name' => _x( 'Testimonial', 'Post Type Singular Name', 'fusion' ),
		'menu_name' => _x( 'Testimonial', 'Admin Menu text', 'fusion' ),
		'name_admin_bar' => _x( 'Testimonial', 'Add New on Toolbar', 'fusion' ),
		'archives' => __( 'Testimonial Archives', 'fusion' ),
		'attributes' => __( 'Testimonial Attributes', 'fusion' ),
		'parent_item_colon' => __( 'Parent Testimonial:', 'fusion' ),
		'all_items' => __( 'All Testimonial', 'fusion' ),
		'add_new_item' => __( 'Add New Testimonial', 'fusion' ),
		'add_new' => __( 'Add New', 'fusion' ),
		'new_item' => __( 'New Testimonial', 'fusion' ),
		'edit_item' => __( 'Edit Testimonial', 'fusion' ),
		'update_item' => __( 'Update Testimonial', 'fusion' ),
		'view_item' => __( 'View Testimonial', 'fusion' ),
		'view_items' => __( 'View Testimonial', 'fusion' ),
		'search_items' => __( 'Search Testimonial', 'fusion' ),
		'not_found' => __( 'Not found', 'fusion' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'fusion' ),
		'featured_image' => __( 'Featured Image', 'fusion' ),
		'set_featured_image' => __( 'Set featured image', 'fusion' ),
		'remove_featured_image' => __( 'Remove featured image', 'fusion' ),
		'use_featured_image' => __( 'Use as featured image', 'fusion' ),
		'insert_into_item' => __( 'Insert into Testimonial', 'fusion' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'fusion' ),
		'items_list' => __( 'Testimonial list', 'fusion' ),
		'items_list_navigation' => __( 'Testimonial list navigation', 'fusion' ),
		'filter_items_list' => __( 'Filter Testimonial list', 'fusion' ),
	);
	$args = array(
		'label' => __( 'Testimonial', 'fusion' ),
		'description' => __( '', 'fusion' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-editor-paste-text',
		'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
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
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'create_testimonial_cpt', 0 );
