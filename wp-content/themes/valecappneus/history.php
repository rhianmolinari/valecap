<?php
/**
 * Template Name: Histórico
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */

get_header(); ?>

<nav class="grid_12">
	<ol class="breadcrumb"><?php the_breadcrumb(); ?></ol>
</nav>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<article class="grid_12">
	<h1><?php the_title(); ?></h1>
		<nav class="grid_3 alpha abas">
			<ul>
				<li class="selected"><a href="#">1998</a></li>
				<li><a href="#">1999</a></li>
				<li><a href="#">2001</a></li>
				<li><a href="#">2006</a></li>
				<li><a href="#">2008</a></li>
				<li><a href="#">2011</a></li>
				<li><a href="#">Hoje</a></li>
			</ul>
		</nav>
		<ul class="grid_9 omega entry-content">
			<li><?php the_content(); ?></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
</article>
<?php endwhile; ?>

<?php get_footer(); ?>