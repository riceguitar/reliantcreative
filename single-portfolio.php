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

					<?php
						$cover_image = get_field('client_cover_photo'); 
					?>
					<img src="<?php echo $cover_image['url']; ?>" alt="" class="port-single-cover-image" />

					<div class="container port-single-intro">
						<div class="row">
							<div class="col-md-7">
								<h3 class="port-single-head">The Project</h3>
								<div class="port-single-text-block">
									<?php the_field('project_description'); ?>
								</div>
							</div>
							<div class="col-md-4 col-md-offset-1">
								<h3 class="port-single-head">Services Provided</h3>
								<div class="port-single-text-block service-wrap">
									<?php the_field('client_services_provided'); ?>
								</div>
							</div>
						</div>
					</div>

						<?php the_content(); ?>


					<?php	
					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div><!-- #primary -->



<?php
get_footer();
