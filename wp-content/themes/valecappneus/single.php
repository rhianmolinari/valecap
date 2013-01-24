<?php
/**
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
	<div class="entry-content">
		<header>
			<img class="thumbnail" src="http://placehold.it/620x280">
			<div>
				<span><a class="categ" href="#">Rally SP</a> / <a class="categ" href="#">Redes sociais</a> / <a class="categ" href="#">Offroad</a>
				</span>
			<span class="comments">110</span>
			</div>
			<h2><?php the_title(); ?></h2>
			<h3>Aqui vai carregar o resumo do post, um texto para ele digital</h3>
			<div class="shared">
			<span class="author">Por <a href="#"><strong>Rhian Molinari</strong></a></span>
			<ul>
				<li>
					<div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-font="arial"></div>
				</li>
				<li>
					<a href="https://twitter.com/share" class="twitter-share-button" data-via="rhianmolinari" data-lang="pt" data-related="rhianmolinari" data-hashtags="ValecapPneus">Tweetar</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</li>
				<li>
					<!-- Place this tag where you want the +1 button to render. -->
					<div class="g-plusone"></div>

					<!-- Place this tag after the last +1 button tag. -->
					<script type="text/javascript">
						window.___gcfg = {lang: 'pt-BR'}; (function() { var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true; po.src = 'https://apis.google.com/js/plusone.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s); })();
					</script>
				</li>
			</ul>
			</div>
		</header>
	<?php the_content(); ?>
	</div>
</article>
<?php endwhile; ?>

<?php get_footer(); ?>