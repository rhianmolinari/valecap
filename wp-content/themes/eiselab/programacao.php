<?php

//Template Name: Programacao

$courses = get_posts(array('post_type' => 'page', 'pagename' => 'modulos')) ;
$campfires = get_posts(array('post_type' => 'page', 'pagename' => 'campfires'));
$courses = $courses[0] ; $campfires = $campfires[0] ;
get_header();
?>

<?php get_template_part('header', 'banner') ?>

<section class="boxContent">
	<section class="boxLeft">
		<h1><?php the_title(); ?></h1>
		<?php while (have_posts()) : the_post(); ?>
				<article><?php the_content(); ?></article>
			<?php endwhile; ?>
		
		<ul id="programacao">
			<li>
				<a href="<?php bloginfo('url') ?>/campfires">
					<img src="<?php bloginfo('template_url')?>/images/icon-campfires.jpg" alt=""/>
					<h2><?php echo $campfires->post_title; ?></h2>
					<p>
						<?php echo $campfires->post_content ; ?>
					</p>
					<span>
						<span class='arrowRight'></span>
						Inscrições abertas
					</span>
				</a>
			</li>

			<li>
				<a href="<?php bloginfo('url') ?>/modulos">
					<img src="<?php bloginfo('template_url')?>/images/icon-courses.jpg" alt=""/>
					<h2><?php echo $courses->post_title ?></h2>
					<p>
						<?php echo $courses->post_content ; ?>
					</p>
					<span>
						<span class='arrowRight'></span>
						Veja mais
					</span>
				</a>
			</li>
		</ul>
</section>
	
	<!-- line -->
<section class="sidebar">		
	<?php get_sidebar(); ?>
</section>
</section>
		
<?php get_footer() ?>
