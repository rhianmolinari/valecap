<?php

get_header();
?>

<?php get_template_part('header', 'banner') ?>

<section class="boxContent">
	<section class="boxLeft">
		<h1>Campfires</h1>
		<p><?php the_page_description(); ?></p>
		<?php get_template_part("loop", "campfire")?>		
	</section>
	
	<!-- line -->
	
	<section class="sidebar">		
		<?php get_template_part('sidebar','campfire') ?>
		<?php get_sidebar(); ?>
		
	</section>
</section>
		
<?php get_footer() ?>