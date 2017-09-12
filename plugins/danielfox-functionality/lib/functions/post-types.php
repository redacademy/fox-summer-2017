<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

function danielfox_cpt_photograph() {

	$labels = array(
		'name'                  => 'Photographs',
		'singular_name'         => 'Photograph',
		'menu_name'             => 'Photographs',
		'name_admin_bar'        => 'Photograph',
		'archives'              => 'Photograph Archives',
		'attributes'            => 'Photograph Attributes',
		'parent_item_colon'     => 'Parent Photograph:',
		'all_items'             => 'All Photographs',
		'add_new_item'          => 'Add New Photograph',
		'add_new'               => 'Add New',
		'new_item'              => 'New Photograph',
		'edit_item'             => 'Edit Photograph',
		'update_item'           => 'Update Photograph',
		'view_item'             => 'View Photograph',
		'view_items'            => 'View Photographs',
		'search_items'          => 'Search Photograph',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Adventure',
		'uploaded_to_this_item' => 'Uploaded to this Photograph',
		'items_list'            => 'Photographs list',
		'items_list_navigation' => 'Photographs list navigation',
		'filter_items_list'     => 'Filter Photographs list',
	);
	$args = array(
		'label'                 => 'Photograph',
		'description'           => 'Custom Photograph Post Type',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'photographs',		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'query_var'				=> true,
		'rewrite'				=> true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
		'rest_base'				=> 'gallery',
		'rest_controller_class' => 'WP_REST_Posts_controller'
	);
	register_post_type( 'photograph', $args );

    //Clear Permalinks
    flush_rewrite_rules();
}
add_action( 'init', 'danielfox_cpt_photograph', 0 );

function danielfox_cpt_project() {

	$labels = array(
		'name'                  => 'Projects',
		'singular_name'         => 'Project',
		'menu_name'             => 'Projects',
		'name_admin_bar'        => 'Project',
		'archives'              => 'Project Archives',
		'attributes'            => 'Project Attributes',
		'parent_item_colon'     => 'Parent Project:',
		'all_items'             => 'All Projects',
		'add_new_item'          => 'Add New Project',
		'add_new'               => 'Add New',
		'new_item'              => 'New Project',
		'edit_item'             => 'Edit Project',
		'update_item'           => 'Update Project',
		'view_item'             => 'View Project',
		'view_items'            => 'View Projects',
		'search_items'          => 'Search Project',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Adventure',
		'uploaded_to_this_item' => 'Uploaded to this Project',
		'items_list'            => 'Projects list',
		'items_list_navigation' => 'Projects list navigation',
		'filter_items_list'     => 'Filter Projects list',
	);
	$args = array(
		'label'                 => 'Project',
		'description'           => 'Custom Project Post Type',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-links',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'projects',		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'project', $args );

    //Clear Permalinks
    flush_rewrite_rules();
}
add_action( 'init', 'danielfox_cpt_project', 0 );