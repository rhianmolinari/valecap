<?php
/**
 * Template Name: Trabalhe conosco
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
	<section class="grid_8 alpha">
		<h1><?php the_title(); ?></h1>
		<div class="entry-content"><?php the_content(); ?></div>
	</section>

	<form class="grid_4 omega upload">
		<fieldset>
			<h5>Envie seu currículo</h5>
			<span class="extension">Envie do seu currículo em PDF</span>
			<button><span>Up</span></button>
			<button class="grid_4 omega alpha">Enviar</button>
		</fieldset>
	</form>
</article>
<?php endwhile; ?>

<?php get_footer(); ?>