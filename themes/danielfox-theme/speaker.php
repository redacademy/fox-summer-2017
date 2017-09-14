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

				<div class="speaker-header-image">

							   
				</div>
				</a>
				<section class="speaker-description">
					<div class="front-page-header-box speaker-header-box">
						<h2>What I Speak About</h2>
					</div>
					<p>Through my speaking engagements, I share what personal insights and realizations I’ve collected from my own experiences, and through my interactions with the natural world.
					<br></br>I strive for us to connect more with nature and with one another. 
					<br></br>In a world so fast-paced and filled with endless distractions, it’s easy to get caught up in a more materialistic way of thinking. I encourage myself and the peers I share with to be aware of what’s truly valuable in life, and to use our connection with nature as a constant reminder to exist in the moment. 
					</p>
				</section>
			</div>
			<div class="speaker-bottom-half">
				<div class="speaker-video-one speaker-vid">
						
						<a class="gallery-modal-link" data-toggle="modal" 
							   data-target="#modal-1" >

							   <div class="modal-container modal-container-1">
								   
									<!--<div class="video">	   
									</div>-->
							   </div>
							 

						</a>

						<div class="modal fade" id="modal-1">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-body">
									<div>Title for the video</div>

												<iframe width="600" height="450"
					src="https://www.youtube.com/embed/yhUCG-9s8kA">
					</iframe>
								<div>Video Description</div>
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>							
									
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

						<div class="modal fade" id="modal-2">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-body">

									<div>Title for the video</div>

										<iframe width="600" height="450"
										src="https://www.youtube.com/embed/ArhjLa4xbNk">
										</iframe>

									<div>Video Description</div>
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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

						<div class="modal fade" id="modal-3">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-body">
									<div>Title for the video</div>

										<iframe width="600" height="450"
										src="https://www.youtube.com/embed/Dhas9OEc1Lk">
										</iframe>
										<div>Video Description</div>
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->  

				</div>
			</div>
			<section class="contact-form">
                <h2>Let's Connect</h2>
				<?php dynamic_sidebar( 'contactform-1' ); ?>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
