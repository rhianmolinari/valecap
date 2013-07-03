<?php
/**
 * Template Name: Lista dos produtos
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */

get_header(); ?>

<article class="grid_12">
	<h1><?php the_title(); ?></h1>
		<nav id="categoria-produtos" class="grid_3 alpha abas">
			<ul>
                            <?php $categories = get_categories(array('type' => 'produto', 'orderby' => 'id','order' => 'ASC', 'taxonomy' => 'tipo_produto', 'hide_empty' => 1));$cont=0; ?>
                            <?php foreach ($categories as $categoria): ?>
                            <li<?php echo ($cont++ == 0)?' class="selected"':''; ?>><a href="#!/<?php echo $categoria->slug; ?>" id="<?php echo $categoria->slug; ?>"><?php echo $categoria->cat_name; ?></a></li>
                            <?php endforeach; ?>
			</ul>
		</nav>
		<ul id="products" class="grid_9 type-product omega">
		</ul>
		<div class="grid_9 omega load">
			<span>
				<img src="<?php bloginfo('template_directory'); ?>/image/ajax-loader.gif" alt="Carregando">
			</span>
		</div>

</article>

<?php get_footer(); ?>