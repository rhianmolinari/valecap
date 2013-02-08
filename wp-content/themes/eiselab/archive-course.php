<?php get_header(); ?>

<?php get_template_part('header', 'banner') ?>

<section class="boxContent">
	<section class="boxLeft">
		<h1>Módulos</h1>
			<p><?php the_page_description() ?></p>
			<ul id="course">
				<?php get_template_part("loop", "courses")?>
			</ul>
			</section>
	<section class="sidebar">
		<?php get_template_part("sidebar", "course")?>
		<?php get_sidebar(); ?>
	</section>
</section>

<?php get_footer() ?>
