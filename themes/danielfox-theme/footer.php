<?php
/**
 * The template for displaying the footer.
 *
 * @package Daniel_Fox_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-left">
					<a href="https://www.facebook.com/thewildimage">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/Facebook_White.svg" alt="Facebook logo" />
					</a>
					<a href="https://www.instagram.com/thewildimage/">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/Instagram_White.svg" alt="Instagram logo" />
					</a>
					<div id="secondary" class="widget-area" role="complementary">
						<?php dynamic_sidebar( 'subscribe-1' ); ?>
					</div><!-- #secondary -->
					
				</div>
				<div class="footer-right">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/seal.png" alt="Daniel Fox logo" />

				</div>

			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
