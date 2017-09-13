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
				<header class="entry-header">
					<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>
				</header><!-- .entry-header -->

				<div class="text-content">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

						<span class="post-date-2"><?php red_starter_posted_on(); ?></span>
						<div class="entry-meta">
								<?php red_starter_entry_footer(); ?>
						</div><!-- .entry-meta -->

					<div class="entry-content">
							<?php the_content(); ?>
							<?php
									wp_link_pages( array(
											'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
											'after'  => '</div>',
									) );
							?>
					</div><!-- .entry-content -->
				</div>

		</article><!-- #post-## -->

		<?php the_post_navigation(); ?>

		<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
		?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
