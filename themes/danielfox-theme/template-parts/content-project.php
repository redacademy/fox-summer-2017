<?php
/**
 * Template part for displaying posts.
 *
 * @package Daniel_Fox_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="project-title">
            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		</div>

        <?php if ( has_post_thumbnail() ) : ?>
			<div class="featured-image"><?php the_post_thumbnail( 'large' ); ?></div>
		<?php endif; ?>

        <div class="project-mobile-description">
            <?php echo CFS()->get( 'mobile_description' ); ?>
        </div><!-- .entry-content -->
</article><!-- #post-## -->
