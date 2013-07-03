<?php
/**
 * Template Name: Blog
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */

get_header(); ?>
<?php

    $mostrados = array();
    $destaque = new WP_Query(array('order'=>'DESC', 'orderby'=>'date', 'category_name'=>'blog'));
    $dois = new WP_Query(array('order'=>'DESC', 'orderby'=>'date', 'category_name'=>'blog'));
    $cont = 0;

?>
<article class="grid_8">
	<h1 class="entry-title">Blog</h1>
        <?php while($destaque->have_posts()):$destaque->the_post();if(has_post_thumbnail()):array_push($mostrados, get_the_ID()); ?>
	<section class="entry-content homeblog">
		<span class="number-comments"><a href="<?php echo get_comments_link() ?>"><?php echo get_comments_number() ?></a></span>
                <a href="<?php the_permalink(); ?>">
                        <?php echo get_the_post_thumbnail(get_the_ID(), 'featured-blog-thumb', array('class'=>'thumbnail')); ?>
			<hgroup>
				<h2><?php the_title(); ?></h2>
                                <?php if(has_excerpt()): ?><h4><?php echo get_the_excerpt(); ?></h4><?php endif; ?>
			</hgroup>
		</a>
		<div class="hshared">
			<span class="author-name">Por <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' ));  ?>"><strong><?php the_author_meta( 'first_name' ); ?> <?php the_author_meta( 'last_name' ); ?></strong></a></span>
			<ul>
				<li>
					<!-- Place this tag where you want the +1 button to render. -->
					<div class="g-plusone"></div>

					<!-- Place this tag after the last +1 button tag. -->
					<script type="text/javascript">
							window.___gcfg = {lang: 'pt-BR'}; (function() { var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true; po.src = 'https://apis.google.com/js/plusone.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s); })();
					</script>	
				</li>
				<li>
					<div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-font="arial"></div>
				</li>
				<li>
					<a href="https://twitter.com/share" class="twitter-share-button" data-via="valecappneus" data-lang="pt" data-related="valecappneus" data-hashtags="ValecapPneus">Tweetar</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</li>
			</ul>
		</div>
	</section>
        <?php $cont++;if($cont == 1){break;}endif;endwhile;wp_reset_postdata();$cont=0; ?>
<?php while($dois->have_posts()):$dois->the_post();if(has_post_thumbnail() && !in_array(get_the_ID(), $mostrados)){array_push($mostrados, get_the_ID()); ?>
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
<?php $cont++;if($cont == 2){$cont=0;break;}};endwhile;wp_reset_postdata(); ?>

<section class="grid_8 alpha margin_top margin_bottom">
<ul class="list-posts box"><?php $paged = (get_query_var('paged'))?get_query_var('paged') : 1; ?>
    <?php query_posts(array('category_name'=>'blog','orderby'=>'date','order'=>'DESC','post__not_in'=>$mostrados, 'posts_per_page'=>8, 'paged' => $paged)); if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<li>
		<span class="number-comments">
			<a href="<?php echo get_comments_link() ?>"><?php echo get_comments_number() ?></a>
		</span>
		<a href="<?php the_permalink(); ?>">
			<time datetime="<?php the_time('Y-m-d g:i A') ?>"><?php the_time('d'); ?> <span><?php the_time('M'); ?></span></time>
			<hgroup>
				<h2><?php the_title(); ?></h2>
				<?php if(has_excerpt()): ?><h4><?php echo get_the_excerpt(); ?></h4><?php endif; ?>
			</hgroup>
		</a>
	</li>
    <?php endwhile; ?>
</ul>
</section>

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