<?php
/**
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */

get_header(); ?>

<nav class="grid_12">
	<ol class="breadcrumb"><?php the_breadcrumb(); ?></ol>
</nav>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<section class="grid_12">
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content clearfix">
						<?php the_content(); ?>
					</div>
				</section>
<?php endwhile; ?>

<?php get_footer(); ?>