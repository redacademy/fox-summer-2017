<?php
/**
 * The main template file.
 * Template Name: Front-Page
 *
 * @package Daniel_Fox_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <section class="home-hero">
                <div class="home-hero-overlay">
                    <span><h1>Daniel Fox</h1></span>
                    <h1>Explorer | Storyteller | Photographer</h1>
                </div>
            </section>
            <section class="front-page-about">
                <div class="front-page-header-box">
                <h2>Hello</h2>
                </div>
                <p>My name is Daniel Fox. I’m an explorer, photographer, and speaker. My belief is that nature is a powerful 
                tool that is capable of restoring the human spirit. My overarching goal is to share my stories with others in 
                a way that inspires them to reconnect with the wilderness.
                </p>
                <span class="desktop-text">
                <p>Ever since I was a young boy, I found my inspiration and comfort in nature. It taught me about life, and 
                death, about change and evolution, about challenges and perseverance. Most importantly, it taught me about 
                perspective and balance, about being humble and spiritual.
                </p>
                <p>I started the Wild Image Project so that I could tell a story. A story about our relationship with nature, 
                about our journey in this universe, a story about being human.
                </p>
                </span>
                <div class="red-button">
                <h3><a href="#">Learn More</a></h3>
                </div>
            </section>

                <div class="front-page-photography-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Outdoor39.jpg" alt="Adventurous image" />
                </div>
                <section class="front-page-photography">
                <div class="front-page-header-box">
                <h2>Photographer</h2>
                </div>
                <p>My aim as a photographer is to capture compelling moments and preserve them in memory. I consider myself a 
                storyteller; the photographs I take are a visual support for the narrative that I share with others, and help 
                communicate my deep love for interacting with wildlife and the natural environment. My favorite photographs to 
                share are those ones with a good story behind them; the journey from real life to lens is not always 
                straightforward.
                </p>
                 <div class="red-button">
                <h3><a href="#">Let's Explore</a></h3>
                </div>
            </section>

                <div class="front-page-speaker-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Outdoor41.jpg" alt="Adventurous image" />
                </div>
                <section class="front-page-speaker">
                <div class="front-page-header-box">
                <h2>Speaker</h2>
                </div>
                <p>As a motivational speaker, I love coming together with others to share my personal joys and struggles, and 
                how nature has inspired me to become the most authentic version of myself. My aim is to share personal stories 
                and visually beautiful images that compel viewers to listen and reevaluate their own relationship with the 
                world.
                </p>
                 <div class="red-button">
                <h3><a href="#">Speaker Topics</a></h3>
                </div>
            </section>
            <section class="other-projects">
                <div class="front-page-header-box">
                <h2>Other Projects</h2>
                </div>
                <div class="wild-image-project">
                    <h3><a href="#">Wild Image Project</a></h3>
                </div>
                <div class="front-page-blog">
                    <h3><a href="#">Blog</a></h3>
                </div>
            </section>
            <section class="contact-form">
                <h2>Let's Connect</h2>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
