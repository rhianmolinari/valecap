<?php
$preferences = array('likes', 'dislikes', 'admires', 'prides');
get_header();
?>

<?php get_template_part('header', 'banner') ?>

<section class="boxContent">
	<section class="boxLeft">
		<article id="thinker" class="clearfix">
			<?php //if (have_posts()) : ?>
					
			<?php //while (have_posts()) : the_post(); ?>
					
				<header class="clearfix">
					<?php the_post_thumbnail("square"); ?>
					<hgroup>
						<h2 id=""><?php the_title();?></h2>
					</hgroup>
					<p id="shortQuotes">
						<span class="arrow"></span>
						<?php the_('selftweet'); ?>
					</p>
					<ul id="contactThinker">
						<li id="thinkerEmail">
							<a href="mailto:<?php the_('email');?>" title="Send a email to <?php the_title(); ?>">
								<img src="<?php bloginfo("template_url"); ?>/images/email.jpg">
							</a>
						</li>
						<li id="thinkerSocial">
							<a href="http://<?php the_('linkedin_url');?>" target="_blank" title="Linkedin of <?php the_title();?>">
								<img src="<?php bloginfo('template_url')?>/images/icon-linkedin-mini.png" alt="Linkedin" />
							</a>
							<a href="http://<?php the_('twitter_url');?>" target="_blank" title="Twitter of <?php the_title();?>">
								<img src="<?php bloginfo('template_url')?>/images/icon-twitter-mini.png" alt="Twitter" />
							</a>
							<a href="http://<?php the_('facebook_url');?>" target="_blank" title="Facebook of <?php the_title();?>">
								<img src="<?php bloginfo('template_url')?>/images/icon-facebook-mini.png" alt="Facebook" />
							</a>
							
						</li>
					</ul>
					<span class="clear"></span>
				</header>
				<ul id="particulars" class="clearfix"> 
					<li class="likes">
						<a href="#likes" title="saiba o que <?php the_title()?> gosta">
							<img src="<?php bloginfo('template_url')?>/images/icon-likes.jpg" alt="icone do que <?php the_title()?> gosta">
							<span>I enjoy</span>
						</a>						
					</li>
					<li class="dislikes">
						<a href="#dislikes" title="o que <?php the_title()?> não gosta">
							<img src="<?php bloginfo('template_url')?>/images/icon-dislikes.jpg" alt="icone do que <?php the_title()?> não gosta">
							<span>I don’t enjoy</span>
						</a>
						
												
					</li>
					<li class="admires">
						<a href="#admires" title="saiba o que <?php the_title()?> admira">
							<img src="<?php bloginfo('template_url')?>/images/icon-admires.jpg" alt="icone do que <?php the_title()?> admira">
							<span>I admire</span>
							
						</a>
					</li>
					<li class="pride">
						<a href="#prides" title="saiba o que <?php the_title()?> se orgulha">
							<img src="<?php bloginfo('template_url')?>/images/icon-prides.jpg" alt="icone do que <?php the_title()?> se orgulha">
							<span>I’m proud of</span>
							
							
						</a>
					</li>
						
				</ul>
				<ul id="rate">
					<li class="parent">
						<ul>
							<li class="rateTitle">My top-3 favorite films</li>
							<?php foreach (get_the('favorite_movies') as $favorite_movies): ?>
							<li>
							<?php echo $favorite_movies ?>
							</li>	
							<?php endforeach ?>
						</ul>
					</li>
					<li class="parent">
						<ul>
							<li class="rateTitle">My top-3 favorite books</li>
							<?php foreach (get_the('favorite_books') as $favorite_movies): ?>
							<li>
								<?php echo $favorite_movies ?>
							</li>	
							<?php endforeach ?>
						</ul>
					</li>
				</ul>
				<ul id="highlights">
					<li class="highTitle">Highlights in my journey:</li>
					<?php foreach (get_the('highlights') as $highlight): ?>
					<li>
						<?php echo $highlight ?>
					</li>	
					<?php endforeach ?>
				</ul>
				<span class="clear"></span>
				<div id="other">
					<h2>Why is it possible to change the world?</h2>
					<p>
						<?php the_('justification'); ?>
					</p>
					<h2>My professional history</h2>
					<p>
						<?php the_('experience'); ?>
					</p>
					
				</div>
				<?php //endwhile; ?>
					<?php // Navigation ?>
					
				<?php //else : ?>
					<?php // No Posts Found ?>
					
				<?php //endif; ?>
	</section>
<?php foreach ($preferences as $field) { ?>
	<div id="<?php echo $field ?>" class='traits'>
		<header>
			<img src="<?php echo get_bloginfo('template_url').'//images//icon-'.$field.'-box.jpg' ;?>" alt="">
			<div>
				<p>
					<?php the_($field.'-text') ?>
				</p>
			</div>
		</header>
		<div class="that">
			<div>
				<img src="<?php the_($field.'-image') ?>">
			</div>
		</div>
	</div>
<?php } ?>		
	
	<!-- line -->
	
	<section class="sidebar">		
		<?php get_template_part('sidebar', 'thinkers') ?>
		<div id="twitter-2">
			<?php echo do_shortcode('[twitter-widget username="'. $post_object->twitter_username() .'"]') ?>
		</div>
		
		
	</section>
</section>
<?php get_footer() ?>
