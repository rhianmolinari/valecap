<?php
/**
 * Template Name: Categoria dos produtos
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */

get_header(); ?>

<nav class="grid_12">
	<ol class="breadcrumb"><?php the_breadcrumb(); ?></ol>
</nav>

<article class="grid_12">
	<h1><?php the_title(); ?></h1>
		<ul class="type-product">
			<li class="box grid_3 productbox alpha">
				<a href="#">
					<h3>Passeio / Utilitários</h3>
					<img src="http://placehold.it/190x190">
					<span class="saibamais">+ saiba mais</span>
				</a>
			</li>
			<li class="box grid_3 productbox">
				<a href="#">
					<h3>Off road</h3>
					<img src="http://placehold.it/190x190">
					<span class="saibamais">+ saiba mais</span>
				</a>
			</li>
			<li class="box grid_3 productbox">
				<a href="#">
					<h3>Carga</h3>
					<img src="http://placehold.it/190x190">
					<span class="saibamais">+ saiba mais</span>
				</a>
			</li>
			<li class="box grid_3 productbox omega">
				<a href="#">
					<h3>Agrícola</h3>
					<img src="http://placehold.it/190x190">
					<span class="saibamais">+ saiba mais</span>
				</a>
			</li>
			<li class="box grid_3 productbox alpha">
				<a href="#">
					<h3>Terraplanagem</h3>
					<img src="http://placehold.it/190x190">
					<span class="saibamais">+ saiba mais</span>
				</a>
			</li>
			<li class="box grid_3 productbox">
				<a href="#">
					<h3>Industriais</h3>
					<img src="http://placehold.it/190x190">
					<span class="saibamais">+ saiba mais</span>
				</a>
			</li>
		</ul>
</article>

<?php get_footer(); ?>