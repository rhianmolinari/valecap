<div class='thinkers-fieldgroup' id='profile' style="display:none;">
	<table class='form-table'>
		<tbody>
			<tr>
				<th>
					<label for="thinker[profile][selftweet]"> Self-tweet </label>
					<span class='description'>(Você em 140 caracteres)</span>
				</th>
				<td>
					<textarea id="thinker-profile-selftweet" class='regular-text' name="thinker[selftweet]" cols='70' rows='2'><?php echo $thinker->selftweet ?></textarea>
				</td>
			</tr>
			<tr>
				<th>
					<label for="thinker[profile][justification]"> Porque é possível mudar o mundo? </label>
				</th>
				<td>
					<textarea id="thinker-profile-justification" class='regular-text' name="thinker[justification]" cols='70' rows='4'><?php echo $thinker->justification ?></textarea>					
				</td>
			</tr>
			<tr>
				<th>
					<label for="thinker[profile][experience]"> Minha história profissional</label>
				</th>
				<td>
					<textarea id="thinker-profile-experience" class='regular-text' name="thinker[experience]" cols='70' rows='4'><?php echo $thinker->experience ?></textarea>
				</td>
			</tr>
		</tbody>
	</table>
</div>