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
	<section class="entry-content">
		<header>
			<a href="#"><img class="thumbnail" src="http://placehold.it/620x280"></a>
			<span class="number-comments"><a href="#">110</a></span>
			<div class="grid_8 omega alpha">
				<ul class="infopost">
					<li><a class="categ" href="#">Rally SP</a></li> / 
					<li><a class="categ" href="#">Redes sociais</a></li> / 
					<li><a class="categ" href="#">Offroad</a></li>
				</ul>
				<time datetime="<?php the_time('Y-m-d g:i A') ?>"><?php the_time('d') ?> <span><?php the_time('M') ?></span></time>
			</div>
			<hgroup>
				<a href="#"><h2><?php the_title(); ?></h2></a>
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
		</header>
	<div class="clearfix"><?php the_content(); ?></div>
	<footer>
		<div class="fshared">
			<span class="number-comments"><a href="#">110</a></span>
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
		<div class="author">
		<?php echo get_avatar (get_the_author_id() , 80 ); ?>
			<div class="author-bio">
			<h2><?php the_author_firstname(); ?> <?php the_author_lastname(); ?></h2>
			<p><?php the_author_description(); ?></p>
			<button>Mais posts do autor</button>
			</div>
		</div>
	</footer>
	</section>

<!-- COMMENTS FORM !-->
<section class="comment">
	<h1>Deixar um comentário</h1>
	<form class="commentform">
		<fieldset>
			<div>
				<label for="nome" class="grid_2 alpha">Nome</label>
				<input type="text" value="" id="nome" />
			</div>
			
			<div>
			<label for="email" class="grid_2 alpha">E-mail</label>
			<input type="email" value="" id="email" />
			</div>

			<div>
			<label for="mensagem" class="grid_2 alpha">Comentário</label>
			<textarea id="mensagem"></textarea>
			</div>

			<button type="submit" class="grid_6 omega alpha push_2">Publicar</button>
		</fieldset>
	</form>
</section>

</article>
<?php endwhile; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>