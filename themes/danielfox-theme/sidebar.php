<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package Daniel_Fox_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>

<div id="recent-posts">
	<?php 
	$postslist = get_posts('numberposts=3&order=DESC'); 
	foreach ($postslist as $post) : setup_postdata($post); ?>
	
	<div class="recent-post-thumbnail">
	
	<?php if ( has_post_thumbnail()) : ?>
	<a title="" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a> 
	<?php endif; ?></div>
	<a title="Post: <?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
<?php endforeach; ?></div>

</div><!-- #secondary -->
