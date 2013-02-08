<ul>
	<li>
		<h2>Conheça a Eise</h2>
		<ul>
			<?php foreach(get_institutional_posts() as $item): ?>
				<li>
					<a href="<?php echo get_permalink($item->ID) ?>"><?php echo $item->post_title ?></a>
				</li>
			<?php endforeach; ?>
		</ul>
	</li>
</ul>