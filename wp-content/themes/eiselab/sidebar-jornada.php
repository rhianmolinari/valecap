<ul>
	<?php $journey_pages = get_posts( array ( 'category_name' => 'jornada', 'posts_per_page' => -1 , 'post_type' => 'page', 'order' => 'ASC') );?>
	<li>
		<h2>Jornada</h2>
		<ul>
			<?php foreach($journey_pages as $post): setup_postdata($post); ?> 
				<li>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</li>
			<?php endforeach; ?>
		</ul>
	</li>
</ul>