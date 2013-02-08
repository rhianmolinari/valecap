<?php query_posts(array('post_type'=>'article')); ?>
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
				<span class="arrowRight"></span>read more
			</span>
		</a>
	</li>
	<?php endwhile; ?>
			
	<?php // Navigation ?>
			
	<?php else : ?>
			
	<?php // No Posts Found ?>
			
<?php endif; ?>
