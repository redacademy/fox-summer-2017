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
		<script src="https://use.fontawesome.com/e21b8dad43.js"></script>

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<!--<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div>-->
				
				<nav class="header-nav-bar"> <!-- Mobile nav header -->
					<div class="burger-nav">
					
					<nav class="nav-side">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						<a href="#" class="nav-toggle">
							</a>
						</nav>

					</div>
					<div class="header-page-name"> 
						<?php if (is_page_template( 'front-page.php' )) {
						echo '<p>Welcome</p>';
						}  elseif (is_page_template( 'taxonomy-album-type.php' )) {
						echo '<p>Blog</p>';
						} ?>

						<p><?php wp_title(''); ?></p>
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
