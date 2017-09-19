<?php
/**
 * The template for displaying all single posts.
 *
 * @package Daniel_Fox_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="project-title">
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			</div>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="featured-image project-featured-image" ><?php the_post_thumbnail( 'large' ); ?></div>
				
			<?php endif; ?>

			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
