<?php
/**
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */

get_header(); ?>

<article class="grid_8 archive-page">
	<?php if ( have_posts() ) : ?>
	<h1>Arquivo: <span><?php echo get_the_date('F Y'); ?></span></h1>

	<section class="grid_8 alpha margin_bottom">
	<ul class="list-posts box">
		<?php while ( have_posts() ) : the_post();?>
		<li>
			<span class="number-comments"><a href="<?php echo get_comments_link() ?>"><?php echo get_comments_number() ?></a></span>
			<a href="<?php the_permalink(); ?>">
				<time datetime="<?php the_time('Y-m-d g:i A') ?>"><?php the_time('d'); ?> <span><?php the_time('M'); ?></span></time>
				<hgroup>
					<h2><?php the_title(); ?></h2>
					<h4><?php echo get_the_excerpt(); ?></h4>
				</hgroup>
			</a>
		</li>
		<?php endwhile; ?>
	</ul>
	</section>
	<?php endif; ?>

	<nav class="grid_8 pagination omega alpha">
		<span>Página <?php echo max( 1, get_query_var('paged') ) ." / " . $wp_query->max_num_pages; ?></span>
		<ul>
			<li class="prev"><?php previous_posts_link('&laquo;', 0); ?></li>
			<li class="next"><?php next_posts_link('&raquo;', 0); ?></li>
		</ul>
	</nav>
</article>

<?php get_sidebar(); ?>
<?php get_footer(); ?>