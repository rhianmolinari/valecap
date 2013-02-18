<?php
/**
 * Template Name: Lista dos produtos
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
		<nav class="grid_3 alpha abas">
			<ul>
				<li class="selected"><a href="#">Off road</a></li>
				<li><a href="#">Passeio / Utilitários</a></li>
				<li><a href="#">Carga</a></li>
				<li><a href="#">Agrícola</a></li>
				<li><a href="#">Terraplanagem</a></li>
				<li><a href="#">Industriais</a></li>
			</ul>
		</nav>
		<ul class="grid_9 type-product omega">
			<li class="box grid_3 alpha">
				<a href="#">
					<h3>DD-dv</h3>
					<img src="http://placehold.it/190x190">
					<span class="saibamais">+ saiba mais</span>
				</a>
			</li>
			<li class="box grid_3">
				<a href="#">
					<h3>VTR-10</h3>
					<img src="http://placehold.it/190x190">
					<span class="saibamais">+ saiba mais</span>
				</a>
			</li>
			<li class="box grid_3 omega">
				<a href="#">
					<h3>Eco-DR</h3>
					<img src="http://placehold.it/190x190">
					<span class="saibamais">+ saiba mais</span>
				</a>
			</li>
			<li class="box grid_3 alpha">
				<a href="#">
					<h3>DV-ECO</h3>
					<img src="http://placehold.it/190x190">
					<span class="saibamais">+ saiba mais</span>
				</a>
			</li>
			<li class="box grid_3">
				<a href="#">
					<h3>VRS-22</h3>
					<img src="http://placehold.it/190x190">
					<span class="saibamais">+ saiba mais</span>
				</a>
			</li>
			<li class="box grid_3 omega">
				<a href="#">
					<h3>Agro-1S</h3>
					<img src="http://placehold.it/190x190">
					<span class="saibamais">+ saiba mais</span>
				</a>
			</li>
			<li class="box grid_3 alpha">
				<a href="#">
					<h3>DV-ECO</h3>
					<img src="http://placehold.it/190x190">
					<span class="saibamais">+ saiba mais</span>
				</a>
			</li>
			<li class="box grid_3">
				<a href="#">
					<h3>VRS-22</h3>
					<img src="http://placehold.it/190x190">
					<span class="saibamais">+ saiba mais</span>
				</a>
			</li>
			<li class="box grid_3 omega">
				<a href="#">
					<h3>Agro-1S</h3>
					<img src="http://placehold.it/190x190">
					<span class="saibamais">+ saiba mais</span>
				</a>
			</li>
		</ul>

		<nav class="grid_9 push_3 pagination omega">
			<span>Página 2 / 14</span>
			<ul>
				<li><a href="#">«</a></li>
				<li><a href="#">1</a></li>
				<li class="current"><a href="javascript:void()">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">»</a></li>
			</ul>
		</nav>
</article>

<?php get_footer(); ?>