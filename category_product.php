<?php
/**
 * Template Name: Categoria dos produtos
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */

get_header(); ?>

<article class="grid_12">
	<h1><?php the_title(); ?></h1>
        <?php $categories = get_categories(array('type' => 'produto', 'orderby' => 'id','order' => 'ASC', 'taxonomy' => 'tipo_produto', 'hide_empty' => 1));$classez = array(' alpha','','',' omega');$cont=0; ?>
		<ul class="type-product">
                        <?php foreach($categories as $category): ?>
			<li class="box grid_3 productbox<?php echo $classez[$cont++];$cont = ($cont%4 == 0)?0:$cont; ?>">
                            <a href="<?php bloginfo('url'); ?>/lista-produtos/#!/<?php echo $category->slug; ?>">
					<h3><?php echo $category->cat_name; ?></h3>
                                        <img src="<?php echo (function_exists('z_taxonomy_image_url'))?z_taxonomy_image_url($category->term_id):get_bloginfo('template_directory') . '/image/not-image.png'; ?>" alt="<?php echo $category->cat_name; ?>" >
					<span class="saibamais">+ saiba mais</span>
				</a>
			</li>
                        <?php endforeach; ?>
		</ul>
</article>

<?php get_footer(); ?>