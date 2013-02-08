<div id="thinkers-nav-tabs" class="thinkers-nav" style="display: none;">
	<ul class="clearfix">
		<?php $tabs = array(
			'info' => 'Geral', 'profile' => 'Perfil', 'likes' => 'Curte', 
			'dislikes' => 'Não Curte', 'admires' => 'Admira', 
			'prides' => 'Se orgulha',  'favorites' => 'Favoritos',
			'highlights' => 'Pontos Altos'  ) ;
		foreach ($tabs as $name => $label) {
			$class = $name == 'info' ? 'current' : '' ; ?>
			<li <?php echo $class ?>>
				<a <?php html_attributes(array('href' => "#$name", 'id' => $name."-tab", 'class' => $class)) ?> ><?php echo $label ?></a>
			</li>
		<?php } ?>
	</ul>
</div>