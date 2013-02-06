<?php
/**
 * Template Name: Page para visualizar o single.php do produto
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */

get_header(); ?>

<nav class="grid_12">
	<ol class="breadcrumb"><?php the_breadcrumb(); ?></ol>
</nav>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<article class="grid_8">
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<section class="entry-content">
		<?php the_content(); ?>
		<div class="recommended">
			<h6>Pneus recomendados</h6>
			<span>Recomendados</span>
			<ul>
				<li>155</li>
				<li>160</li>
				<li>170</li>
				<li>175</li>
				<li>200</li>
				<li>275</li>
				<li>280</li>
			</ul>
		</div>
	</section>
</article>

<section class="grid_4 product">
	<h5>Informações</h5>
	<div class="box">
		<img src="http://www.placehold.it/190x190">
		<span class="exclusive">Desenho exclusivo Vipal</span>
		<img class="eco" src="<?php bloginfo('template_directory'); ?>/image/ecotread.jpg" alt="EcoTREAD">
		<ul>
			<li class="axis">
				<img src="<?php bloginfo('template_directory'); ?>/image/eixo-livre.jpg" alt="Eixo livre:" title="Eixo livre">
				<span>Eixo livre</span>
			</li>
			<li class="axis">
				<img src="<?php bloginfo('template_directory'); ?>/image/eixo-misto.jpg" alt="Eixo misto:" title="Eixo misto">
				<span>Eixo misto</span>
			</li>
			<li class="axis">
				<img src="<?php bloginfo('template_directory'); ?>/image/eixo-tracao.jpg" alt="Eixo tração:" title="Eixo tração">
				<span>Eixo tração</span>
			</li>
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/image/radial.png" alt="Radial:" title="Radial">
				<span>Pneu radial</span>
			</li>
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/image/diagonal.png" alt="Diagonal:" title="Diagonal">
				<span>Pneu diagonal</span>
			</li>
		</ul>
		<ul class="aplications">
			<h6>Aplicações</h6>
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/image/industrial.png" alt="Industrial:" title="Industrial">
				<span>Recomendado</span>
			</li>
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/image/urbano.png" alt="Urbano:" title="Urbano">
				<span>Indicado</span>
			</li>
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/image/misto.png" alt="Misto:" title="Misto">
				<span>Indicado</span>
			</li>
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/image/foradeestrada.png" alt="Fora de estrada:" title="Fora de estrada">
				<span>Aceitável</span>
			</li>
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/image/pavimentadocurta.png" alt="Pavimentado de curta distância:" title="Pavimentado de curta distância">
				<span>Aceitável</span>
			</li>
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/image/pavimentadolonga.png" alt="Pavimentado de longa distância:" title="Pavimentado de longa distância">
				<span>Aceitável</span>
			</li>
		</ul>
	</div>
</section>
<?php endwhile; ?>

<?php get_footer(); ?>