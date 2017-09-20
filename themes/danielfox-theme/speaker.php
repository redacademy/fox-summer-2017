<?php
/**
 * The template for displaying all pages.
 * Template Name: Speaker
 *
 * @package Daniel_Fox_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="speaker-top-half">

				<div class="speaker-header-image" style="background:url(<?php echo CFS()->get( 'speaker_hero_image' ); ?>); ">		   
				</div>

				<section class="speaker-description">
					<div class="speaker-header-box">
						<h2><?php echo CFS()->get( 'speaker_header' ); ?></h2>
					</div>
					<p><?php echo CFS()->get( 'speaker_first_text' ); ?></p>
				</section>
			</div>
			<div class="speaker-bottom-half">
				<div class="speaker-video-one speaker-vid">
					
					<a class="gallery-modal-link" data-toggle="modal" data-target="#modal-1" >
							<div class="modal-container modal-container-1">
							</div>
					</a>

					<div class="modal fade speaker-modal-background" id="modal-1">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-body video-modal-body">
								<div class="speaker-video-title"><?php echo CFS()->get( 'first_iframe_title' ); ?></div>

									<?php echo CFS()->get( 'speaker_first_iframe' ); ?>

							<div class="speaker-video-description"><?php echo CFS()->get( 'first_iframe_description' ); ?></div>
									<div class="modal-close" data-dismiss="modal">
									</div>						
								
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div><!-- /.modal -->  
			
				
				
				</div>

				<div class="speaker-video-two speaker-vid">

						<a class="gallery-modal-link" data-toggle="modal" 
							data-target="#modal-2" >
							<div class="modal-container modal-container-2">
							</div>
						</a>

						<div class="modal fade speaker-modal-background" id="modal-2">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-body video-modal-body">

										<div class="speaker-video-title"><?php echo CFS()->get( 'second_iframe_title' ); ?></div>

										<?php echo CFS()->get( 'speaker_second_iframe' ); ?>

										<div class="speaker-video-description"><?php echo CFS()->get( 'second_iframe_description' ); ?></div>
										<div class="modal-close" data-dismiss="modal">
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->  
				</div>

				<div class="speaker-video-three speaker-vid">
					<a class="gallery-modal-link" data-toggle="modal" 
						data-target="#modal-3" >
						<div class="modal-container modal-container-3">   
						</div>
					</a>

						<div class="modal fade speaker-modal-background" id="modal-3">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-body video-modal-body">
										<div class="speaker-video-title"><?php echo CFS()->get( 'third_iframe_title' ); ?></div>

										<?php echo CFS()->get( 'speaker_third_iframe' ); ?>
	
										<div class="speaker-video-description"><?php echo CFS()->get( 'third_iframe_description' ); ?></div>
										<div class="modal-close" data-dismiss="modal">
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->  

				</div>
			</div>
			<section class="contact-form">
				<?php dynamic_sidebar( 'contactform-1' ); ?>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
