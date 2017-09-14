<?php
/**
 * Template part for displaying single posts.
 *
 * @package Daniel_Fox_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="featured-image"><?php the_post_thumbnail( 'large' ); ?></div>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php danielfox_posted_on(); ?> 
			<!-- / <?php danielfox_comment_count(); ?> / <?php danielfox_posted_by(); ?> -->
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
			<?php danielfox_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
