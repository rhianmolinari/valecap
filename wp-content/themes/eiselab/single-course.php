<?php

get_header();
?>

<div class="wrapBanner">
	<section class="boxBannerInner">
		<div class="wrapImg">
			<?php the_post_thumbnail("top"); ?>
			<a href="#fullimage" id="zoom">ZOOM</a>
		</div>
			
		<div class="quotes <?php the_header_color() ?>">
			<p> <?php the_quote() ?> </p>
		</div>
	</section>
	
</div>
<div id="fullimage" style="display:none;"><?php the_post_thumbnail("full"); ?></div>
<section class="boxContent">
	<section class="boxLeft">
		<article class="post courses clearfix <?php echo the_('modules-slug') ;?>">
			<?php if (have_posts()) : ?>
			
				<?php while (have_posts()) : the_post(); ?>
					<header class="headerPost">
							<h2 id=""><?php the_title();?></h2>
					</header>
					
					
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
						<li class="type">
							<h2 >
								<?php echo the_('modules') ;?>
							</h2>
							<span>área de conhecimento</span>
						</li>
						<li>
							<h2><?php echo the_('duration') . 'h' ?></h2>
							<span>duração</span>
						</li>
					</ul>
					
					
			
				<?php endwhile; ?>
			
					<?php // Navigation ?>
			
				<?php else : ?>
			
					<?php // No Posts Found ?>
			
			<?php endif; ?>
			
			
			
		</article>
		
		
	</section>
	
	<!-- line -->
	
	<section class="sidebar">		
		<ul>
			<li><h2>Módulos <small><a href="<?php bloginfo("url"); ?>/modulos">ver todos</a></small></h2></li>
		</ul>
		<?php get_template_part('sidebar', 'course') ?>		
		<?php get_sidebar(); ?>
		
	</section>
</section>
		
<?php get_footer() ?>
