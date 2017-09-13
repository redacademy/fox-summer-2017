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

            <div class="featured-in">
                <h2>Featured In:</h2>
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
                <h2>Other Projects</h2>
                </div>
                <div class="project-container">
                    <div class="wild-image-project">
                        <p>Under “The WILD Image Project,” I actively participate in a
                        number of initiatives  and use a variety of mediums to 
                        express my vision for reconnecting with nature.</p>
                        <h3><a href="#">View Projects</a></h3>
                    </div>
                    <div class="front-page-blog">
                        <p>My blog is where I document most of my solo expeditions, 
                            and where I can share my stories of different communities 
                            I’ve become a part of during the course of my work.</p>
                        <h3><a href="#">View Stories</a></h3>
                    </div>
                </div>
            </section>
            <section class="contact-form">
                <h2>Let's Connect</h2>

            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
