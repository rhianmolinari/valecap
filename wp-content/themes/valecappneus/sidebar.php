<?php
/**
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */
?>


<aside class="grid_4">
	<!-- Widget 1 -->
	<div class="widget-container">
		<h5>Mais recentes</h5>
		<ul class="box widget">
			<?php 
			$args = array( 'numberposts' => '5' );
			$recent_posts = wp_get_recent_posts();
			foreach( $recent_posts as $recent ){
			echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';} ?>
		</ul>
	</div>
	<div class="widget-container">
		<h5>Categorias</h5>
		<ul class="box widget">
			<li><a href="#">Pneus</a></li>
			<li><a href="#">Borrachas</a></li>
			<li><a href="#">Informativo</a></li>
			<li><a href="#">Rally</a></li>
			<li><a href="#">Eventos</a></li>
		</ul>
	</div>

	<!-- Widget Fixo !-->
	<div class="box widget-container widget-spot">
		<!-- Script Facebook !-->
		<div id="fb-root"></div>
		<script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/all.js#xfbml=1"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>

		<div class="fb-like-box" data-href="http://www.facebook.com/valecappneus" data-width="300" data-show-faces="true" data-stream="false" data-border-color="#FFFFFF" data-header="false"></div>
	</div>


	<!-- Widget 2 -->
	<div class="widget-container">
		<h5>Histórico</h5>
		<select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
			<option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
			<?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
		</select>
	</div>
	<div class="widget-container">
		<h5>Meta</h5>
		<ul class="box widget">
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<?php wp_meta(); ?>
		</ul>
	</div>
</aside>
