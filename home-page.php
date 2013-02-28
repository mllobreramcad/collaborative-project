<?php
/*
Template Name: Homepage
*/
?>


<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Collaborative Project
 * @since Collaborative Project 1.0
 */

get_header(); ?>

		<div id="primary" class="content-area homepage">
			<div id="content" class="site-content" role="main">
			
				<img id="imageA1" src="<?php the_field('image_a1'); ?>" class="homepage-grid-image column1 rowA" />
				<img id="imageA2" src="<?php the_field('image_a2'); ?>" class="homepage-grid-image column2 rowA" />
				<img id="imageA3" src="<?php the_field('image_a3'); ?>" class="homepage-grid-image column3 rowA" />
				<img id="imageA4" src="<?php the_field('image_a4'); ?>" class="homepage-grid-image column4 rowA" />
				
				<img id="imageB1" src="<?php the_field('image_b1'); ?>" class="homepage-grid-image column1 rowB" />
				<img id="imageB2" src="<?php the_field('image_b2'); ?>" class="homepage-grid-image column2 rowB" />
				<img id="imageB4" src="<?php the_field('image_b4'); ?>" class="homepage-grid-image column4 rowB" />
				
				<img id="imageC1" src="<?php the_field('image_c1'); ?>" class="homepage-grid-image column1 rowC" />
				<img id="imageC4" src="<?php the_field('image_c4'); ?>" class="homepage-grid-image column4 rowC" />
				
				<img id="imageD1" src="<?php the_field('image_d1'); ?>" class="homepage-grid-image column1 rowD" />
				<img id="imageD2" src="<?php the_field('image_d2'); ?>" class="homepage-grid-image column2 rowD" />
				<img id="imageD3" src="<?php the_field('image_d3'); ?>" class="homepage-grid-image column3 rowD" />
				<img id="imageD4" src="<?php the_field('image_d4'); ?>" class="homepage-grid-image column4 rowD" />

				
				<div id="homepage-text" class="column3 rowB">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>
				</div>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_footer(); ?>