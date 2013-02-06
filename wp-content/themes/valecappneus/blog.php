<?php
/**
 * Template Name: Blog
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
	<h1 class="entry-title">Blog</h1>
	<section class="entry-content homeblog">
		<div>
			<img class="thumbnail" src="http://placehold.it/620x280">
			<span class="number-comments"><a href="#">110</a></span>
			<div class="infopost">
				<span><a class="categ" href="#">Rally SP</a> / <a class="categ" href="#">Redes sociais</a> / <a class="categ" href="#">Offroad</a>
				</span>
			<time datetime="<?php the_time('Y-m-d g:i A') ?>"><?php the_time('d') ?> <span><?php the_time('M') ?></span></time>
			</div>
			<hgroup>
				<h2><?php the_title(); ?></h2>
				<h4>Aqui vai carregar o resumo do post, um texto para ele digital</h4>
			</hgroup>
			<div class="hshared">
			<span class="author-name">Por <a href="#"><strong><?php the_author_firstname(); ?> <?php the_author_lastname(); ?></strong></a></span>
			<ul>
				<li>
					<!-- Place this tag where you want the +1 button to render. -->
					<div class="g-plusone"></div>

					<!-- Place this tag after the last +1 button tag. -->
					<script type="text/javascript">
						window.___gcfg = {lang: 'pt-BR'}; (function() { var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true; po.src = 'https://apis.google.com/js/plusone.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s); })();
					</script>	
				</li>
				<li>
					<div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-font="arial"></div>
				</li>
				<li>
					<a href="https://twitter.com/share" class="twitter-share-button" data-via="rhianmolinari" data-lang="pt" data-related="rhianmolinari" data-hashtags="ValecapPneus">Tweetar</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</li>
			</ul>
			</div>
		</div>
	</section>


<section class="grid_4 alpha entry-content top_bottom">
	<img class="thumbnail" src="http://www.placehold.it/300x150">
	<span class="number-comments"><a href="#">110</a></span>
	<hgroup>
		<h2>Copa Rally em SP</h2>
		<h4>Aqui vai carregar para ele digital</h4>
	</hgroup>
</section>
<section class="grid_4 omega entry-content top_bottom">
	<img class="thumbnail" src="http://www.placehold.it/300x150">
	<span class="number-comments"><a href="#">110</a></span>
	<hgroup>
		<h2>Agora a Vipal esta presente na Europa</h2>
		<h4>Aqui vai carregar o resumo do post, um texto para ele digital</h4>
	</hgroup>
</section>

<section class="grid_8 alpha box top_bottom">
<ul class="list-posts">
	<li>
		<time datetime="<?php the_time('Y-m-d g:i A') ?>"><?php the_time('d') ?> <span><?php the_time('M') ?></span></time>
		<hgroup>
			<h2>Copa Rally em SP</h2>
			<h4>Aqui vai carregar para ele digital</h4>
		</hgroup>
		<span class="number-comments"><a href="#">110</a></span>
	</li>
	<li>
		<time datetime="<?php the_time('Y-m-d g:i A') ?>"><?php the_time('d') ?> <span><?php the_time('M') ?></span></time>
		<hgroup>
			<h2>Copa Rally em SP</h2>
			<h4>Aqui vai carregar para ele digital</h4>
		</hgroup>
		<span class="number-comments"><a href="#">110</a></span>
	</li>
	<li>
		<time datetime="<?php the_time('Y-m-d g:i A') ?>"><?php the_time('d') ?> <span><?php the_time('M') ?></span></time>
		<hgroup>
			<h2>Copa Rally em SP</h2>
			<h4>Aqui vai carregar para ele digital</h4>
		</hgroup>
		<span class="number-comments"><a href="#">110</a></span>
	</li>
</ul>
</section>

		<nav class="grid_8 pagination omega alpha">
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
</article>
<?php endwhile; ?>




<?php get_sidebar(); ?>
<?php get_footer(); ?>