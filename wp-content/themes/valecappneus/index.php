<?php
/**
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */

get_header(); ?>
<section class="grid_12 top_bottom">
	<div class="grid_9 alpha">
            <?php query_posts('category_name=info&orderby=id&order=DESC&posts_per_page=1'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
 		<a class="info" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php endwhile;endif;wp_reset_query(); ?>
        </div>
	<button class="grid_3 omega">Faça seu orçamento</button>
</section>

<section class="grid_12 box-yellow slider top_bottom">
	<?php query_posts('category_name=blog&orderby=id&order=DESC&posts_per_page=3');$cont=1; ?>
	<?php if (have_posts()) : while (have_posts()) : the_post();?>
			<a href="<?php the_permalink(); ?>">
				<div class="grid_4 omega alpha">
					<span class="categ grid_3 omega alpha"><?php $cats = get_categories('child_of='.get_cat_ID('blog'));foreach($cats as $cat){if(in_category($cat->slug, get_the_ID())){echo $cat->name;break;}} ?></span>
					<span class="number-slider"><?php echo $cont++; ?>/3</span>
					<h2><?php the_title(); ?></h2>
				</div>
				<?php the_post_thumbnail(get_the_ID(), "full"); ?>
			</a>
    <?php endwhile;endif;wp_reset_query(); ?>
</section>
<section class="grid_4 top_bottom">
	<h1>Mais vendidos</h1>
	<div class="box">
		<ul>
			<li><a href="">
				<span class="number">1º</span>
				<div class="group"><span class="categ">Agrícola</span>
				<h2>DD-dv</h2></div>
			</a></li>
			<li><a href="">
				<span class="number">2º</span>
				<div class="group"><span class="categ">Passeio / Utilitário</span>
				<h2>DD-dv</h2></div>
			</a></li>
			<li><a href="">
				<span class="number">3º</span>
				<div class="group"><span class="categ">Terraplanagem</span>
				<h2>DD-dv</h2></div>
			</a></li>
		</ul>
	</div>
</section>

<section class="grid_3 top_bottom">
	<h1>Promoção</h1>
	<div class="box-yellow featured">
		<a href="#">
			<h2>DD-dv</h2>
			<img src="http://placehold.it/190x190 ">
			<span class="saibamais">+ saiba mais</span>
		</a>
	</div>
</section>

<section class="grid_5 top_bottom">
	<h1>Newsletter</h1>
<!-- MailChimp Signup Form -->
<form action="http://valecap.us6.list-manage1.com/subscribe/post?u=f83a420ab5160b737d3ae3bd9&amp;id=8a42b484c6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	<fieldset>
	<label for="mce-EMAIL">Assinar newsletter</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Endereço de e-mail" required>
	<button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">Inscrever</button>
	<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
	</fieldset>
</form>
</section>

<section class="grid_5 top_bottom">
	<h1>Redes sociais</h1>
	<div class="box">
		<ul class="spread">
			<li class="facebook">
					<!-- Script Facebook !-->
					<div id="fb-root"></div>
					<script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/all.js#xfbml=1"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
					
					<div class="fb-like-box" data-href="http://www.facebook.com/valecappneus" data-width="350" data-show-faces="false" data-stream="false" data-header="true"></div>
			</li>
			<li class="twitter">
					<a href="https://twitter.com/rhianmolinari" class="twitter-follow-button" data-show-count="true" data-lang="pt" data-dnt="true">Seguir @rhianmolinari</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</li>
			<li class="google">
					<!-- Place this tag where you want the +1 button to render. -->
					<div class="g-plusone" data-annotation="inline" data-width="350"></div>

					<!-- Place this tag after the last +1 button tag. -->
					<script type="text/javascript">window.___gcfg = {lang: 'pt-BR'};(function() { var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true; po.src = 'https://apis.google.com/js/plusone.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s); })();</script>
			</li>
		</ul>
	</div>
</section>

<section class="grid_12 top_bottom">
	<h1>Clientes</h1>
	<div class="box">
		<ul class="parceiros">
			<li>
				<a href="#"><img src="<?php bloginfo('template_directory'); ?>/image/logo.png"></a>
			</li>
			<li>
				<a href="#"><img src="<?php bloginfo('template_directory'); ?>/image/logo.png"></a>
			</li>
			<li>
				<a href="#"><img src="<?php bloginfo('template_directory'); ?>/image/logo.png"></a>
			</li>
		</ul>
	</div>
</section>

<?php get_footer(); ?>