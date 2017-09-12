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

<div class="recent-posts">
	<?php 
	$postslist = get_posts('numberposts=3&order=DESC'); 
	foreach ($postslist as $post) : setup_postdata($post); ?>
	
	<div class="recent-post-thumbnail">
		<?php if ( has_post_thumbnail()) : ?>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a> 
			<a title="Post: <?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<?php endif; ?>
	</div>
	
<?php endforeach; ?>
</div>

</div><!-- #secondary -->