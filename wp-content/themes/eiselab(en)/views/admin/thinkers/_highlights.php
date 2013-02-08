<div class='thinkers-fieldgroup' id='highlights' style="display:none;">
	<h3>Pontos altos em minha vida</h3>
	<span class="description">liste brevemente - sem nenhuma ordem em particular, cinco pontos altos de sua vida.</span>
	<ul>
		<?php for ($i=0; $i < 5; $i++) { ?>
			<li>
				<textarea <?php html_attributes(array('type' => 'text', 'name' => "thinker[highlights][$i]",
					'id' => "thinker-highlights-$i", 'cols' => 70, 'rows' => 2
				 )); ?>><?php echo $thinker->highlights[$i] ?></textarea>
			</li>
		<?php } ?>
	</ul>

</div>