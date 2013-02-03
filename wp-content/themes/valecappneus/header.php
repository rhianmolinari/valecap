<?php
/**
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */
?>

<!DOCTYPE html>
<!--[if IE 7]> <html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('name'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.8.3.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/royalSlider.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Script Facebook !-->
	<div id="fb-root"></div>
	<script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/all.js#xfbml=1"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>

	<header class="container_12">
		<h1 class="grid_3">
			<a class="logo" href="<?php bloginfo(url); ?>" title="<?php bloginfo(name); ?>"><?php bloginfo(name); ?></a>
		</h1>
		<div class="grid_4 push_5"><?php get_search_form(); ?></div>
		<nav id="site-navigation" class="grid_12" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
		</nav>
	</header>
<div class="content">
	<img class="bg" src="<?php bloginfo('template_directory'); ?>/image/bg.jpg">
	<div class="container_12">
