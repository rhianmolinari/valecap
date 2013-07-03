<?php
/**
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<article class="grid_8">
	<h1 class="entry-title">Blog</h1>
	<section class="entry-content">
		<header>
			<?php if(has_post_thumbnail()): ?><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(get_the_ID(), 'featured-blog-thumb', array('class'=>'thumbnail')); ?></a>
			<span class="number-comments"><a href="<?php echo get_comments_link() ?>"><?php echo get_comments_number() ?></a></span><?php endif; ?>
			<div class="grid_8 omega alpha">
				<ul class="infopost"><?php $categories = get_the_category();$tam = count($categories)-1;$cont = 0;foreach($categories as $category):if($category->slug != 'blog'): ?>
					<li><a class="categ" href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->cat_name; ?></a></li><?php if(++$cont < $tam): ?><li>&nbsp;/ </li><?php endif; ?>
					<?php endif;endforeach; ?>
				</ul>
				<time datetime="<?php the_time('Y-m-d g:i A') ?>"><?php the_time('d'); ?> <span><?php the_time('M'); ?></span></time>
			</div>
			<a href="<?php the_permalink(); ?>" class="title-post">
				<h2><?php the_title(); ?></h2>
			</a>
			<?php if(has_excerpt()): ?><h4><?php echo get_the_excerpt(); ?></h4><?php endif; ?>
			

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
		</header>
	<div class="clearfix"><?php the_content(); ?></div>
	<footer>
		<div class="fshared">
			<span class="number-comments"><a href="<?php echo get_comments_link() ?>"><?php echo get_comments_number() ?></a></span>
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
		<div class="author-page clearfix">
		<?php echo get_avatar (get_the_author_meta('ID') , 80 ); ?>
			<div class="author-bio">
			<h2><?php the_author_meta( 'first_name' ); ?> <?php the_author_meta( 'last_name' ); ?></h2>
			<p><?php the_author_meta( 'description' ); ?></p>
			<button onclick="location.href='<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>'">Mais posts do autor</button>
			</div>
		</div>
	</footer>
	</section>

<section id="comments">
<?php comments_template(); ?>
</section>

</article>
<?php endwhile; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>