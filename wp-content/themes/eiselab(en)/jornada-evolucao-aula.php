<?php 
//Template Name: jornada evolucao aula

get_header(); ?>

<?php get_template_part("header", "banner")?>
<section class="boxContent clearfix">
	<section class="boxLeft">
		<article class="">
			<?php if (have_posts()) : ?>
			
				<?php while (have_posts()) : the_post(); ?>
					<header class="headerPost">
						<h2 id=""><?php the_title();?></h2>
					</header>
					
					<?php the_content();?>
					<ul id="studentTrip">
						<li class="title">JORNADA DE EVOLUÇÃO EM UMA AULA NA EISE</li>
						<li class=""><img src="<?php bloginfo("template_url")?>/images/icon-student-thinker.jpg"></li>
						<li class=""><img src="<?php bloginfo("template_url")?>/images/first-step.jpg">
						<li class=""><img src="<?php bloginfo("template_url")?>/images/second-step.jpg">
						<li class=""><img src="<?php bloginfo("template_url")?>/images/last-step.jpg">
					</ul>
												
				<?php endwhile; ?>			
				<?php else : ?>
			
					<?php // No Posts Found ?>
			
			<?php endif; ?>
			
			
			
		</article>
		
		
	</section>
	
	<!-- line -->
	
	<section class="sidebar">		
		<?php get_template_part('sidebar', 'jornada') ?>
		<?php get_sidebar(); ?>
		
	</section>

</section>
<?php get_footer() ?>