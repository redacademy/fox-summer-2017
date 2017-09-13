<?php
/**
 * The template for displaying the different album groups of photos
 *
 * @package Daniel_Fox_Theme
 */?>

<script src="//code.jquery.com/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  

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

						<a class="gallery-modal-link" data-toggle="modal" data-target="#modal-1" id="<?php echo get_the_ID(); ?>">
						<?php the_post_thumbnail( 'large' ); ?>
						</a>


<div class="modal fade" id="modal-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <!--<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      </div>-->
      <div class="modal-body">
		  	
              <?php the_post_thumbnail( 'full' ); ?>
			  <button class="inside-pic" href="#modal-2" data-toggle="modal"><?php the_title(); ?> 
			  </button>
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->  
  
  
  <!-- #modal 2 -->
<div class="modal fade" id="modal-2">
  <div class="modal-dialog modal-dialog-2">
    <div class="modal-content modal-content-2">
      <!--<div class="modal-header modal-header-2">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      </div>-->
      <div class="modal-body modal-body-2">
 
		<div class="modal-2-top-section">
			<div class="modal-2-picture-details">
				<h2><?php the_title(); ?></h2> <br>
				Picture details here
			</div>
			<div class="modal-2-exit-button">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>	
			</div>
		</div>	
			<div class="modal-2-picture-description">
				<?php the_content(); ?> 
			</div>

               
      </div>
      <!--<div class="modal-footer modal-footer-2">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->  


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
