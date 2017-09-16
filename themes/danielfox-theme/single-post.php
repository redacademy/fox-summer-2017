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
				<div class="blog-photo">
					<div class="icon-container-desktop">    
						<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/commenticon.svg" class="comment-icon" alt="Comment icon" />
						<img src="<?php echo get_template_directory_uri(); ?>/assets/Facebook_White.svg" class="facebook-icon" alt="Facebook logo" />
						<img src="<?php echo get_template_directory_uri(); ?>/assets/Instagram_White.svg" class="instagram-icon" alt="Instagram logo" />
					</div>
					<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
				</div>
					<?php endif; ?>
				</header><!-- .entry-header -->

				<div class="text-content">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

						<span class="post-date-2"><?php danielfox_posted_on(); ?></span>
						<div class="entry-meta">
								<?php danielfox_entry_footer(); ?>
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

		<?php the_post_navigation( array(
			'prev_text' => __( '<i class="fa fa-chevron-left" aria-hidden="true"></i>Previous Post' ),
			'next_text' => __( 'Next Post' )
		)); ?>

		<div class="icon-container-mobile">
			<p>Share</p>   
			<i class="fa fa-facebook" aria-hidden="true" alt="Facebook logo"></i>
			<i class="fa fa-twitter" aria-hidden="true" alt="Twitter logo"></i>
        </div>

		<div class="comments-section" id="comments">
		<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
		?>
		</div>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
