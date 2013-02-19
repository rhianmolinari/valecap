<?php
/**
 * Template Name: Histórico
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */

get_header(); ?>

<nav class="grid_12">
	<ol class="breadcrumb"><?php the_breadcrumb(); ?></ol>
</nav>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<article class="grid_12">
	<h1><?php the_title(); ?></h1>
		<nav class="grid_3 alpha abas">
			<ul>
                            <?php $anos = new WP_Query(array('category_name' => 'historico', 'orderby' => 'title', 'order' => 'ASC'));$cont=0;while($anos->have_posts()):$anos->the_post(); ?>
                            <li<?php if($cont++ == 0):?> class="selected"<?php endif; ?>><a href="<?php echo substr(get_permalink(), 0, strrpos(get_permalink(), '/')); ?>/#!<?php echo substr(get_permalink(), strrpos(get_permalink(), '/')); ?>"><?php echo get_the_title(); ?></a></li>
                            <?php endwhile;wp_reset_postdata();$cont=0; ?>
			</ul>
		</nav>
		<ul class="grid_9 omega entry-content">
                    <?php $content_anos = new WP_Query(array('category_name' => 'historico', 'orderby' => 'title', 'order' => 'ASC'));while($content_anos->have_posts()):$content_anos->the_post(); ?>
			<li<?php if($cont > 0):?> style="display:none"<?php endif; ?>><?php the_content();$cont++; ?></li>
                    <?php endwhile;wp_reset_postdata(); ?>
		</ul>
</article>
<?php endwhile; ?>

<?php get_footer(); ?>