<?php
/**
 * Daniel_Fox_Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Daniel_Fox_Theme
 */

if ( ! function_exists( 'danielfox_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function danielfox_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // danielfox_setup

add_action( 'after_setup_theme', 'danielfox_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function danielfox_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'danielfox_content_width', 640 );
}
add_action( 'after_setup_theme', 'danielfox_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function danielfox_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'danielfox_widgets_init' );

/**
 * Register our widgetized areas.
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Subscribe',
		'id'            => 'subscribe-1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function contactform_widgets_init() {

	register_sidebar( array(
		'name'          => 'Contactform',
		'id'            => 'contactform-1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'contactform_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function danielfox_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'danielfox_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function danielfox_scripts() {
	wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );

	wp_enqueue_script( 'daniel-fox-menu-toggle', get_template_directory_uri() . '/build/js/menu-toggle.min.js', array('jquery'), false, true );

	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	wp_enqueue_script( 'daniel-fox-bootstrap-modal', get_template_directory_uri() . '/lib/bootstrap.js', array('jquery'), false, true );
	wp_enqueue_style( 'daniel-fox-bootstrap-modal', get_template_directory_uri() . '/lib/bootstrap.css' );
	wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/e21b8dad43.js', array(), '4.7.0', false);
	
	wp_enqueue_script( 'jsSocials', 'https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js' );
	wp_enqueue_style( 'jsSocials-style', 'https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css' );
	wp_enqueue_style( 'jsSocials-flat-css', 'https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css');

function get_image_src( $object, $field_name, $request ) {
    $feat_img_array = wp_get_attachment_image_src($object['featured_media'], 'thumbnail', true);
    return $feat_img_array[0];
}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'danielfox_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

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