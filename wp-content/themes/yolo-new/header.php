<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage yolo-new
 * @since yolo
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
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/layout.css'; ?>" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> onload="resizeContainer()">

<header>
	
	<a href="#" id="logo"><img src="./wp-content/themes/yolo/images/yolo/logo-small.png" width="100" height="60" /></a>
		
	<nav> 
		<ul id="main-nav">
			<li><a href="#">Home</a></li>
			<li><a href="#">Events</a></li>
			<li><a href="#">Articles</a></li>
			<li><a href="#">Gallery</a></li>
			<li><a href="#">Bands & Artists</a></li>
			<li><a href="#">Bar & Pubs</a></li>
			<li><a href="#">Videos</a></li>
			<li><a href="#">Blogs</a></li>
			<li><a href="#">Countries</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
	
	</nav><!-- menu-wrapper -->
	
</header>




<?php /* ?>
<header id="header-wrapper">
	
	<div id="banner"> 
	
		<div id="logo"><a href="#"><img src="./wp-content/themes/yolo/images/yolo/logo-small.png"/></a></div>
	
	</div><!-- end banner -->
	
	<div id="menu-wrapper"> 
		<ul id="main-nav">
			<li><a href="#">Home</a></li>
			<li><a href="#">Events</a></li>
			<li><a href="#">Articles</a></li>
			<li><a href="#">Gallery</a></li>
			<li><a href="#">Bands & Artists</a></li>
			<li><a href="#">Bar & Pubs</a></li>
			<li><a href="#">Videos</a></li>
			<li><a href="#">Blogs</a></li>
			<li><a href="#">Countries</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
	
	</div><!-- menu-wrapper -->
</header><!-- end header-wrap -->
<?php */ ?>
