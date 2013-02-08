<?php global $post;  ?>
<table id='highlights-options' class='form-table'>
	<tbody>
		<tr>
			<th>
				<?php label('Destaque?', 'is-highlight') ?>
			</th>
			<td>
				<input type="checkbox" name='is_highlight' id='is-highlight' <?php echo $highlighted ? 'checked' : '' ?>>				
			</td>
		</tr>
		<tr class='highlight-info' <?php echo $highlighted ? '' : " style='display: none;'" ?>>
			<th>
				<?php label('Posição', 'highlight-position') ?>
			</th>
			<td>
				<select name="highlight[position]" id="highlight-position">
					<?php for ($i=1; $i <= 5; $i++) { $selected = '';
						if ($item = Eise\Highlight::is_filled($i)) {
							if($item->ID == $post->ID){
								$select_text = "$i (atual)" ;
								$selected = 'selected' ;
							} else {
								$select_text = "$i (ocupado)" ;
							}
						} else {
							$select_text = "$i" ; 
						}
						echo "<option value='$i' $selected > $select_text </option>" ;
					} ?>
				</select>			
			</td>
		</tr>
		<tr class="highlight-info" <?php echo $highlighted ? '' : " style='display: none;'" ?>>
			<th>
				<?php label('Texto', 'highlight-text') ?>
			</th>
			<td>
				<textarea id="highlight-text" name="highlight[text]"><?php echo get_post_meta($post->ID, 'quote', true) ?></textarea>
			</td>
		</tr>
	</tbody>
</table>