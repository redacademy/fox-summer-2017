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
