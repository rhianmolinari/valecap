<?php
/**
 * Template Name: Trabalhe conosco
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<article class="grid_12">
	<section class="grid_8 alpha">
		<h1><?php the_title(); ?></h1>
		<div class="entry-content clearfix"><?php the_content(); ?></div>
	</section>

	<form id="work-with-us" class="grid_4 omega upload">
		<fieldset>
			<h5>Envie seu currículo</h5>
			<div class="cv">
				<input type="file" class="input_file" accept="application/pdf" name="datafile" onchange="document.getElementById('extension').value = this.value.replace('C:\\fakepath\\', '');" />
				<div class="fake">
					<input type="text" id="extension" placeholder="Envie do seu currículo em PDF" />
					<span class="button"><span>Up</span></span>
				</div>
			</div>
			<button id="send-curriculum" class="grid_4 omega alpha" onclick="fileUpload('work-with-us','http://www.valecap.com.br/wp-content/themes/valecap/includes/send-email-curriculum.php', 'cv-message');return false;">Enviar</button>
			<div id="msg-error" class="error_box grid_4 omega alpha"></div>
			<div id="msg-success" class="success_box grid_4 omega alpha"></div>
			<div id="msg-alert" class="alert_box grid_4 omega alpha"></div>
		</fieldset>
	</form>
</article>
<?php endwhile; ?>

<?php get_footer(); ?>