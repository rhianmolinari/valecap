<?php query_posts(array('post_type'=>'thinkers')); ?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<li>
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail("square"); ?>
			<span class="hover"><?php the_title()?></span>
		</a>
	</li>
	<?php endwhile; ?>
			
	<?php // Navigation ?>
			
	<?php else : ?>
			
	<?php // No Posts Found ?>
			
<?php endif; ?>
