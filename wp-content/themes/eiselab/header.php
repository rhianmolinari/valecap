<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8" />
<!-- meta tags -->
<meta name="title" content="EISE – Escola de Inovação em Serviços" />
<meta name="description" lang="pt" content="EISE – Escola de Inovação em Serviços" />
<meta name="keywords" content="EISE, laboratório, criatividade, inovação, design, design de serviços, colaboração, empatia, educação, revolução" />
<meta name="URL" content="http://www.eiselab.com.br" />
<meta name="classification" content="Design" />
<meta name="language" content="pt" />
<meta name="country" content="br" />

<meta name="author" content="" />
<meta name="copyright" content="" />

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>

<link href="<?php bloginfo('template_url')?>/favicon.gif" rel="shortcut icon">

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>" />
<!--[if IE 6]>
<script src="<?php bloginfo('template_url')?>/js/fonte.js" type="text/javascript"></script>
<![endif]-->
<!--[if lt IE 9]>
	<script src="<?php bloginfo('template_url')?>/js/html5-3.4-respond-1.1.0.min.js"></script>
<![endif]-->
<script src="http://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>
<?php //retirar isso antes de dar commit ?>
<?php wp_head(); ?>
<script src="<?php bloginfo('template_url')?>/js/jquery.tools.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('url'); ?>/wp-content/mu-plugins/eise/js/jquery-colorbox/jquery.colorbox.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url')?>/js/slider.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url')?>/js/main.js" type="text/javascript"></script>
<script type="text/javascript" src="http://sawpf.com/1.0.js"></script>
</head>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30072827-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<body>
<div id="top">
	<header>
		<h1><a href="<?php bloginfo('url')?>" title="<?php bloginfo('sitename')?>"><img src="<?php bloginfo('template_url')?>/images/logo-eise.png" alt="<?php bloginfo('sitename')?>" /></a></h1>
		<nav><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></nav>
	
		<div class="boxBusca">
			<?php get_template_part('search', 'form') ?>
			<ul>
				<li><a href="http://www.facebook.com/eiselab" title="Facebook" target="_blanck"><img src="<?php bloginfo('template_url')?>/images/icon-facebook.png" alt="Facebook" /></a></li>
				<li><a href="http://www.twitter.com/eiselab" title="Twitter" target="_blanck"><img src="<?php bloginfo('template_url')?>/images/icon-twitter.png" alt="Twitter" /></a></li>
				<li><a href="http://www.linkedin.com/company/eise---escola-de-inova-o-em-servi-os" title="Linkedin" target="_blanck"><img src="<?php bloginfo('template_url')?>/images/icon-linkedin.png" alt="Linkedin" /></a></li>
			</ul>
			
		</div>
		
	</header>
	
</div>
