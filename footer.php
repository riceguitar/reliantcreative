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
						
						<p>
							&copy 2016 | Reliant Creative
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
