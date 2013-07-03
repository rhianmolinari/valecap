<?php
/**
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */


	global $query_string;

	$query_args = explode("&", $query_string);
	$search_query = array();

	foreach($query_args as $key => $string) {
		$query_split = explode("=", $string);
		$search_query[$query_split[0]] = urldecode($query_split[1]);
	} // foreach

	$search = new WP_Query($search_query);

get_header(); ?>
<section class="grid_12 searchresult">
	<?php if ( have_posts() ) : ?>

	<h1>Busca por: <span><?php echo get_search_query(); ?> <small>(<?php echo $search->found_posts; ?>)</small></span></h1>

<section class="grid_12 alpha omega margin_top margin_bottom">
	<h5>Resultados</h5>
	<ul class="list-posts box">
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
		<li>
		<?php if(get_comments_number() > 0): ?>    
		<span class="number-comments"><a href="<?php echo get_comments_link() ?>"><?php echo get_comments_number() ?></a></span>
		<?php endif; ?>
		<a href="<?php the_permalink() ?>">
		<?php $categories = get_the_category();$tam = count($categories);$cont = 0;if(count($categories) > 0): ?>
		
			<ul class="infopost">
			<?php foreach($categories as $cat): ?>
				<li>
					<span class="categ"><?php echo $cat->name; ?></span><?php if(++$cont < $tam): ?> / <?php endif; ?>
				</li>
			<?php endforeach; ?>
			</ul><?php endif; ?>

			<hgroup>
				<h2><?php the_title() ?></h2>
				<?php if(has_excerpt()): ?><h4><?php echo get_the_excerpt(); ?></h4><?php endif; ?>
			</hgroup>
		</a>
		</li>
		<?php endwhile; endif; ?>
	</ul>
</section>

<nav class="grid_12 pagination omega alpha">
	<span>Página <?php echo max( 1, get_query_var('paged') ) ." / " . $wp_query->max_num_pages; ?></span>

<?php
$big = 999999999; // need an unlikely integer

echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $wp_query->max_num_pages,
	'type' => 'list',
	'show_all' => true,
	'prev_text' => '&laquo;',
	'next_text' => '&raquo;'
) );
?>
</nav>

	<?php else : ?>
</section>

<section class="grid_12 not-found">
		<img class="grid_2 prefix_5 suffix_5 omega alpha" src="<?php bloginfo('template_directory'); ?>/image/smile.png">
		
		<h1>Nenhum resultado encontrado</h1>
		
		<span class="grid_12 omega alpha">Sua busca por <strong><?php echo get_search_query() ?></strong> não retornou resultados.</span>
		
		<span class="grid_12 omega alpha">Tente novamente com outro termo.</span>
		
		<div class="grid_12 omega alpha"><?php get_search_form(); ?></div>
</section>

	<?php endif; ?>


<?php get_footer(); ?>