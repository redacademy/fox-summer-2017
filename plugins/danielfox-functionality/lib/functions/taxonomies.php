<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...

function danielfox_tax_album_type() {
	$labels = array(
		'name'                       => 'Album Types',
		'singular_name'              => 'Album Type',
		'menu_name'                  => 'Album Types',
		'all_items'                  => 'All Album Types',
		'parent_item'                => 'Parent Album Type',
		'parent_item_colon'          => 'Parent Album Type:',
		'new_item_name'              => 'New Album Type Name',
		'add_new_item'               => 'Add New Album Type',
		'edit_item'                  => 'Edit Album Type',
		'update_item'                => 'Update Album Type',
		'view_item'                  => 'View Album Type',
		'separate_items_with_commas' => 'Separate items with commas',
		'add_or_remove_items'        => 'Add or remove items',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Album Types',
		'search_items'               => 'Search Album Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Album Types',
		'items_list'                 => 'Album Types list',
		'items_list_navigation'      => 'Album Types list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'album-type', array( 'photograph' ), $args );
}
add_action( 'init', 'danielfox_tax_album_type', 0 );