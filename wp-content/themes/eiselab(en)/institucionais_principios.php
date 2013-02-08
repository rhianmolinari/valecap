<?php 
//Template Name: Institucionais principios
get_header(); ?>

<?php get_template_part("header", "banner")?>
<section class="boxContent clearfix">
	<section class="boxLeft">
		<article class="post">
			<?php if (have_posts()) : ?>
			
				<?php while (have_posts()) : the_post(); ?>
					<header class="headerPost">
						<h2 id=""><?php the_title();?></h2>
					</header>
					
					<?php the_content();?>
					
												
				<?php endwhile; ?>
			
					<ul id="hive"> 
							<!-- <li class="l1">
												<div>
													<a href="" class="p1">gfgdfgdfg</a>
												</div>
											</li> -->
							<li class="l2">
								<div><a href="" class="p2" title="Experience in order to evolve.">Experience in order to evolve. </a></div>
								<div class="last"><a href="" class="p3" title="Knowledge from many to many more.">Knowledge from many to many more.</a></div>
							</li>
							<li class="l3">
								<div><a href="" class="p4" title="Games are more fun">Games are more fun</a></div>
								<div><a href="" class="p5" title="Gestalt point of view">Gestalt point of view</a></div>
								<div class="last"><a href="" class="p6" title="Brands that deliver more relevant experience are more loved.">Brands that deliver more relevant experience are more loved.</a></div>
							</li>
							<li class="l2">
								<div><a href="" class="p7" title="Educational Revolution.">Educational Revolution.</a></div>
								<div class="last"><a href="" class="p8" title="Teaching with creative stimuli. ">Teaching with creative stimuli. </a></div>
							</li>
							<li class="l3">
								<div><a href="" class="p9" title="Sharing is the new owning">Sharing is the new owning</a></div>
								<div><a href="" class="p10">EISE</a></div>
								<div class="last"><a href="" class="p11" title="More webs of value and less chains of value.">More webs of value and less chains of value.</a></div>
							</li>
							<li class="l2">
								<div><a href="" class="p12" title="Life’s plurality.">Life’s plurality.</a></div>
								<div class="last"><a href="" class="p13" title="The co-habitation of 4 generations: Boomers, X, Y, Net and Advancing.">The co-habitation of 4 generations: Boomers, X, Y, Net and Advancing.</a></div>
							</li>
							<li class="l3">
								<div><a href="" class="p14" title="From person to person">From person to person</a></div>
								<div><a href="" class="p15" title="Generous is the new cool. ">Generous is the new cool. </a></div>
								<div class="last"><a href="" class="p16" title="Relationships more transparent and mature in the consumer/brand relationship">Relationships more transparent and mature in the consumer/brand relationship</a></div>
							</li>
							<li class="l2">
								<div><a href="" class="p17" title="Change existing situations into desired ones. ">Change existing situations into desired ones. </a></div>
								<div class="last"><a href="" class="p18" title="The essence of these things is in the service they provide.">The essence of these things is in the service they provide.</a></div>
								</li>
							<li class="l3">
								<div><a href="" class="p1" title="Return to constructing power">Return to constructing power</a></div>
								<div><a href="" class="p20" title="Searching for the purpose and meaning of life.">Searching for the purpose and meaning of life.</a></div>
								<div class="last"><a href="" class="p24" title="Little dreams, greater impact.">Little dreams, greater impact. </a></div>
							</li>
							<li class="l2">
								<div><a href="" class="p22" title="A self-sustainable world">A self-sustainable world</a></div>
								<div class="last"><a href="" class="p23" title="There are no more underdogs. ">There are no more underdogs. </a></div>
							</li>
						</ul>
					
			
				<?php else : ?>
			
					<?php // No Posts Found ?>
			
			<?php endif; ?>
			
			
			
		</article>
		
		
	</section>
	
	<!-- line -->
	
	<section class="sidebar">		
		<?php get_template_part('sidebar', 'institutional') ?>
		<?php get_sidebar(); ?>
		
	</section>

</section>
<?php get_footer() ?>

			