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
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/image/favicon.ico" />

<!-- SEO -->
<meta property="og:title" content="<?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('name'); ?>" />
<meta property="og:locale" content="pt-BR" />
<meta property="og:locale:alternate" content="pt-PT" />
<meta property="og:locale:alternate" content="en-GB" />
<meta property="og:locale:alternate" content="en-US" />
<meta property="og:locale:alternate" content="fr-FR" />
<meta property="og:type" content="website" />

<?php if ( is_single() ) { ?>
<!-- Meta Tags single -->
<meta name="description" content="<?php if(has_excerpt()) { echo strip_tags ( get_the_excerpt() ); } else { echo strip_tags ( excerpt(50) ); } ?>" />
<meta property="og:description" content="<?php if(has_excerpt()) { echo strip_tags ( get_the_excerpt() ); } else { echo strip_tags ( excerpt(50) ); } ?>" />
<meta property="og:type" content="article" />
<meta property="og:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) { echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); } ?>" />
<link rel="canonical" href="<?php the_permalink(); ?>"/>
<meta property="og:url" content="<?php the_permalink(); ?>" />
<?php } else { ?>
<meta property="og:image" content="<?php echo get_bloginfo('template_url') .'/img/logo.png'; ?>" />
<link rel="canonical" href="<?php echo current_url(); ?>"/>
<meta property="og:url" content="<?php echo current_url(); ?>" />
<?php } ?>

<?php if ( is_page() || is_home() ) { ?>
<!-- Meta Tags page and home -->
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<meta property="og:description" content="<?php bloginfo('description'); ?>" />
<meta property="og:type" content="website" />
<?php } ?>

<?php if ( is_page() ) { ?>
<!-- Meta Tags page -->
<meta name="description" content="<?php if(has_excerpt()) { echo strip_tags ( get_the_excerpt() ); } else { echo strip_tags ( excerpt(50) ); } ?>" />
<?php } ?>

<?php if ( is_home() ) { ?>
<!-- Meta Tags home -->
<meta name="description" content="<?php content_page_id(11); ?>" />
<?php } ?>

<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@valecappneus" />
<meta name="twitter:creator" content="@valecappneus" />
<meta name="twitter:title" content="<?php bloginfo('name'); ?>"/>
<!-- end SEO -->

<!-- Icon -->
<meta name="application-name" content="<?php bloginfo('name'); ?>" />
<meta name="msapplication-TileColor" content="#f5f5f5" />
<meta name="msapplication-square70x70logo" content="<?php bloginfo('template_url'); ?>/image/win8/tiny.png" />
<meta name="msapplication-square150x150logo" content="<?php bloginfo('template_url'); ?>/image/win8/square.png" />
<meta name="msapplication-wide310x150logo" content="<?php bloginfo('template_url'); ?>/image/win8/wide.png" />
<meta name="msapplication-square310x310logo" content="<?php bloginfo('template_url'); ?>/image/win8/large.png" />
<meta name="msapplication-notification" content="frequency=30;polling-uri=http://notifications.buildmypinnedsite.com/?feed=http://www.valecap.com.br/feed&id=1;polling-uri2=http://notifications.buildmypinnedsite.com/?feed=http://www.valecap.com.br/feed&id=2;polling-uri3=http://notifications.buildmypinnedsite.com/?feed=http://www.valecap.com.br/feed&id=3;polling-uri4=http://notifications.buildmypinnedsite.com/?feed=http://www.valecap.com.br/feed&id=4;polling-uri5=http://notifications.buildmypinnedsite.com/?feed=http://www.valecap.com.br/feed&id=5; cycle=1" />

<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo('template_url'); ?>/image/apple/apple-touch-icon-iphone.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/image/apple/apple-touch-icon-ipad.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php bloginfo('template_url'); ?>/image/apple/apple-touch-icon-iphone-retina.png" />
<!-- end Icon -->

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider-min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/dropkick-1.0.0.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/tipTip.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/validate.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.maskedinput.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="container_12">
		<h1 class="grid_3">
                    <a class="logo" title="P&aacute;gina inicial" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
		</h1>
		<div class="grid_4 push_5"><?php get_search_form(); ?></div>
		<nav id="site-navigation" class="grid_12" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
		</nav>
	</header>
<div class="content">
	<img class="bg" src="<?php bloginfo('template_directory'); ?>/image/bg.jpg" alt="Background">
	<div class="container_12">
