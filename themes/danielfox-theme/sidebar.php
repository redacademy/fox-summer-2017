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

<div class="recent-post-container">
	<h3 class="container-title">Recent Posts</h3>
	<?php 
	$postslist = get_posts('numberposts=3&order=DESC'); 
	foreach ($postslist as $post) : setup_postdata($post); ?>
	
		<div class="recent-post-thumbnail">
			<?php if ( has_post_thumbnail()) : ?>			
				<a href="<?php the_permalink(); ?>">
				<h3 class="recent-post-title"><?php the_title(); ?></h3>

					<div class="blog-thumbnail">
						<div class="blog-thumbnail-picture" 
						<?php
						$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
						echo ' style="background-image: url('. $url.')"';
						?>
						>
						</div>
					</div>
				</a> 
				
				<?php endif; ?>
		</div>
		
	<?php endforeach; ?>
</div>

</div><!-- #secondary -->