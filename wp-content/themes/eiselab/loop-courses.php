<?php foreach (get_terms('modules') as $module) {?>
	<?php $courses = get_posts(array('numberposts' => -1, 'post_type' => 'course', 'modules' => $module->slug)); ?>
	<?php foreach ($courses as $post): setup_postdata($post) ;?>
		<li class="<?php echo the_('modules-slug') ;?>">
			<a href="<?php the_permalink() ?>">
				<?php the_post_thumbnail("rect_litle"); ?>
				<h3><?php the_title(); ?></h3>
				<span class="hover"><?php echo the_('modules') ;?></span>
				<p>
					<?php the_excerpt(); ?>
				</p>						
			</a>
		</li>
	<?php endforeach; ?>
<?php } ?>