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
            
		 <div class="about-header">
		 	<h1> About Me <h1>
		 </div>

		 <div class="about-text-desktop">
			 <div class="about-text-desktop-section about-text-desktop-first-second">
                <p> 
					<?php echo CFS()->get( 'about_first_text' ); ?>
                </p>
				<p> 
					<?php echo CFS()->get( 'about_second_text' ); ?>					
                </p>
			</div>	 
			<div class="about-text-desktop-section about-text-desktop-third">
				<p>
					<?php echo CFS()->get( 'about_third_text' ); ?>					
                </p>
			</div>	
			 <div class="about-text-desktop-section about-text-desktop-fourth-fifth">
                <p>
					<?php echo CFS()->get( 'about_fourth_text' ); ?>					
                </p>
                <p>
					<?php echo CFS()->get( 'about_fifth_text' ); ?>					
                </p>
			</div>	
		</div>


			<div class="desktop-photo-columns">		
				<div class="desktop-photo-column-sections desktop-photo-column-1">
           			 <section class="about-section about-first-section">
						<div class="about-image" style="background-image:url(<?php echo CFS()->get( 'about_first_image' ); ?>);">
						</div>
						<p> 
							<?php echo CFS()->get( 'about_first_text' ); ?>
						</p>
         		   </section>
				
            <section class="about-section about-second-section">
				<div class="about-image" style="background-image:url(<?php echo CFS()->get( 'about_second_image' ); ?>);">
				</div>
                <p> 
					<?php echo CFS()->get( 'about_second_text' ); ?>					
                </p>
            </section>
			</div>



			<div class="desktop-photo-column-sections desktop-photo-column-2">
				<section class="about-section about-third-section">
					<div class="about-image about-image-large" style="background-image:url(<?php echo CFS()->get( 'about_fifth_image' ); ?>);">
					</div>
						
					<p>
						<?php echo CFS()->get( 'about_third_text' ); ?>					
					</p>
				</section>
			</div>



			<div class="desktop-photo-column-sections desktop-photo-column-3">			
				<section class="about-section about-fourth-section">
					<div class="about-image" style="background-image:url(<?php echo CFS()->get( 'about_fourth_image' ); ?>);">
					</div>
					<p>
						<?php echo CFS()->get( 'about_fourth_text' ); ?>					
					</p>
				</section>

				<section class="about-section about-fifth-section">
					<div class="about-image" style="background-image:url(<?php echo CFS()->get( 'about_third_image' ); ?>);">
					</div>

					<p>
						<?php echo CFS()->get( 'about_fifth_text' ); ?>					
					</p>
					
				</section>
			</div>
		</div> <!-- Closing desktop-photo-columns-->


		<section class="contact-form">
			<?php dynamic_sidebar( 'contactform-1' ); ?>
		</section>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>