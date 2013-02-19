<?php
/**
 * Template Name: Categoria dos produtos
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
        <?php $categories = get_categories(array('type' => 'produto', 'orderby' => 'id','order' => 'ASC', 'taxonomy' => 'tipo_produto', 'hide_empty' => 0));$classez = array(' alpha','','',' omega');$cont=0; ?>
		<ul class="type-product">
                        <?php foreach($categories as $category): ?>
			<li class="box grid_3 productbox<?php echo $classez[$cont++];$cont = ($cont%4 == 0)?0:$cont; ?>">
                            <a href="<?php echo get_category_link($category->term_id); ?>">
					<h3><?php echo $category->cat_name; ?></h3>
                                        <img src="<?php echo (function_exists('z_taxonomy_image_url'))?z_taxonomy_image_url($category->term_id):"http://placehold.it/190x190"; ?>">
					<span class="saibamais">+ saiba mais</span>
				</a>
			</li>
                        <?php endforeach; ?>
		</ul>
</article>

<?php get_footer(); ?>