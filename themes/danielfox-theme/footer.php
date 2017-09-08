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
					<img src="<?php echo get_template_directory_uri(); ?>/assets/Facebook_White.svg" alt="Facebook logo" />
					<img src="<?php echo get_template_directory_uri(); ?>/assets/Instagram_White.svg" alt="Instagram logo" />
					<!--<div class="subscribe-container">
						<form method="POST" action=" ">
							<p><a href=" " class="search-toggle" aria-hidden="true">Subscribe</a></p>
							<input class="subscribe-button" type="submit" value="Subscribe" name="Subscribe">
							<input class="subscribe-email-input" type="text" name="Email" placeholder="Email" size="20">
						</form>
					</div>-->
					<div id="secondary" class="widget-area" role="complementary">
						<?php dynamic_sidebar( 'subscribe-1' ); ?>
					</div><!-- #secondary -->
					


				</div>
				<div class="footer-right">



				</div>

			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
