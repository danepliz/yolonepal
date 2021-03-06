<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link id="yolo-css" media="all" type="text/css" href="http://localhost/yolonepal/wp-content/themes/yolo/css/yolo-style.css" rel="stylesheet"></link>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="header-wrapper">
	
	<div id="banner"> 
	
		<div id="logo"><a href="#"><img src="./wp-content/themes/yolo/images/yolo/logo-small.png"/></a></div>
	
	</div><!-- end banner -->
	
	<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu-wrapper' ) ); ?>
	
	<?php //* ?>
	<div class="menu-wrapper"> 
		<ul id="main-nav">
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
			<li><a href="<?php echo esc_url( home_url( '/events' ) ); ?>">Events</a></li>
			<li><a href="<?php echo esc_url( home_url( '/articles' ) ); ?>">Articles</a></li>
			<li><a href="<?php echo esc_url( home_url( '/gallery' ) ); ?>">Gallery</a></li>
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Bands & Artists</a></li>
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Bar & Pubs</a></li>
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Videos</a></li>
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Blogs</a></li>
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Countries</a></li>
			<li><a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>">Contact Us</a></li>
		</ul>
	</div><!-- menu-wrapper -->
	<?php //*/ ?>
	
</header><!-- end header-wrap -->



<?php /*
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</a>

			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<h3 class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></h3>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<div id="main" class="site-main"><?php */ ?>
