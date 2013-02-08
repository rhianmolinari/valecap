<?php

get_header();
?>

<?php get_template_part("header", "banner")?>
<section class="boxContent">
	<section class="boxLeft">
		<article class="post">
			<?php if (have_posts()) : ?>
			
				<?php while (have_posts()) : the_post(); ?>
					<header class="headerPost">
						<?php //if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
						<h2 id=""><?php the_title();?></h2>
						<div class="meta">
							<?php eise_posted_on(); ?>
						</div>
					</header>
					
					<?php the_content();?>
					

					<div id="comments">
						<?php comments_template( '', true ); ?>
					</div>
					
			
				<?php endwhile; ?>
			
					<?php // Navigation ?>
			
				<?php else : ?>
			
					<?php // No Posts Found ?>
			
			<?php endif; ?>
			
			
			
		</article>
		
		
	</section>
	
	<!-- line -->
	
	<section class="sidebar">		
		<?php query_posts(array('post_type'=>'article','posts_per_page' => 5)); ?>
		<?php if (have_posts()) : ?>
		<ul>
			<li>
				<h2>Blog <small><a href="<?php bloginfo("url"); ?>/">see all</a></small></h2>
				<ul>
				<?php while (have_posts()) : the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</li>
				<?php endwhile; ?>
				<?php // Navigation ?>
				<?php else : ?>
				<?php // No Posts Found ?>
				</ul>
			</li>
		</ul>
		<?php endif; ?>
		
		<?php get_sidebar(); ?>
		
	</section>
</section>

		
		
		
<?php get_footer() ?>
