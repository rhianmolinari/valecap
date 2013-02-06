<?php
/**
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */

get_header(); ?>
<section class="grid_12 not-found">
	<?php if ( have_posts() ) : ?>
		<h1><?php printf( __( 'Busca por: %s' ), '<h5>' . get_search_query() . '</h5>' ); ?></h1>				
	<?php while ( have_posts() ) : the_post(); ?>

	<?php endwhile; ?>

	<?php else : ?>

		<img class="grid_2 prefix_5 suffix_5 omega alpha" src="<?php bloginfo('template_directory'); ?>/image/smile.png">
		
		<h1>Nenhum resultado encontrado</h1>
		
		<span class="grid_12 omega alpha">Sua busca por <strong>XXXX</strong> não retornou resultados.</span>
		
		<span class="grid_12 omega alpha">Tente novamente com outro termo.</span>
		
		<div class="grid_12 omega alpha"><?php get_search_form(); ?></div>
	
	<?php endif; ?>

</section>

<?php get_footer(); ?>