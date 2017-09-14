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
					<img class="home-page-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutme-banner.jpg" alt="Adventurous image" />
				</div>
                <p> My name is Daniel Fox. I’m an explorer, photographer, and speaker. My belief is that nature is a powerful tool that is capable of restoring the human spirit. My overarching goal is to share my stories with others in a way that inspires them to reconnect with the wilderness. 
                </p>
            </section>
            <section class="about-section about-second-section">
				<div class="about-image">
					<img class="home-page-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/Outdoor01.jpg" alt="Adventurous image" />
				</div>
                <p> Ever since I was a young boy, I found my inspiration and comfort in nature. It taught me about life, and death, about change and evolution, about challenges and perseverance. Most importantly, it taught me about perspective and balance, about being humble and spiritual. My life was for a very long time filled with a feeling of loneliness. For decades, I didn’t know where I belonged. My parents moved a lot.  
                </p>
            </section>
            <section class="about-section about-third-section">
				<div class="about-image">
					<img class="home-page-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/Outdoor12.jpg" alt="Adventurous image" />
				</div>
                <p>By the age of 12, I had already moved 10 times. With every move, I had to leave behind whatever world I had been able to create with the limited time that I had been given, and focus on recreating a sense of belonging to wherever I was then finding myself. Houses changed; friendships vanished as quickly as they were born; cities became backdrops for momentary plays. While the world around me was in constant motion, sweeping away any hint of foundation that I was trying to build for myself, one place remained constant and offered me salvation, peace, and a purpose ⎯ nature. Everywhere we moved, there was always a local park, a forest where I could roam and get lost; trees I could climb, creeks I could explore, dirt I could dig in. 
                </p>
			<section class="about-section about-fourth-section">
				<div class="about-image">
					<img class="home-page-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/Outdoor22.jpg" alt="Adventurous image" />
				</div>
                <p>That loneliness that dominated my world was nowhere to be found the minute I stepped into the wilderness. There ⎯ in this world of silence ⎯ I found solace. I was alone but I was connected; I felt part of something that was bigger than me. 
                </p>
            <section class="about-section about-fifth-section">
				<div class="about-image">
					<img class="home-page-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/Outdoor42.jpg" alt="Adventurous image" />
				</div>
                <p>Within that silence, I found comfort; within those trees, I found a tribe that listened; within nature I found the family I was looking for, the structure of values and insights that would teach me about life, about what it is to be human, and what is like to live on this planet.  That deep connectedness has never left me since, I carry it with me everywhere I go, where ever I find myself, whether I am alone or not.
                </p>
		</section>
		<section class="contact-form">
			<h2>Let's Connect</h2>
			<?php dynamic_sidebar( 'contactform-1' ); ?>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_footer(); ?>