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
								<div><a href="" class="p2" title="Experimentar para evoluir para experimentar para evoluir">Experimentar para evoluir para experimentar para evoluir</a></div>
								<div class="last"><a href="" class="p3" title="Conhecimento de muitos para muitos">Conhecimento de muitos para muitos</a></div>
							</li>
							<li class="l3">
								<div><a href="" class="p4" title="Jogos são + divertidos">Jogos são + divertidos</a></div>
								<div><a href="" class="p5" title="Visão Gestáltica">Ponto de vista Gestáltico</a></div>
								<div class="last"><a href="" class="p6" title="Marcas que entregam experiencias mais relevantes são mais amadas">Marcas que entregam experiencias mais relevantes são mais amadas</a></div>
							</li>
							<li class="l2">
								<div><a href="" class="p7" title="Revolução Educacional">Revolução Educacional</a></div>
								<div class="last"><a href="" class="p8" title="Ensino com estímulos criativos">Ensino com estímulos criativos</a></div>
							</li>
							<li class="l3">
								<div><a href="" class="p9" title="Compartilhar é o novo possuir">Compartilhar é o novo possuir</a></div>
								<div><a href="" class="p10">EISE</a></div>
								<div class="last"><a href="" class="p11" title="Mais redes de valor e menos cadeias de valor">Mais redes de valor e menos cadeias de valor</a></div>
							</li>
							<li class="l2">
								<div><a href="" class="p12" title="Pluralidade de vida">Pluralidade de vida</a></div>
								<div class="last"><a href="" class="p13" title="Convívio de 4 gerações: Boomers, X, Y, Net e avançando.">Convívio de 4 gerações: Boomers, X, Y, Net e avançando.</a></div>
							</li>
							<li class="l3">
								<div><a href="" class="p14" title="De pessoa para pessoa">De pessoa para pessoa</a></div>
								<div><a href="" class="p15" title="Generoso é o novo descolado">Generoso é o novo descolado</a></div>
								<div class="last"><a href="" class="p16" title="Relações + transparentes e maduras entre a marca e o consumidor">Relações + transparentes e maduras entre a marca e o consumidor</a></div>
							</li>
							<li class="l2">
								<div><a href="" class="p17" title="Transformar situações existentes em desejadas">Transformar situações existentes em desejadas</a></div>
								<div class="last"><a href="" class="p18" title="A essência das coisas está no serviço que prestam">A essência das coisas está no serviço que prestam</a></div>
								</li>
							<li class="l3">
								<div><a href="" class="p1" title="Retorno ao poder de construir">Retorno ao poder de construir</a></div>
								<div><a href="" class="p20" title="A busca pelo propósito e pelo sentido da vida">A busca pelo propósito e pelo sentido da vida</a></div>
								<div class="last"><a href="" class="p24" title="Pequenos sonhos, grandes impactos">Pequenos sonhos, grandes impactos</a></div>
							</li>
							<li class="l2">
								<div><a href="" class="p22" title="Um mundo sustentável">Um mundo sustentável</a></div>
								<div class="last"><a href="" class="p23" title="Não existem mais underdogs">Não existem mais underdogs</a></div>
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

			