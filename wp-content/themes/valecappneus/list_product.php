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
				<li><a href="#">Off road</a></li>
				<li><a href="javascript:void(0)" title="DD-dv">Passeio / Utilitários</a></li>
				<li><a href="#">Carga</a></li>
				<li><a href="#">Agrícola</a></li>
				<li><a href="#">Terraplanagem</a></li>
				<li><a href="#">Industriais</a></li>
			</ul>
		</nav>
		<ul class="grid_9 type-product omega">
			<li class="box grid_3 productbox alpha">
				<a href="#">
					<h3>DD-dv</h3>
					<img src="http://placehold.it/220x220">
					<span class="saibamais">+ saiba mais</span>
				</a>
			</li>
			<li class="box grid_3 productbox">
				<a href="#">
					<h3>VTR-10</h3>
					<img src="http://placehold.it/220x220">
					<span class="saibamais">+ saiba mais</span>
				</a>
			</li>
			<li class="box grid_3 productbox omega">
				<a href="#">
					<h3>Eco-DR</h3>
					<img src="http://placehold.it/220x220">
					<span class="saibamais">+ saiba mais</span>
				</a>
			</li>
			<li class="box grid_3 productbox alpha">
				<a href="#">
					<h3>DV-ECO</h3>
					<img src="http://placehold.it/220x220">
					<span class="saibamais">+ saiba mais</span>
				</a>
			</li>
			<li class="box grid_3 productbox">
				<a href="#">
					<h3>VRS-22</h3>
					<img src="http://placehold.it/220x220">
					<span class="saibamais">+ saiba mais</span>
				</a>
			</li>
			<li class="box grid_3 productbox omega">
				<a href="#">
					<h3>Agro-1S</h3>
					<img src="http://placehold.it/220x220">
					<span class="saibamais">+ saiba mais</span>
				</a>
			</li>
			<li class="box grid_3 productbox alpha">
				<a href="#">
					<h3>DV-ECO</h3>
					<img src="http://placehold.it/220x220">
					<span class="saibamais">+ saiba mais</span>
				</a>
			</li>
			<li class="box grid_3 productbox">
				<a href="#">
					<h3>VRS-22</h3>
					<img src="http://placehold.it/220x220">
					<span class="saibamais">+ saiba mais</span>
				</a>
			</li>
			<li class="box grid_3 productbox omega">
				<a href="#">
					<h3>Agro-1S</h3>
					<img src="http://placehold.it/220x220">
					<span class="saibamais">+ saiba mais</span>
				</a>
			</li>
		</ul>

<ul id="DD-dv">
			<li class="box grid_3 productbox alpha">
				<a href="#">
					<h3>DV-ECO</h3>
					<img src="http://placehold.it/220x220">
					<span class="saibamais">+ saiba mais</span>
				</a>
			</li>
</ul>
		<nav class="grid_9 push_3 pagination">
			<ul>
				<li><a href="#">«</a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">…</a></li>
				<li><a href="#">»</a></li>
			</ul>
		</nav>
</article>

<?php get_footer(); ?>