<?php query_posts(array('post_type'=>'thinkers')); ?>
		<?php if (have_posts()) : ?>
		<ul>
			<li>
				<h2>Service Thinkers <small><a href="<?php bloginfo("url"); ?>/service-thinkers">ver todos</a></small></h2>
				<ul>
				<?php while (have_posts()) : the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</li>
				<?php endwhile; ?>
				<?php // Navigation ?>
				<?php else : ?>
				<?php // No Posts Found ?>
				</ul>
			</li>
		</ul>
		<?php endif; ?>