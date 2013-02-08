<?php

get_header();
?>

<?php get_template_part('header', 'banner') ?>

<section class="boxContent">
	<section class="boxLeft">
		<h1>Service thinkers</h1>
		<p><?php the_page_description() ?></p>
		<ul id="thinkersList">
			<?php get_template_part("loop","thinkers")?>
		</ul>
		</section>
	
	<!-- line -->
	
	<section class="sidebar">		
		<?php get_sidebar(); ?>
	</section>
</section>
<?php

get_footer();
?>