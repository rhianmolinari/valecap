<?php
$types_to_get = array('transporte-e-estadia', 'para-comer-e-beber', 'compras', 'utilidades') ;
$eise = get_posts(array('post_type' => 'location', 'name' => 'EISE')) ; $eise = new EISE\Location($eise[0]) ; 
$location_types = array();
foreach ($types_to_get as $type) {
	$location_types[] = get_term_by('slug', $type, 'location_types') ;
}

get_header();
?>

<div id="wrapMaps">
	<section class="boxMapsInner">
		<div class="wrapMaps" id='map'>
			
		</div>		
		<div class="endereco">
			<div class="locations">
				<div class="map-location" data-jmapping='<?php echo json_encode(array('id' => $eise->ID, 'category' => 'eise', 
				'point' => array('lat' => $eise->coordinates['latitude'], 'lng' => $eise->coordinates['longitude']))) ?>'>
					<h2><a href='#' class='map-link'>Onde nós estamos?</a></h2>
					<div class="info-box">
						<h3>EISE</h3>
						<div><?php echo $eise->address ?></div>
					</div>
				</div>
			</div>
			
			<p>
				<strong>Endereço</strong> <?php echo $eise->address ; ?>
			</p>
			<p>
				<?php echo $eise->post_content ; ?>
			</p>
		</div>
	</section>
	
</div>
<section id="tabsContent" class="boxContent">
	<section class="boxLeft">
		<p><?php the_content(); ?></p>
		<div id="tabsLocation">
			<ul id="tips">
				<?php foreach ($location_types as $i => $location): ?> <?php //Loop das tabs ?>
					<?php $class = $i == 0 ? 'location-tabs selected' : 'location-tabs' ?>
					<li>  
						<a <?php html_attributes(array('href' => '#'. $location->slug, 'id' => $location->slug .'-tab', 'class' => $class)) ?>>
							<?php echo $location->name ?>
						</a>
					</li>
				<?php endforeach ?>
			</ul>
			<?php //Loop da box de cada categoria ?>
			<?php foreach ($location_types as $i => $location): $sub_locations = get_term_children($location->term_id, 'location_types') ; 
				$hidden = $i != 0 ? "style='display:none;'" : '' ;?>
				<div id="<?php echo $location->slug ?>" class='type-box' <?php echo $hidden ?>>
					<h1><?php echo $location->name ?></h1>
					<ul class="sub-cats">
						<?php //Loop da <li><ul> de cada subcategoria ?>
						<?php foreach ($sub_locations as $sub_location): $sub_location = get_term_by('id', $sub_location, 'location_types') ; ?>
							<li class="wrap-sub">
								<h3><?php echo $sub_location->name ?></h3>
								<ul class='locations'>
									<?php //Loop de cada localização ?>
									<?php foreach (get_posts(array('numberposts' => -1, 'post_type' => 'location', 'location_types' => $sub_location->slug)) as $i => $post): 
									$item = new Eise\Location($post) ; setup_postdata($post);
									?>
										<li class='map-location' data-jmapping='<?php echo json_encode(array( 'id' => $item->ID, 'category' => $location->slug,
											'point' => array('lat' => $item->coordinates['latitude'], 'lng' => $item->coordinates['longitude']) )); ?>'>
											<a href="#" class="map-link">	
												<?php the_title() ?>
											</a>
											<div class="info-box" style='display: none;'> <?php //Tooltip ?>
												<h3><?php the_title() ?></h3>
												<?php the_('address') ?>
												<?php the_content() ?>
											</div>
											
										</li>
									<?php endforeach ?>
								</ul>
							</li>							
						<?php endforeach ?>
					</ul>
				</div>
				
			<?php endforeach ?>
		</div>
		
	</section>
	<section class="sidebar">
		<?php Eise\Presenters\Mailing::contact() ?>
		<span class="clear"></span>
	</section>
</section>

<?php get_footer() ?>