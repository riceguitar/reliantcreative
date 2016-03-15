<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package reliantcreative
 */

get_header(); ?>


<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>

			<div class="container-fluid container-nomargin">
				<div class="row">
					<div class="col-md-12">
						<section class="home-slideshow">
							<div class="slick slick-home-top">
								<?php
								if( have_rows('home_slides') ):
								    while ( have_rows('home_slides') ) : the_row();
								?>
									<?php $image = get_sub_field('slide_image'); ?>
									<div class="slick-one">
										<img src="<?php echo $image['sizes']['large']; ?>" class="feat-home-image" />
										<div class="feat-float">
											<div class="caption">
												<div class="slide-text"><?php the_sub_field('slide_text'); ?></div>
												<p class="slide-credit">&mdash; <?php the_sub_field('slide_credit'); ?></p>
											</div>
										</div>
									</div>
								<?php
								    endwhile;
								endif;
								?>
							</div>

							<script>
							jQuery(document).ready(function($){
							  $('.slick-home-top').slick({
							  	'dots': true
							  });
							});
							</script>
						</section>
					</div>
				</div>
			</div>

			<div class="container-fluid container-nomargin">

				<div class="row">
					<div class="col-md-12">

						<section class="home-intro">

							<div class="row">
								<div class="col-md-6 welcome-left">
									<div class="welcome-panel panel panel-default">
										<div class="panel-body">
											<?php the_field('welcome_left'); ?>
										</div>
									</div>
								</div>
								<div class="col-md-6 welcome-right">
									<div class="welcome-panel panel panel-default welcome-list">
										<div class="panel-body">
											<?php the_field('welcome_right'); ?>
										</div>
									</div>
								</div>
							</div>

						</section>

						<section class="home-portfolio">
							<div class="slick slick-portfolio">
								<?php $post_objects = get_field('portfolio_slides'); ?>
								<?php 
								foreach( $post_objects as $post ) :
									setup_postdata($post);
								?>

								<?php $pimage = get_field('client_cover_photo'); ?>
								<div class="port-single-slider" style="background-image: url('<?php echo $pimage['sizes']['large']; ?>');">
									<div class="smoke"></div>
									<div class="container above">
										<div class="row">
											<div class="col-md-4">
												<?php $portlogo = get_field('client_logo'); ?>
												<?php //print_r($portlogo); ?>
												<a href="<?php the_permalink(); ?>"><img src="<?php echo $portlogo['url']; ?>" class="port-single-logo" /></a>
											</div>
											<div class="col-md-6 col-md-offset-2">
												
												<div class="caption">
													<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
													<?php 
														$thestrong = get_field('project_description'); 
														echo substr($thestrong, 0, 200). " ... " . substr($thestrong, -5);
													?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php endforeach; ?>
								<?php wp_reset_postdata(); ?>
							</div>

							<script>
							jQuery(document).ready(function($){
							  $('.slick-portfolio').slick({
							  });
							});
							</script>
						</section>

						<section class="home-highlights">
							<div class="container">
								<div class="row">
									<?php
									if( have_rows('home_highlights') ):
									    while ( have_rows('home_highlights') ) : the_row();
									?>
									<div class="col-md-4">
										<div class="highlight_single">
										<?php $image = get_sub_field('high_image'); ?>
										<img src="<?php echo $image['url']; ?>" alt="" />
										<h3><a href="<?php the_sub_field('high_link'); ?>"><?php the_sub_field('high_title'); ?></a></h3>
										<p><?php the_sub_field('high_text'); ?></p>
										</div>
									</div>
									<?php
									    endwhile;
									endif;
									?>
								</div>
							</div>

						</section>
					</div>
				</div>

			</div>

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->


<?php
get_footer();
