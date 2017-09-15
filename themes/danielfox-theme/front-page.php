<?php
/**
 * The main template file.
 *
 * @package Daniel_Fox_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <section class="home-hero">
                <div class="home-hero-overlay">
                    <span><h1><?php echo CFS()->get( 'front_page_mobile_h1' ); ?></h1></span>
                    <h1><?php echo CFS()->get( 'front_page_mobiledesktop_h1' ); ?></h1>
                </div>
            </section>
            <section class="front-page-about">
                <div class="front-page-header-box">
                    <h2><?php echo CFS()->get( 'front_page_about_h2' ); ?></h2>
                </div>

                <p><?php echo CFS()->get( 'front_page_about_text' ); ?></p>

                <span class="desktop-text">
                    <p><?php echo CFS()->get( 'front_page_about_desktop_text_1' ); ?></p>
                    <p><?php echo CFS()->get( 'front_page_about_desktop_text_2' ); ?></p>
                </span>
                <div class="red-button">
                    <h3><a href="about"><?php echo CFS()->get( 'front_page_about_button' ); ?></a></h3>
                </div>
            </section>

                <div class="front-page-photography-image">
                   
                </div>
            <section class="front-page-photography">
                <div class="front-page-header-box">
                    <h2><?php echo CFS()->get( 'front_page_photography_h2' ); ?></h2>
                </div>

                <p><?php echo CFS()->get( 'front_page_photography_text' ); ?></p>

                <div class="red-button">
                    <h3><a href="album-type/wildlife/"><?php echo CFS()->get( 'front_page_photography_button' ); ?></a></h3>
                </div>
            </section>

                <div class="front-page-speaker-image">
                </div>
            <section class="front-page-speaker">
                <div class="front-page-header-box">
                    <h2><?php echo CFS()->get( 'front_page_speaker_h2' ); ?></h2>
                </div>

                <p><?php echo CFS()->get( 'front_page_speaker_text' ); ?></p>

                <div class="red-button">
                    <h3><a href="speaker"><?php echo CFS()->get( 'front_page_speaker_button' ); ?></a></h3>
                </div>
            </section>

            <div class="featured-in">

                <h2><?php echo CFS()->get( 'front_page_featured_in_h2' ); ?></h2>

                <div class="featured-images">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/sidetracked.svg" alt="Sidetracked brand logo" /></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/the-culture-trip.svg" alt="The culture trip brand logo" /></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/maptia.svg" alt="Maptia brand logo" /></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/bayan-collective.svg" alt="Bayan collective brand logo" /></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/canoe-and-kayak.svg" alt="Canoe and kayak brand logo" /></a>
                </div>
            </div>

            <section class="other-projects">
                <div class="front-page-header-box">
                    <h2><?php echo CFS()->get( 'front_page_other_projects_h2' ); ?></h2>
                </div>

                <div class="project-container">
                    <div class="wild-image-project">
                        <p><?php echo CFS()->get( 'wild_image_project_text' ); ?></p>
                        <h3><a href="projects"><?php echo CFS()->get( 'front_page_projects_button' ); ?></a></h3>
                    </div>
                    <div class="front-page-blog">
                        <p><?php echo CFS()->get( 'front_page_blog_text' ); ?></p>
                        <h3><a href="blog"><?php echo CFS()->get( 'front_page_blog_button' ); ?></a></h3>
                    </div>
                </div>
            </section>
            
            <section class="contact-form">
                <?php dynamic_sidebar( 'contactform-1' ); ?>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
