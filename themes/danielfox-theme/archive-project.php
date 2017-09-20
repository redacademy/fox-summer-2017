<?php
/**
 * Template Name: Project
 *
 * @package Daniel_Fox_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<h1><?php wp_title(''); ?></h1>

			<div class="project-about">
				<p>
				<?php 

				// Important that this post id matches the page using the 'Project Template'
				echo CFS()->get( 'project_text', 343 );

				?>
				</p>
			</div>

			<?php /* Start the Loop */ ?>
			<div class="project-container">
				<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content', 'project' ); ?>

				<?php endwhile; ?>
			</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

		<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
