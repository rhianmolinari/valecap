<?php
/**
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) the_post(); ?>

<article class="grid_8">
	<h1>Artigos de:</h1>
	<section class="author-page clearfix">
		<?php echo get_avatar (get_the_author_id() , 100 ); ?>
		<div class="author-bio">
			<h2><?php the_author_firstname(); ?> <?php the_author_lastname(); ?></h2>
			<p><?php the_author_description(); ?></p>
		</div>
	</section>

	<section class="grid_4 alpha entry-content margin_top margin_bottom">
		<span class="number-comments"><a href="#">110</a></span>
		<a href="#">
			<img class="thumbnail" src="http://www.placehold.it/300x150">	
			<hgroup>
				<h2>Copa Rally em SP</h2>
				<h4>Aqui vai carregar para ele digital</h4>
			</hgroup>
		</a>
	</section>
	<section class="grid_4 omega entry-content margin_top margin_bottom">
		<span class="number-comments"><a href="#">110</a></span>
		<a href="#">
			<img class="thumbnail" src="http://www.placehold.it/300x150">	
			<hgroup>
				<h2>Agora a Vipal esta presente na Europa</h2>
				<h4>Aqui vai carregar o resumo do post, um texto para ele digital</h4>
			</hgroup>
		</a>
	</section>

	<section class="grid_8 alpha margin_top margin_bottom">
	<h5>Janeiro 2012</h5>
	<ul class="list-posts box">
		<li>
			<span class="number-comments"><a href="#">110</a></span>
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

	<section class="grid_8 alpha margin_top margin_bottom">
	<h5>Fevereiro 2012</h5>
	<ul class="list-posts box">
		<li>
			<span class="number-comments"><a href="#">110</a></span>
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

<?php
	rewind_posts();
	get_template_part( 'loop', 'author' );
?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>