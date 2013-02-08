<div id='thinkers'>
	<?php 
		$presenter::render_partial('admin/thinkers/preferences', array(
			'field' => 'likes', 'name' => 'Curto', 'description' => 'texto e imagem de algo que você curte.', 'thinker' => $thinker)) ;

		$presenter::render_partial('admin/thinkers/preferences', array(
			'field' => 'dislikes', 'name' => 'Não curto', 'description' => 'texto e imagem de algo que você não curte.', 'thinker' => $thinker)) ;

		$presenter::render_partial('admin/thinkers/preferences', array(
			'field' => 'admires', 'name' => 'Admiro', 'description' => 'texto e imagem de algo que você admira.', 'thinker' => $thinker)) ;

		$presenter::render_partial('admin/thinkers/preferences', array(
			'field' => 'prides', 'name' => 'Me orgulho', 'description' => 'texto e imagem de algo que você se orgulha.', 'thinker' => $thinker)) ;
	
		$presenter::render_partial('admin/thinkers/info', array('thinker' => $thinker)) ;
		$presenter::render_partial('admin/thinkers/profile', array('thinker' => $thinker)) ;
		$presenter::render_partial('admin/thinkers/favorites', array('thinker' => $thinker)) ;
		$presenter::render_partial('admin/thinkers/highlights', array('thinker' => $thinker)) ;
	?>

</div>