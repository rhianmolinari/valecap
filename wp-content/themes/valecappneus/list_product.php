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

		<nav class="grid_9 push_3 pagination omega">
			<span>Página 2 / 14</span>
			<ul>
				<li><a href="#">«</a></li>
				<li><a href="#">1</a></li>
				<li class="current"><a href="javascript:void()">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">»</a></li>
			</ul>
		</nav>
</article>

<?php get_footer(); ?>