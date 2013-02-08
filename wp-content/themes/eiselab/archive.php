<?php

get_header();
?>

<?php get_template_part('header', 'banner') ?>

<section class="boxContent">
	<section class="boxLeft">
		<h1>Cursos</h1>
			<ul id="curso">
				<?php get_template_part("loop","curso")?>
			</ul>
			</section>
	<section class="sidebar">
		<?php get_sidebar(); ?>
	</section>
</section>

<?php get_footer() ?>