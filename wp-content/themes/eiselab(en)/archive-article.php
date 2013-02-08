<?php

get_header();
?>

<?php get_template_part('header', 'banner') ?>

<section class="boxContent">
	<section class="boxLeft">
		
		<h1>Blog</h1>
			<p><?php the_page_description(); ?></p>
			<ul id="blog">
				<?php get_template_part("loop","article")?>
			</ul>
			</section>
	<section class="sidebar">
		<?php get_sidebar(); ?>
	</section>
</section>

<?php get_footer() ?>