<?php
/**
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */
?>


<aside class="grid_4">
	<div class="widget-container">
		<h1>Categorias</h1>
		<ul class="box widget">
			<li><a href="#">Pneus</a></li>
			<li><a href="#">Borrachas</a></li>
			<li><a href="#">Informativo</a></li>
			<li><a href="#">Rally</a></li>
			<li><a href="#">Eventos</a></li>
		</ul>
	</div>
</aside>

<aside class="grid_4">
	<div class="box widget-container widget-spot">
		<div class="fb-like-box" data-href="http://www.facebook.com/valecappneus" data-width="300" data-show-faces="true" data-stream="false" data-border-color="#FFFFFF" data-header="false"></div>
	</div>
</aside>

<aside class="grid_4">
	<div class="widget-container">
		<h1>Histórico</h1>
		<select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
			<option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
			<?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
		</select>
	</div>
	<div class="widget-container">
		<h1>Meta</h1>
		<ul class="box widget">
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<?php wp_meta(); ?>
		</ul>
	</div>
</aside>
