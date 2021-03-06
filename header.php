<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Collaborative Project
 * @since Collaborative Project 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		
		<div id="social-media-links">
			<a href="http://www.facebook.com"><img id="facebook-link" src="<?php bloginfo( 'stylesheet_directory' );?>/images/bw_facebook_icon.png" alt="Our Facebook Page" /></a>
			<a href="http://www.flickr.com"><img id="flickr-link" src="<?php bloginfo( 'stylesheet_directory' );?>/images/bw_flickr_icon.png" alt="Our Flickr Page" /></a>
			<a href="http://www.twitter.com"><img id="twitter-link" src="<?php bloginfo( 'stylesheet_directory' );?>/images/bw_twitter_icon.png" alt="Our Twitter Feed" /></a>
		</div>
		
		<hgroup>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img id="tattooMuseum_logo" src="<?php bloginfo( 'stylesheet_directory' );?>/images/tattooMuseum_logo.gif" alt="Minneapolis Museum of Tattoos" /></a>
		</hgroup>

		<nav role="navigation" class="site-navigation main-navigation">
			<h1 class="assistive-text"><?php _e( 'Menu', 'collaborative_project' ); ?></h1>
			<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'collaborative_project' ); ?>"><?php _e( 'Skip to content', 'collaborative_project' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- .site-navigation .main-navigation -->
	</header><!-- #masthead .site-header -->

	<div id="main" class="site-main">
