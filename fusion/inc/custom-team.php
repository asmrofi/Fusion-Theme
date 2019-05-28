<?php
// Register Custom Post Type Team Membar
function create_teammembar_cpt() {

	$labels = array(
		'name' => _x( 'Team Membar', 'Post Type General Name', 'fusion' ),
		'singular_name' => _x( 'Team Membar', 'Post Type Singular Name', 'fusion' ),
		'menu_name' => _x( 'Team Membar', 'Admin Menu text', 'fusion' ),
		'name_admin_bar' => _x( 'Team Membar', 'Add New on Toolbar', 'fusion' ),
		'archives' => __( 'Team Membar Archives', 'fusion' ),
		'attributes' => __( 'Team Membar Attributes', 'fusion' ),
		'parent_item_colon' => __( 'Parent Team Membar:', 'fusion' ),
		'all_items' => __( 'All Team Membar', 'fusion' ),
		'add_new_item' => __( 'Add New Team Membar', 'fusion' ),
		'add_new' => __( 'Add New', 'fusion' ),
		'new_item' => __( 'New Team Membar', 'fusion' ),
		'edit_item' => __( 'Edit Team Membar', 'fusion' ),
		'update_item' => __( 'Update Team Membar', 'fusion' ),
		'view_item' => __( 'View Team Membar', 'fusion' ),
		'view_items' => __( 'View Team Membar', 'fusion' ),
		'search_items' => __( 'Search Team Membar', 'fusion' ),
		'not_found' => __( 'Not found', 'fusion' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'fusion' ),
		'featured_image' => __( 'Featured Image', 'fusion' ),
		'set_featured_image' => __( 'Set featured image', 'fusion' ),
		'remove_featured_image' => __( 'Remove featured image', 'fusion' ),
		'use_featured_image' => __( 'Use as featured image', 'fusion' ),
		'insert_into_item' => __( 'Insert into Team Membar', 'fusion' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Team Membar', 'fusion' ),
		'items_list' => __( 'Team Membar list', 'fusion' ),
		'items_list_navigation' => __( 'Team Membar list navigation', 'fusion' ),
		'filter_items_list' => __( 'Filter Team Membar list', 'fusion' ),
	);
	$args = array(
		'label' => __( 'Team Membar', 'fusion' ),
		'description' => __( '', 'fusion' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-art',
		'supports' => array('title', 'editor'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => true,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'team_membar', $args );

}
add_action( 'init', 'create_teammembar_cpt', 0 );
