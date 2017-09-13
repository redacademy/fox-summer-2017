<?php
/**
 * The template for displaying archive pages.
 *
 * @package Daniel_Fox_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<h1><?php wp_title(''); ?></h1>

			<div class="project-about">
				<p>The Wild Image Project is an ongoing narrative that focuses on highlighting the true essence of nature and 
					its teachings. Through my photography, writing and videos, I try to provoke a dialogue that invites the 
					viewer to reevaluate its relationship with the environment. Nature is raw, rough, pretty, beautiful, 
					inspiring, but above all, a humble experience.
				</p>
				<p>I started the Wild Image Project so that I could tell a story. A story about our relationship with nature, 
					about our journey in this universe, a story about being human. Humans love to see the world within a limited 
					frame, within a world that they can explain, control and manipulate. We forget that who we are today is the 
					result of a process that has lasted several millions of years. We are also, just a chapter in the story of 
					evolution. It is fair to say that if we had the ability to look into the future, most likely, we would 
					discover that our appearance has evolved, changed, just like we have changed physically and mentally since 
					the time we came down from the trees.
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
