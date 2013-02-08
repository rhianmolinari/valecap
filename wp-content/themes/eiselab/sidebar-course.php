<ul id="courseList">
	<?php foreach (get_terms('modules') as $module) { 
		$courses = get_posts(array('numberposts' => -1, 'post_type' => 'course', 'modules' => $module->slug));?>
		<li> 
			<h2 id="<?php echo $module->slug ?>"><?php echo $module->name ?></h2>
			<ul>
				<?php foreach ($courses as $post): setup_postdata($post) ;?>
					<li>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</li>
				<?php endforeach ?>
			</ul>
		</li>	
	<?php } ?>
</ul>