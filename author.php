<?php
/**
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) the_post(); ?>
<?php
    $dois = new WP_Query(array('order'=>'DESC', 'orderby'=>'date', 'category_name'=>'blog', 'author'=>get_the_author_meta('ID')));
    $cont = 0;
?>

<article class="grid_8">
	<h1>Artigos de:</h1>
	<section class="author-page clearfix">
		<?php echo get_avatar (get_the_author_meta('ID') , 100 ); ?>
		<div class="author-bio">
			<h2><?php the_author_meta( 'first_name' ); ?> <?php the_author_meta( 'last_name' ); ?></h2>
			<p><?php the_author_meta( 'description' ); ?></p>
		</div>
	</section>

<?php while($dois->have_posts()):$dois->the_post();if(has_post_thumbnail()){ ?>
<section class="grid_4 alpha entry-content margin_top margin_bottom">
	<span class="number-comments"><a href="<?php echo get_comments_link(); ?>"><?php echo get_comments_number(); ?></a></span>
        <a href="<?php the_permalink(); ?>">
		<?php echo get_the_post_thumbnail(get_the_ID(), 'blog-posts-thumb', array('class'=>'thumbnail')); ?>
		<hgroup>
			<h2><?php the_title(); ?></h2>
                        <?php if(has_excerpt()): ?><h4><?php echo get_the_excerpt(); ?></h4><?php endif; ?>
		</hgroup>
	</a>
</section>
<?php $cont++;if($cont == 2){$cont=1;break;}};endwhile;wp_reset_postdata(); ?>
<?php
	$paged = (get_query_var('paged'))?get_query_var('paged') : 1;
	query_posts(array('category_name'=>'blog','orderby'=>'date','order'=>'DESC','paged' => $paged, 'author'=>get_the_author_meta('ID')));
	$month = "";
?>
<?php while(have_posts()):the_post(); ?>
	<?php if($month != get_the_date( 'F' ) && $month == ""){$month = get_the_date( 'F' ); ?>
	<section class="grid_8 alpha margin_top margin_bottom">
	<h5><?php echo get_the_date( 'F Y' ); ?></h5>
	<ul class="list-posts box">
	<?php } else if($month != get_the_date( 'F' )) { $month = get_the_date( 'F' ); ?>
	</ul>
	</section>

	<section class="grid_8 alpha margin_top margin_bottom">
	<h5><?php echo get_the_date( 'F Y' ); ?></h5>
	<ul class="list-posts box">
	<?php } ?>
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
	<?php if(++$cont > 8 || ( $cont > intval($wp_query->found_posts/$wp_query->max_num_pages) && get_query_var('paged') == $wp_query->max_num_pages)): ?>
	</ul>
	</section>
	<?php endif; ?>
<?php endwhile; ?>

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