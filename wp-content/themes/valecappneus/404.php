<?php
/**
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */

get_header(); ?>
			<section class="grid_12 not-found">
				<img class="grid_4 prefix_4 suffix_4 omega alpha" src="<?php bloginfo('template_directory'); ?>/image/ops.png">
				<h1>Página não encontrada</h1>
				<span class="grid_12 omega alpha">O endereço abaixo não existe, tente utilizando o campo de busca</span>
				<strong class="grid_12 omega alpha"><?php echo current_url(); ?></strong>
				<div class="grid_12 omega alpha"><?php get_search_form(); ?></div>
			</section>

<?php get_footer(); ?>