<?php
/**
 * The template for displaying the different album groups of photos
 *
 * @package Daniel_Fox_Theme
 */?>

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_description( '<h1 class="taxonomy-description">', '</h1>' );		
?>
			</header><!-- .page-header -->
			
			<?php /* Start the Loop */ ?>
<section class="photograph-grid">
<?php while ( have_posts() ) : the_post(); ?>
		<div class="photograph-grid-item" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<div class="thumbnail-wrapper">
					<?php if ( has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail( 'large' ); ?>
						</a>
					<?php endif; ?>
				</div>
			</header><!-- .entry-header -->
		</div>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>

</section>
	<?php else : ?>
		<?php get_template_part( 'template-parts/content', 'none' ); ?>
	<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>


