<?php 
	EISE\Campfire::all_by_date();
 ?>
<?php if (have_posts()) : ?>
	<ul id="boxProg" class="clearfix">
	
	<?php while (have_posts()) : the_post(); ?>
	<li>
		<a href="<?php the_permalink() ?>">
			<?php the_post_thumbnail("rect_litle"); ?>
			<span class="hover">See more</span>
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
