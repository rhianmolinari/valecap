<?php
/**
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */

get_header(); ?>

<nav class="grid_12">
	<ol class="breadcrumb"><?php the_breadcrumb(); ?></ol>
</nav>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<article class="grid_8">
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<section class="entry-content">
		<?php the_content(); ?>
		<div class="recommended">
			<h6>Pneus recomendados</h6>
			<span title="Medidas recomendadas">Medidas recomendadas</span>
                        <?php $posttags = get_the_tags();if($posttags):?>
			<ul>
                            <?php foreach($posttags as $tag) : ?>
				<li><?php echo $tag->name; ?></li>
                            <?php endforeach; ?>
			</ul>
                        <?php endif; ?>
		</div>
	</section>
</article>

<section class="grid_4 product">
	<h5>Informa&ccedil;&otilde;es</h5>
	<div class="box">
		<?php echo (has_post_thumbnail())?get_the_post_thumbnail(get_the_ID(), 'product-thumb'):'<img width="190" height="190" src="' . get_bloginfo('template_directory') . '/image/not-image.png" alt="' . get_the_title() . '" />'; ?>
		<?php if(get_post_meta(get_the_ID(), 'prd_checkbox_excl', true)): ?><span class="exclusive">Desenho exclusivo Vipal</span><?php endif; ?>
		<?php if(get_post_meta(get_the_ID(), 'prd_checkbox_ecotread', true)): ?><img class="eco" src="<?php bloginfo('template_directory'); ?>/image/ecotread.png" alt="EcoTREAD"><?php endif; ?>
		<ul><?php if(get_post_meta(get_the_ID(), 'prd_radio_eixo', true)): ?><?php if(get_post_meta(get_the_ID(), 'prd_radio_eixo', true) == 'livre'): ?>
			<li class="axis">
				<img src="<?php bloginfo('template_directory'); ?>/image/eixo-livre.jpg" alt="Eixo livre:" title="Eixo livre">
				<span>Eixo livre</span>
			</li><?php endif; ?><?php if(get_post_meta(get_the_ID(), 'prd_radio_eixo', true) == 'misto'): ?>
			<li class="axis">
				<img src="<?php bloginfo('template_directory'); ?>/image/eixo-misto.jpg" alt="Eixo misto:" title="Eixo misto">
				<span>Eixo misto</span>
			</li><?php endif; ?><?php if(get_post_meta(get_the_ID(), 'prd_radio_eixo', true) == 'tracao'): ?>
			<li class="axis">
				<img src="<?php bloginfo('template_directory'); ?>/image/eixo-tracao.jpg" alt="Eixo tração:" title="Eixo tração">
				<span>Eixo tração</span>
			</li><?php endif; ?><?php endif; ?><?php if(get_post_meta(get_the_ID(), 'prd_radio_pneu', true)):if(get_post_meta(get_the_ID(), 'prd_radio_pneu', true) == 'radial'): ?>
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/image/radial.png" alt="Radial:" title="Radial">
				<span>Pneu radial</span>
			</li><?php endif;if(get_post_meta(get_the_ID(), 'prd_radio_pneu', true) == 'diagonal'): ?>
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/image/diagonal.png" alt="Diagonal:" title="Diagonal">
				<span>Pneu diagonal</span>
			</li><?php endif;endif; ?>
		</ul>
		<ul class="aplications">
			<h6>Aplicações</h6><?php if(get_post_meta(get_the_ID(), 'prd_radio_ind', true) && get_post_meta(get_the_ID(), 'prd_radio_ind', true) != 'naoaplicavel_ind'): ?>
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/image/industrial.png" alt="Industrial:" title="Industrial">
				<span><?php showUse(get_post_meta(get_the_ID(), 'prd_radio_ind', true)); ?></span>
			</li><?php endif;if(get_post_meta(get_the_ID(), 'prd_radio_urb', true) && get_post_meta(get_the_ID(), 'prd_radio_urb', true) != 'naoaplicavel_urb'): ?>
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/image/urbano.png" alt="Urbano:" title="Urbano">
				<span><?php showUse(get_post_meta(get_the_ID(), 'prd_radio_urb', true)); ?></span>
			</li><?php endif;if(get_post_meta(get_the_ID(), 'prd_radio_mix', true) && get_post_meta(get_the_ID(), 'prd_radio_mix', true) != 'naoaplicavel_mix'): ?>
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/image/misto.png" alt="Misto:" title="Misto">
				<span><?php showUse(get_post_meta(get_the_ID(), 'prd_radio_mix', true)); ?></span>
			</li><?php endif;if(get_post_meta(get_the_ID(), 'prd_radio_off', true) && get_post_meta(get_the_ID(), 'prd_radio_off', true) != 'naoaplicavel_off'): ?>
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/image/foradeestrada.png" alt="Fora de estrada:" title="Fora de estrada">
				<span><?php showUse(get_post_meta(get_the_ID(), 'prd_radio_off', true)); ?></span>
			</li><?php endif;if(get_post_meta(get_the_ID(), 'prd_radio_pavc', true) && get_post_meta(get_the_ID(), 'prd_radio_pavc', true) != 'naoaplicavel_pavc'): ?>
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/image/pavimentadocurta.png" alt="Pavimentado de curta distância:" title="Pavimentado de curta distância">
				<span><?php showUse(get_post_meta(get_the_ID(), 'prd_radio_pavc', true)); ?></span>
			</li><?php endif;if(get_post_meta(get_the_ID(), 'prd_radio_pavl', true) && get_post_meta(get_the_ID(), 'prd_radio_pavl', true) != 'naoaplicavel_pavl'): ?>
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/image/pavimentadolonga.png" alt="Pavimentado de longa distância:" title="Pavimentado de longa distância">
				<span><?php showUse(get_post_meta(get_the_ID(), 'prd_radio_pavl', true)); ?></span>
			</li><?php endif; ?>
		</ul>
	</div>
</section>
<?php endwhile; ?>

<?php get_footer(); ?>