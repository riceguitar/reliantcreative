<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package reliantcreative
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>
				<div class="col-md-3">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div>
				<div class="col-md-3 col-md-offset-3">
					<div class="site-info text-right">
						<h3 class="credits-title">Have a nice day!</h3>

						
						<p>
							Copyright 2016<br>
							Reliant Creative is a 501(c)3
						</p>
						<p>
							info@reliantcreative.org
						</p>

					</div><!-- .site-info -->
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
