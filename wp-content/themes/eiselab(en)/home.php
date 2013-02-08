<?php
/*
 * Template Name: Homepage
*/

get_header();
?>

<section class="boxBanner">
	<div class="wrap-fake">
		<div class="areaVideo-fake"></div>
		<div class="titleVideo-fake"></div>
			<div class="wrap">
			<ul>
				<?php $highlights = EISE\Highlight::all() ; 
				foreach ($highlights as $highlight): ?>
					<li>
						<div class="areaVideo">
							<?php the_video_or_the_thumbnail($highlight) ?>
						</div>
						<div class="titleVideo">
							<p>
								<a href="<?php echo get_permalink($highlight->ID) ?>">
									<span class="title"><?php echo $highlight->post_title; ?></span>
									<span class="subtitle"><?php echo $highlight->post_type != 'page' ? $highlight->quote : get_post_meta($highlight->ID, 'quote', true) ; ?></span>
								</a>
							</p>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</section>

<section class="boxContent">
	<section class="boxLeft">
		<ul id="a-eise">
			<?php foreach (get_institutional_posts() as $post): setup_postdata($post) ?>
				<li>
					<a href="<?php the_permalink() ?>">
						<img src="<?php echo get_bloginfo('template_url') . '//images//'. $post->post_name . '.jpg' ?>" alt=""/>
						<h2><?php the_title() ?></h2>
						<p>
							<?php the_excerpt() ?>
						</p>
						<span>
							<span class='arrowRight'></span>
							Read more
						</span>
					</a>
				</li>
			<?php endforeach ?>		
		</ul>
				
		<section class="boxBlog">
			<h1><a href="<?php echo site_url('/blog/') ?>" title="see more posts">Blog</a></h1>
			<ul id="blog">
				<?php query_posts(array('post_type'=>'article','posts_per_page' => 3)); ?>
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail("rect_big"); ?>
							<h2><?php the_title()?></h2>
							<p>
								<?php echo substr(strip_tags($post->post_content), 0, strrpos(substr(strip_tags($post->post_content), 0, 140), ' ')).'...'; ?>
							</p>
							<span>
								<span class="arrowRight"></span>Read more
							</span>
						</a>
					</li>
					<?php endwhile; ?>
			
					<?php // Navigation ?>
			
					<?php else : ?>
			
					<?php // No Posts Found ?>
			
				<?php endif; ?>		
			</ul>
		</section>
		
		
	</section>
	
	<!-- line -->
	
	<section class="boxRight">
		<a href="<?php bloginfo('url'); ?>/campfires" id="campfire_go">
			<img src="<?php bloginfo('template_url'); ?>/images/campfire.jpg" alt="Confira nossas atividades de Campfire"/>
			<span>Check out our campfire activities</span>
		</a>
		
		<section class="sidebar">
			<?php Eise\Presenters\Mailing::mailing_signup(); ?>	
			<?php get_sidebar(); ?>
		</section>
	</section>
</section>














<?php get_footer() ?>