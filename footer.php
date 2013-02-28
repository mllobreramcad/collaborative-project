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
		
		<div id="museum-info">
			<div class="black-box column1">
				<h1>Hours</h1>
				<p>Monday-Friday <span class="hours">10-8pm</span><br />
				Saturday <span class="hours">10-10pm</span><br />
				Sunday <span class="hours">CLOSED</span></p>
			</div>
			
			<div class="black-box column2">
				<p>1234 Tattoo Lane<br />
				Minneapolis, MN 55411<br />
				612-555-5555<br />
				info@mplstattoomuseum.com</p>
			</div>
			
			<div class="black-box column3">
				<p>Adults <span class="price">$12</span><br />
				Seniors (65+) <span class="price">$7</span><br />
				Under 12 <span class="price">Free</span></p>
			</div>
			
			<div class="black-box column4">
				<h1>Coming this March:</h1>
				<p>An inside look into the life and art of Egbert Engelbert (1920-1987)</p>
			</div>
		</div>
		
		
		
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