<table class="form-table">
	<tr>
		<th>
			<?php label('Data', 'campfire-start-date') ?>		
		</th>
		<td>
			<input id="campfire-start-date" type="text" class="inlineDatePicker" name="campfire[start_date]" size="10" value="<?php echo $campfire->start_date ?>">
		</td>
	</tr>
	<tr>
		<th>
			<?php label('Horário', 'campfire-start-time') ?>
			<?php description('em formato de 24h') ?>
		</th>
		<td>
			<input id="campfire-start-time" type="text" name="campfire[start_time]" size="3" value="<?php echo $campfire->start_time ?>">
		</td>
	</tr>
	<tr>
		<th>
			<?php label('Duração', 'campfire-duration') ?>
			<?php description('em horas') ?>
		</th>
		<td>
			<input id="campfire-duration" type="text" name="campfire[duration]" size="3" value="<?php echo $campfire->duration ?>">
		</td>
	</tr>
	<tr>
		<th>
			<?php label('Vagas', 'campfire-signup-spaces') ?>		
		</th>
		<td>
			<input id="campfire-signup-spaces" type="text" name="campfire[signup_spaces]" size="3" value="<?php echo $campfire->signup_spaces ?>">
		</td>
	</tr>
	<tr>
		<th>
			<?php label('Data de fechamento <br/> das inscrições', 'campfire-signup-end-date') ?>		
		</th>
		<td>
			<input id="campfire-signup-end-date" type="text" class='inlineDatePicker' name="campfire[signup_end_date]" size="10" value="<?php echo $campfire->signup_end_date ?>">
		</td>
	</tr>
</table>
