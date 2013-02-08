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
						<h2 id=""><?php the_title();?></h2>
						<div class="meta">
							<?php eise_posted_on(); ?>
						</div>
					</header>
					
					<?php the_content();?>
					<div id="authorBox">
						<h3>Sobre <?php the_author();?></h3>
						<?php echo get_avatar( get_the_author_email(), '40' ); ?>
						<p>
							<?php the_author_description();?>
						</p>
					</div>
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
		<?php dynamic_sidebar( 'blog' ); ?>
		<?php get_sidebar(); ?>
		
	</section>
</section>

		
		
		
<?php get_footer() ?>