<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Daniel_Fox_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function danielfox_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'danielfox_body_classes' );

add_image_size( 'custom-size', 900, 300, array( 'left', 'top' ) );

function set_posts_per_page_for_photograph_cpt( $query ) {
  if ( !is_admin() && $query->is_main_query() && is_post_type_archive( 'photograph' ) || $query->is_tax('album-type') ) {
    $query->set( 'posts_per_page', '9' );
  }
}
add_action( 'pre_get_posts', 'set_posts_per_page_for_photograph_cpt' );

function set_posts_per_page_for_project_cpt( $query ) {
  if ( !is_admin() && $query->is_main_query() && is_post_type_archive( 'project' ) ) {
    $query->set( 'posts_per_page', '3' );
  }
}
add_action( 'pre_get_posts', 'set_posts_per_page_for_project_cpt' );
