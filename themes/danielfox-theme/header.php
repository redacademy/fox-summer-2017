<?php
/**
 * The header for our theme.
 *
 * @package Daniel_Fox_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				
				<nav class="header-nav-bar"> <!-- Mobile nav header -->
					<div class="burger-nav">
					
						<nav class="nav-side">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<h2 class="mobile-nav-menu-home">Home</h2>
							</a>

							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
							<?php get_search_form(); ?>
							<a href="#" class="nav-toggle">
							</a>
						</nav>

					</div>

					<div class="header-page-name">  <!-- -->
						<?php 
						if ( is_front_page() ) {
							echo '<p>Welcome</p>';
						}  
						elseif (is_tax( 'album-type' )) {
							echo '<p>Photography</p>';
						}
						elseif( is_post_type_archive('project') ) {
							echo 'Projects';
						}
						elseif( is_home('blog')) {
							echo 'Blog';
						}
						else  
						{ 
							echo '<p>' . get_the_title() . '</p>';
						} 
						?>
						
					</div>
					<div class="header-logo-mobile">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/seal.png" alt="David Fox seal logo" />
						</a>
					</div>
				</nav>

				<nav id="site-navigation" class="main-navigation" role="navigation"> <!-- Desktop nav header -->
					<div class="header-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img class ="nav-logo" src="<?php echo get_template_directory_uri(); ?>/assets/seal.png" alt="David Fox seal logo" />
						</a>
					</div>
					
					<div class="nav-menu-options">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</div>

				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
