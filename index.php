<?php
/**
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */

get_header(); ?>
<section class="grid_12 margin_top margin_bottom">
	<div class="grid_9 alpha">
            <?php query_posts('category_name=informativo&orderby=id&order=DESC&posts_per_page=1&post_status=publish'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
 		<a class="info" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php endwhile;endif;wp_reset_query(); ?>
        </div>
	<button onclick="location.href='<?php bloginfo('url'); ?>/orcamento'" class="grid_3 omega">Faça seu orçamento</button>
</section>

<section class="grid_12 section_slides">
	<div class="box-yellow flexslider flex-loading">
		<?php query_posts('category_name=blog&orderby=id&order=DESC&post_status=publish');$cont=1; ?>
		<ul class="slides">
		<?php if (have_posts()) : while (have_posts()) : the_post(); if(has_post_thumbnail()):?>
			<li>
				<a href="<?php the_permalink(); ?>">
					<div class="grid_4 omega alpha">
						<span class="categ grid_3 omega alpha"><?php $cats = get_categories('child_of='.get_cat_ID('blog')."&exclude=".get_cat_ID('informativo'));foreach($cats as $cat){if(in_category($cat->slug, get_the_ID())){echo $cat->name;break;}} ?></span>
						<span class="number-slider"><?php echo $cont++; ?>/3</span>
						<h2><?php the_title(); ?></h2>
					</div>
					<?php the_post_thumbnail('homepage-slide-thumb'); ?>
				</a><?php if($cont == 4)break; ?>
			</li>
		<?php endif;endwhile;endif;wp_reset_query(); ?>
		</ul>
	</div>
</section>
<section class="grid_4 margin_top margin_bottom">
	<h1>Mais vendidos</h1>
		<ul class="box">
                    <li><?php $first = new WP_Query(array('post_type' => 'produto', 'meta_key' => 'xyz_first_post_id'));if($first->have_posts()):$first->the_post(); ?><a href="<?php echo get_permalink(get_post_meta(get_the_ID(), 'xyz_first_post_id', true)); ?>">
				<span class="number">1º</span>
                                <div class="group"><span class="categ"><?php echo strip_tags(get_the_term_list(get_post_meta(get_the_ID(), 'xyz_first_post_id', true), 'tipo_produto', '', ' / ', '')); ?></span>
				<h2><?php echo get_the_title(get_post_meta(get_the_ID(), 'xyz_first_post_id', true)); ?></h2></div>
			</a><?php endif;wp_reset_postdata(); ?></li>
			<li><?php $second = new WP_Query(array('post_type' => 'produto', 'meta_key' => 'xyz_second_post_id'));if($second->have_posts()):$second->the_post(); ?><a href="<?php echo get_permalink(get_post_meta(get_the_ID(), 'xyz_second_post_id', true)); ?>">
				<span class="number">2º</span>
				<div class="group"><span class="categ"><?php echo strip_tags(get_the_term_list(get_post_meta(get_the_ID(), 'xyz_second_post_id', true), 'tipo_produto', '', ' / ', '')); ?></span>
				<h2><?php echo get_the_title(get_post_meta(get_the_ID(), 'xyz_second_post_id', true)); ?></h2></div>
			</a><?php endif;wp_reset_postdata(); ?></li>
			<li><?php $third = new WP_Query(array('post_type' => 'produto', 'meta_key' => 'xyz_third_post_id'));if($third->have_posts()):$third->the_post(); ?><a href="<?php echo get_permalink(get_post_meta(get_the_ID(), 'xyz_third_post_id', true)); ?>">
				<span class="number">3º</span>
				<div class="group"><span class="categ"><?php echo strip_tags(get_the_term_list(get_post_meta(get_the_ID(), 'xyz_third_post_id', true), 'tipo_produto', '', ' / ', '')); ?></span>
				<h2><?php echo get_the_title(get_post_meta(get_the_ID(), 'xyz_third_post_id', true)); ?></h2></div>
			</a><?php endif;wp_reset_postdata(); ?></li>
		</ul>
</section>

<section class="grid_3 margin_top margin_bottom">
	<h1>Destaque</h1>
	<div class="box-yellow featured">
            <?php $destaque = new WP_Query(array('post_type' => 'produto', 'meta_key' => 'xyz_dest_post_id'));if($destaque->have_posts()):$destaque->the_post(); ?>
            <a href="<?php echo get_permalink(get_post_meta(get_the_ID(), 'xyz_dest_post_id', true)); ?>">
			<h2><?php echo get_the_title(get_post_meta(get_the_ID(), 'xyz_dest_post_id', true)); ?></h2>
                        <?php echo (has_post_thumbnail(get_post_meta(get_the_ID(), 'xyz_dest_post_id', true)))?get_the_post_thumbnail(get_post_meta(get_the_ID(), 'xyz_dest_post_id', true), 'product-thumb', array('class'=>"",'alt'=>"",'title'=>"")): '<img width="190" height="190" src="' . get_bloginfo('template_directory') . '/image/not-image.png" alt="' . get_the_title(get_post_meta(get_the_ID(), 'xyz_dest_post_id', true)) . '" />'; ?>
			<span class="saibamais">+ saiba mais</span>
            </a>
            <?php endif;wp_reset_postdata(); ?>
	</div>
</section>

<section class="grid_5 margin_top margin_bottom">
	<h1>Newsletter</h1>
<!-- MailChimp Signup Form -->
<form action="http://valecap.us6.list-manage1.com/subscribe/post?u=f83a420ab5160b737d3ae3bd9&amp;id=8a42b484c6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	<fieldset>
	<label for="mce-EMAIL">Assinar newsletter</label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Endereço de e-mail" required>
	<button value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">Inscrever</button>
	</fieldset>
</form>
</section>

<section class="grid_5 margin_bottom">
	<h1>Redes sociais</h1>
		<ul class="spread box">
			<li class="facebook">
					<!-- Script Facebook !-->
					<div id="fb-root"></div>
					<script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/all.js#xfbml=1"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
					
					<div class="fb-like-box" data-href="http://www.facebook.com/valecappneus" data-width="350" data-show-faces="false" data-stream="false" data-header="true"></div>
			</li>
			<li class="twitter">
					<a href="https://twitter.com/valecappneus" class="twitter-follow-button" data-show-count="true" data-lang="pt" data-dnt="true">Seguir @valecappneus</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</li>
			<li class="google">
					<!-- Posicione este código onde você deseja que o selo apareça. -->
					<a href="https://plus.google.com/117525717337564195677?prsrc=3" rel="publisher" target="_top" style="text-decoration:none;display:inline-block;color:#333;text-align:center; font:13px/16px arial,sans-serif;white-space:nowrap;">
					<span style="display:inline-block;font-weight:bold;vertical-align:top;margin-right:5px; margin-top:8px;">Valecap Pneus</span><span style="display:inline-block;vertical-align:top;margin-right:15px; margin-top:8px;">em</span>
					<img src="//ssl.gstatic.com/images/icons/gplus-32.png" alt="Google+" style="border:0;width:32px;height:32px;"/>
					</a>
			</li>
		</ul>
</section>

<section class="grid_12 margin_bottom section_parceiros">
	<h1>Parceiros</h1>
	<div class="box">
		<ul class="parceiros">
			<li>
				<a href="http://www.vipal.com"><img src="<?php bloginfo('template_directory'); ?>/image/parceiros/vipal.png" alt="Vipal"></a>
			</li>
		</ul>
	</div>
</section>

<?php get_footer(); ?>