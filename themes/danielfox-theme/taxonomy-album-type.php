<?php
/**
 * The template for displaying the different album groups of photos
 *
 * @package Daniel_Fox_Theme
 */?>

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : 
			$postIndex = 1;
		?>

		<header class="page-header">
			<?php the_archive_description( '<h1 class="taxonomy-description">', '</h1>' ); ?>
		</header><!-- .page-header -->
		
		<?php /* Start the Loop */ ?>
		
			<section class="photograph-grid">

		<?php 
		$postCount = 0;
		while ( have_posts() ) : the_post(); 
		$postIndexNext = $postIndex+1;
		$postIndexPrev = $postIndex-1;
		$postCount++;
		
		?>

			<div class="photograph-grid-item" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
				<header class="entry-header">
					<div class="thumbnail-wrapper">
					
						<?php if ( has_post_thumbnail() ) : ?>
							<a class="gallery-modal-link" data-toggle="modal" 
							   data-target="#modal-<?php echo $postIndex; ?>" id="<?php echo get_the_ID(); ?>">
							<?php the_post_thumbnail( 'large' ); ?>
							</a>
						<?php endif; ?>


						<div class="modal fade modal-overlay-window" id="modal-<?php echo $postIndex; ?>">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-body modal-background-image" id="modal-background-image" style="background:url(<?php 
										if ( has_post_thumbnail() ) :
										the_post_thumbnail_url( 'full' ); 
										endif ?>);">

										<div class="desktop-modal-details" >
											<div class="desktop-modal-details-left">
												<div>
													<?php the_title(); ?> 
												</div>
												<div>
											    	<?php echo CFS()->get('location'); ?>
												</div>
												<div>
													<?php echo get_the_date(); ?>
												</div>

											</div>
											<div class="desktop-modal-details-right">
												<div class="desktop-modal-details-plus-sign" href="#modal-2-<?php echo $postIndex; ?>" data-toggle="modal">
												</div>
											</div>
										</div>
										
										<div class="modal-close" data-dismiss="modal">
										</div>

										<div class="modal-banners">
											<div class="modal-left-banner">
												<div class="modal-prev" href="#modal-<?php echo $postIndexPrev; ?>" data-toggle="modal" data-dismiss="modal">
											
												</div>
											</div>

											<div class="modal-right-banner">
												<div class="modal-next" href="#modal-<?php echo $postIndexNext; ?>" data-toggle="modal" data-dismiss="modal">
											
												</div>
											</div>
										</div> <!-- Close Modal-banners -->

										<div id="mobile-modal-details" class="mobile-modal-details mobile-modal-closed-window">
											<div class="mobile-modal-description-window-top">
												<div class="mobile-modal-description-toggle">
												</div>
												<div class="mobile-modal-description-picture-status">
														<?php echo CFS()->get( 'availability' ); ?>
												</div>	
											</div>
											<div class="mobile-modal-description-title-date">
												<div class="mobile-modal-description-title">
														<?php the_title(); ?> 
												</div>
												<div class="mobile-modal-description-date">
													<?php echo get_the_date(); ?> 
												</div>
											</div>
											<div class="mobile-modal-description-excerpt">
												<?php echo CFS()->get( 'preview_description' ); ?>
											</div>
										</div> <!-- Close mobile-modal-description-window -->



									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->  

				<!-- #modal 2 -->
				<div class="modal modal-overlay-window modal-overlay-window-2" id="modal-2-<?php echo $postIndex; ?>">
				<div class="modal-dialog modal-dialog-2">
					<div class="modal-content modal-content-2" id="modal-background-image" style="background:url(<?php 
										if ( has_post_thumbnail() ) :
										the_post_thumbnail_url( 'full' ); 
										endif ?>);">

					<div class="modal-body modal-body-2" >
						<div class="modal-close modal-2-close" data-dismiss="modal">
						</div>
						<div class="modal-2-top-section">
							<div class="modal-2-picture-details">
								<h2><?php the_title(); ?></h2>
							</div>
							<div>
								<?php echo CFS()->get('location'); ?>
							</div>							
							<div>
								<?php echo get_the_date(); ?> 
							</div>
							<div class="mobile-modal-description-picture-status">
									<?php echo CFS()->get( 'availability' ); ?>
							</div>	
						</div>	
							<div class="modal-2-picture-description">
								<?php the_content(); ?> 
							</div>

							
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->  

			</div>
		</header><!-- .entry-header -->
	</div>

<?php 
// end while has posts
$postIndex++;
endwhile;
?>

<?php the_posts_navigation(); ?>

</section>
	<?php else : ?>
		<?php get_template_part( 'template-parts/content', 'none' ); ?>
	<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
