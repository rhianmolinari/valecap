<?php $posts = EISE\Campfire::all_by_date() ?>
<?php if (! empty($posts)): ?>
	<ul>
		<li>
			<h2>Campfires <small><a href="<?php bloginfo("url"); ?>/campfires">see all</a></small></h2>
			<ul>
				<?php foreach($posts as $post): setup_postdata($post); ?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</li>
	</ul>
<?php endif; ?>