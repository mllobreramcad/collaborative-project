<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Collaborative Project
 * @since Collaborative Project 1.0
 */
?>

	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	
		<?php
			$posts = get_posts(array(
				'numberposts' => -1,
				'category' => 3,
			));
		?>
	
		<?php while ( have_posts() ) : the_post(); ?>
		<div id="museum-info">
			<div class="black-box column1">
				<h1><?php the_field( 'hours_title' ); ?></h1>
				<p><?php the_field( 'days1' ); ?> <span class="hours"><?php the_field( 'hours1' ); ?></span><br />
				<?php the_field( 'days2' ); ?> <span class="hours"><?php the_field( 'hours2' ); ?></span><br />
				<?php the_field( 'days3' ); ?> <span class="hours"><?php the_field( 'hours3' ); ?></span></p>
			</div>
			
			<div class="black-box column2">
				<p><?php the_field( 'address' ); ?><br />
				<?php the_field( 'phone' ); ?></p>
				<p><?php the_field( 'email' ); ?></p>
			</div>
			
			<div class="black-box column3">
				<p><?php the_field( 'age_group1' ); ?> <span class="price"><?php the_field( 'price1' ); ?></span><br />
				<?php the_field( 'age_group2' ); ?> <span class="price"><?php the_field( 'price2' ); ?></span><br />
				<?php the_field( 'age_group3' ); ?> <span class="price"><?php the_field( 'price3' ); ?></span></p>
			</div>
			
			<div class="black-box column4">
				<h1><?php the_field( 'announcement_title' ); ?></h1>
				<p><?php the_field( 'announcement' ); ?></p>
			</div>
		</div>
		
		<?php endwhile; // end of the loop. ?>
		
		
		<div class="site-info">
			<!--<?php do_action( 'collaborative_project_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'collaborative_project' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'collaborative_project' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'collaborative_project' ), 'Collaborative Project', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>-->
			
			<p id="copyright">copyright 2013</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>