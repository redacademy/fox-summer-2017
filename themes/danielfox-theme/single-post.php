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
				<a href="<?php echo esc_url( get_permalink() )?>#comments">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/commenticon.svg" class="comment-icon" alt="Comment icon" />
				</a>
				<div class="shareRoundIcons" 
					data-share-title="<?php echo get_the_title(); ?>" 
					data-share-link="<?php echo esc_url(get_the_permalink()); ?>">
				</div>
			</div>
					<?php if ( has_post_thumbnail() ) : ?>
					<div class="blog-image" style="background-image: url(<?php echo the_post_thumbnail_url('full'); ?>)">
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
			'prev_text' => __( 'Previous Post' ),
			'next_text' => __( 'Next Post' )
		)); ?>

		<div class="icon-container-mobile">
			<p>Share</p>   
			<div class="shareRoundIcons" 
                data-share-title="<?php echo get_the_title(); ?>" 
                data-share-link="<?php echo esc_url(get_the_permalink()); ?>">
            </div>
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
