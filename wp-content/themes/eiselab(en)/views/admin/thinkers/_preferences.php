<?php $value = $thinker->$field ?>
<div class='thinkers-fieldgroup' id='<?php echo $field ?>' style="display:none;">
	<h3><?php echo $name ?></h3>
	<span class='description'><?php echo $description ?></span>
	<table>
		<tr>
			<td>
				<input <?php html_attributes(array('name' => "thinker[$field][title]", 'id' => "thinker-preferences-".$field."-text", 'class' => 'regular-text',
					'value' => $value['title'], 'size' => 40)) ?>>
			</td>
		</tr>
		<tr>
			<td id='thinker-preferences-<?php echo $field ?>-image' class='thinker-preferences-image'>
				<div style="display:block;">
					<?php if (isset($value) && ! empty($value['image'])){ ?>
						<img <?php html_attributes(array('src' => $value['image'])) ?>>
					<?php } else { ?>
						<input type="button" value="Selecionar imagem" class='thinker-preferences-button' id="thinker-preferences-<?php echo $field ?>-button">
					<?php } ?>
					
				</div>
				<input type='hidden' name='thinker[<?php echo $field ?>][image]' id='thinker-preferences-<?php echo $field ?>-image-url' class='regular-text' value="<?php echo $value['image'] ?>">				
			</td>
			
		</tr>
		<tr><td>
				<textarea class='regular-text' name="thinker[<?php echo $field ?>][text]" rows='7' cols='70'><?php echo $value['text'] ?></textarea>	<br/>
				
			</td></tr>
	</table>
</div>