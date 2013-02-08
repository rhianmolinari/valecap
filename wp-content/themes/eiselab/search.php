<?php

get_header();
?>

<?php get_template_part('header', 'banner') ?>

<section class="boxContent">
	<section class="boxLeft">
		<?php if (have_posts()) : ?>	
			<?php while (have_posts()) : the_post(); ?>
				<li>
					<a href="<?php the_permalink() ?>">
						<?php the_post_thumbnail("rect_litle"); ?>
						<span class="hover">Inscreva-se</span>
						<h3><?php the_title(); ?></h3>
						<p>
							<?php echo substr(strip_tags($post->post_content), 0, strrpos(substr(strip_tags($post->post_content), 0, 50), ' ')).'...'; ?>
						</p>						
					</a>
				</li>
	<?php endwhile; ?>
			
	<?php // Navigation ?>
			
	<?php else : ?>
			
	<?php // No Posts Found ?>
	</ul>	
<?php endif; ?>
	</section>
	
	<!-- line -->
	
	<section class="sidebar">		
		<?php get_sidebar(); ?>
		
	</section>
</section>
		
<?php get_footer() ?>