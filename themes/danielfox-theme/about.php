<?php
/**
 * Template Name: About
 *
 * @package Daniel_Fox_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		 <section class="about-page">
            
            <section class="about-section about-first-section">
				<div class="about-image">
					<img src="<?php echo CFS()->get( 'about_first_image' ); ?>"/>
				</div>
                <p> 
					<?php echo CFS()->get( 'about_first_text' ); ?>
                </p>
            </section>
            <section class="about-section about-second-section">
				<div class="about-image">
					<img src="<?php echo CFS()->get( 'about_second_image' ); ?>"/>
				</div>
                <p> 
					<?php echo CFS()->get( 'about_second_text' ); ?>					
                </p>
            </section>
            <section class="about-section about-third-section">
				<div class="about-image">
					<img src="<?php echo CFS()->get( 'about_third_image' ); ?>"/>	
				</div>
                <p>
					<?php echo CFS()->get( 'about_third_text' ); ?>					
                </p>
			<section class="about-section about-fourth-section">
				<div class="about-image">
					<img src="<?php echo CFS()->get( 'about_fourth_image' ); ?>"/>	
				</div>
                <p>
					<?php echo CFS()->get( 'about_fourth_text' ); ?>					
                </p>
            <section class="about-section about-fifth-section">
				<div class="about-image">
					<img src="<?php echo CFS()->get( 'about_fifth_image' ); ?>"/>	
				</div>
                <p>
					<?php echo CFS()->get( 'about_fifth_text' ); ?>					
                </p>
		</section>
		<section class="contact-form">
			<h2>Let's Connect</h2>
			<?php dynamic_sidebar( 'contactform-1' ); ?>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_footer(); ?>