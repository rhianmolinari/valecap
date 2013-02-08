<?php

get_header();
?>

<?php get_template_part('header', 'banner') ?>

<section class="boxContent">
	<section class="boxLeft">
		<article class="post camp clearfix">
			<?php if (have_posts()) : ?>
			
				<?php while (have_posts()) : the_post(); ?>
					<header class="headerPost">
							<h2 id=""><?php the_title();?></h2>
					</header>
					<?php the_post_thumbnail("campfire"); ?>
					<div class="campContent">
						<?php the_content();?>
						<div class="tags">
							Temas: <?php
							$posttags = get_the_tags();
							if ($posttags) {
								foreach($posttags as $tag) {
									echo $tag->name . ', '; 
								}
							}
						?>
						</div>
						<ul class="info">
							<li>
								<h2><?php the_('types') ;?></h2>
								<span><?php echo the_('types-description') ?></span>
							</li>
							<li>
								<h2><?php the_('start_date') ?></h2>
								<span>date</span>
							</li>
							<li>
								<h2><?php the_('start_time') ?>h </h2>
								<span>schedule</span>
							</li>
							<li>
								<h2><?php the_('duration')?>h </h2>
								<span>duration</span>
							</li>
							<span class="clear"></span>
							<li>
								<?php Eise\Presenters\Campfire::camper_signup() ?>
							</li>
						</ul>
					</div>
					
					
			
				<?php endwhile; ?>
			
					<?php // Navigation ?>
			
				<?php else : ?>
			
					<?php // No Posts Found ?>
			
			<?php endif; ?>
			
			
			
		</article>
		
		
	</section>
	
	<!-- line -->
	
	<section class="sidebar">		
		<?php get_template_part('sidebar','campfire') ?>
		<?php get_sidebar(); ?>
		
	</section>
</section>
		
<?php get_footer() ?>
