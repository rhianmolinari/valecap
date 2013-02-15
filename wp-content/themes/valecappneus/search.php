<?php
/**
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */

get_header(); ?>
<section class="grid_12 searchresult">
	<?php if ( have_posts() ) : ?>

<nav class="grid_12">
	<ol class="breadcrumb"><?php the_breadcrumb(); ?></ol>
</nav>
	<h1>Busca por: <span>pneus <small>(39)</small></span></h1>

<section class="grid_12 alpha omega margin_top margin_bottom searchsite">
	<h5>Site</h5>
	<ul class="list-posts box">
		<li>
			<a href="#">
				<hgroup>
					<h2>DD-DV</h2>
				</hgroup>
			</a>
		</li>
		<li>
			<a href="#">
				<hgroup>
					<h2>Pneu agrícola</h2>
				</hgroup>
			</a>
		</li>
		<li>
			<a href="#">
				<hgroup>
					<h2>Eco-XTC</h2>
				</hgroup>
			</a>
		</li>
	</ul>
</section>


<section class="grid_12 alpha omega margin_top margin_bottom">
	<h5>Blog</h5>
	<ul class="list-posts box">
		<li>
			<span class="number-comments"><a href="#">110</a></span>
			<ul class="infopost">
				<li><a class="categ" href="#">Rally SP</a></li> / 
				<li><a class="categ" href="#">Redes sociais</a></li> / 
				<li><a class="categ" href="#">Offroad</a></li>
			</ul>
			<a href="#">
				<time datetime="<?php the_time('Y-m-d g:i A') ?>"><?php the_time('d') ?> <span><?php the_time('M') ?></span></time>
				<hgroup>
					<h2>Copa Rally em SP</h2>
					<h4>Aqui vai carregar para ele digital</h4>
				</hgroup>
			</a>
		</li>
		<li>
			<span class="number-comments"><a href="#">110</a></span>
			<ul class="infopost">
				<li><a class="categ" href="#">Rally SP</a></li> / 
				<li><a class="categ" href="#">Redes sociais</a></li> / 
				<li><a class="categ" href="#">Offroad</a></li>
			</ul>
			<a href="#">
				<time datetime="<?php the_time('Y-m-d g:i A') ?>"><?php the_time('d') ?> <span><?php the_time('M') ?></span></time>
				<hgroup>
					<h2>Copa Rally em SP</h2>
					<h4>Aqui vai carregar para ele digital</h4>
				</hgroup>
			</a>
		</li>
		<li>
			<span class="number-comments"><a href="#">110</a></span>
			<ul class="infopost">
				<li><a class="categ" href="#">Rally SP</a></li> / 
				<li><a class="categ" href="#">Redes sociais</a></li> / 
				<li><a class="categ" href="#">Offroad</a></li> / 
				<li><a class="categ" href="#">Rally SP</a></li>/ 
				<li><a class="categ" href="#">Redes sociais</a></li> / 
				<li><a class="categ" href="#">Offroad</a></li>
			</ul>
			<a href="#">
				<time datetime="<?php the_time('Y-m-d g:i A') ?>"><?php the_time('d') ?> <span><?php the_time('M') ?></span></time>
				<hgroup>
					<h2>Copa Rally em SP</h2>
					<h4>Aqui vai carregar para ele digital</h4>
				</hgroup>
			</a>
		</li>
	</ul>
</section>

<nav class="grid_12 pagination omega alpha">
	<span>Página 1 / 14</span>
	<ul>
		<li style="display:none"><a href="#">«</a></li>
		<li class="current"><a href="javascript:void()">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li><a href="#">»</a></li>
	</ul>
</nav>

	<?php while ( have_posts() ) : the_post(); ?>
	<?php endwhile; ?>
	<?php else : ?>
</section>

<section class="grid_12 not-found">
		<img class="grid_2 prefix_5 suffix_5 omega alpha" src="<?php bloginfo('template_directory'); ?>/image/smile.png">
		
		<h1>Nenhum resultado encontrado</h1>
		
		<span class="grid_12 omega alpha">Sua busca por <strong><?php echo get_search_query() ?></strong> não retornou resultados.</span>
		
		<span class="grid_12 omega alpha">Tente novamente com outro termo.</span>
		
		<div class="grid_12 omega alpha"><?php get_search_form(); ?></div>
</section>

	<?php endif; ?>


<?php get_footer(); ?>