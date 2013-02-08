<?php 
//Template Name: Jornada Inovacao em serviços

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
					<ul id="journey">
						<li class="title">O NOSSO CONSTRUIR</li>
						<li class="journeySteps">
							<div class="seeding">
								<h2>Seeding</h2>
								<img src="<?php bloginfo("template_url")?>/images/icon-seeding.png">
								<p class="tip">
									Durante 1 ano a EISE presta tutorias e coaching para 8 grupos em 8 projetos reais.
								</p>
							</div>
							<div class="cultivation">
								<h2>Cultivation</h2>
								<img src="<?php bloginfo("template_url")?>/images/icon-cultivation.png">
								<p class="tip">
									Durante 6 meses a EISE e a apioadora provém condições para o cultivo e pilotagem dos projetos selecionados.</p>
							</div>
							<div class="harvest">
								<h2>Harvest</h2>
								<img src="<?php bloginfo("template_url")?>/images/icon-harvest.png">
								<p class="tip">Empreendedores começam
a colher os frutos do projeto
cultivado e apresentado para
os angels investirem.</p>
							</div>
						</li>
					</ul>
					<span class="clear"></span>
					<img src="<?php bloginfo("template_url")?>/images/info-separator.jpg" style="display:block;width:648px; margin:0 auto;">
					<span class="clear"></span>
					
					<ul id="journeyStarts">
						<li id="start">
							<img src="<?php bloginfo("template_url")?>/images/icon-start.jpg">
							<p>40 alunos, 40 trilhas de aprendizado e uma experiência única.</p>
						</li>
						<li id="service-explorer">
							<img src="<?php bloginfo("template_url")?>/images/service-explorer.jpg">
							<p>No primeiro estágio o explorador vai descobrir conceitos e ganhar uma compreensão ao mesmo 
tempo abrangente e profunda sobre os temas que esoclheu e sobre o universo da inovação em serviços.</p>
						</li>
						<li id="service-designer">
							<img src="<?php bloginfo("template_url")?>/images/service-designer.jpg">
							<p>Se torna um Service Designer,capaz de planejar e executar estratégias de inovação em
serviços, mantendo um modelo de conhecimento em ”T” com competências diversas e uma área onde é especialista. </p>
						</li>
						<li id="service-thinker">
							<img src="<?php bloginfo("template_url")?>/images/service-thinker.jpg">
							<p>Se transforma em um Service
Thinker e adquire uma visão
gestáltica sobre inovação em
serviços, capaz de levantar esta
bandeira e de liderar uma 
mudança de mentalidade de 
produtos para serviços. </p>
						</li>
					</ul>

					<ul id="journeyFinish">
						<li id="board">
							<p>Service Thinkers avaliam os 8 projetos e selecionam 4 para seguirem na fase cultivation.</p>
						</li>
						<li id="kick-off">
							<p>4 grupos formados por full time Service Thinkers.</p>
						</li>
						<li id="angels">
							<p>Empreendedores apresentam os projetos para uma mesa de angels, que decidirão
em que projetos investir.</p>
						</li>
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