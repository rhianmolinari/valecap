<table class='form-table'>
	<tbody>
		<tr>
			<th>
				Endereço
			</th>
			<td>
				<input type="text" id="location-address" name="location[address]" size='110' value="<?php echo $location->address ?>" >
				<input type="button" id="location-address-load" class="button-secondary" value="Carregar endereço">
			</td>
		</tr>
		<tr>
			<td>
				<span class="description">
					Comece a inserir o endereço para receber sugestões. Utilize as sugestões e posicione o marcador no mapa na posição correta. <br/>
					O endereço digitado também será exibido ao usuário - certifique-se que ele está sucinto e objetivo.
				</span>
			</td>
			<td>
				<div id="location-map"></div>
				<input type="hidden" id="location-latitude" name="location[coordinates][latitude]" value="<?php echo $location->coordinates['latitude'] ?>">
				<input type="hidden" id="location-longitude" name="location[coordinates][longitude]" value="<?php echo $location->coordinates['longitude'] ?>">
			</td>
		</tr>
	</tbody>
</table>