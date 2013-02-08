<div class='thinkers-fieldgroup' id='info'>
		<table class='form-table'>
			<tbody>
				<tr>
					<th>
						<label for="thinker[info][name]"> Nome </label>
					</th>
					<td>
						<input type="text" id="thinker-info-name" class='regular-text' name="thinker[name]" size='30' value='<?php echo $thinker->name; ?>'>
					</td>
				</tr>
				<tr>
					<th>
						<label for="thinker[info][email]"> Email </label>
					</th>
					<td>
						<input type="text" id="thinker-info-email" class='regular-text' name="thinker[email]" size='30' value='<?php echo $thinker->email; ?>'>
					</td>
				</tr>
				<tr>
					<th>
						<label for="thinker[avatar]"> Avatar </label>
					</th>
					<td id="thinker-info-avatar">
						<span class='description'>Selecione o avatar utilizando a funcionalidade de <br/>
							"Imagem destacada", como faria com um post normal.</span>
					</td>
				</tr>
			</tbody>
		</table> <br/>
		<h3>Redes sociais</h3>
		<span class='description'>insira a URL de seus perfis nas seguintes redes: (eg: www.twitter.com/usuario)</span>
		<table class='form-table'>
			<tbody>
				<tr>
					<th>
						<label for="thinker[twitter_url]"> Twitter </label>
					</th>
					<td>
						<input type="text" id="thinker-info-social-twitter" class='regular-text' name="thinker[twitter_url]" size='30' value='<?php echo $thinker->twitter_url; ?>'>
					</td>
				</tr>
				<tr>
					<th>
						<label for="thinker[linkedin]"> LinkedIn </label>
					</th>
					<td>
						<input type="text" id="thinker-info-social-linkedin" class='regular-text' name="thinker[linkedin_url]" size='30' value='<?php echo $thinker->linkedin_url; ?>'>
					</td>
				</tr>
				<tr>
					<th>
						<label for="thinker[facebook]"> Facebook </label>
					</th>
					<td>
						<input type="text" id="thinker-info-social-facebook" class='regular-text' name="thinker[facebook_url]" size='30' value='<?php echo $thinker->facebook_url; ?>'>
					</td>
				</tr>
			</tbody>
		</table>
	</div>