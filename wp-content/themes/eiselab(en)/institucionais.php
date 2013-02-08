<?php 
//Template Name: Institucionais
get_header(); ?>

<?php get_template_part("header", "banner")?>
<section class="boxContent clearfix">
	<section class="boxLeft">
		<article class="post">
			<?php if (have_posts()) : ?>
			
				<?php while (have_posts()) : the_post(); ?>
					<header class="headerPost">
						<h2 id=""><?php the_title();?></h2>
					</header>
					
					<?php the_content();?>
												
				<?php endwhile; ?>
			
					<?php // Navigation ?>
			
				<?php else : ?>
			
					<?php // No Posts Found ?>
			
			<?php endif; ?>
			
			
			
		</article>
		
	</section>
	
	<!-- line -->
	
	<section class="sidebar">
		<?php get_template_part('sidebar', 'institutional') ?>
		<?php get_sidebar(); ?>
		
	</section>

</section>
<?php get_footer() ?>
