<div class='thinkers-fieldgroup' id='favorites' style="display:none;">
	<table>
		<tbody>
			<tr>
				<td>
					<h3>Meu top 3 Filmes</h3>
					<span class='description'>Nome do filme - nome do diretor</span>
				</td>
				<td>
					<h3>Meu top 3 Livros</h3>
					<span class='description'>Nome do livro - nome do autor</span>
					
				</td>
			</tr>
			<tr>
				<td>
					<ol>
						<?php for ($i=0; $i < 3; $i++) { ?>
							<li>
								<input <?php html_attributes(array('type' => 'text', 'name' => "thinker[favorite_movies][$i]",
									'id' => "thinker-favorites-movies-$i", 'size' => 35, 'value' => $thinker->favorite_movies[$i]
								 )); ?>>
							</li>
						<?php } ?>
					</ol>
				</td>
				<td>
					<ol>
						<?php for ($i=0; $i < 3; $i++) { ?>
							<li>
								<input <?php html_attributes(array('type' => 'text', 'name' => "thinker[favorite_books][$i]",
									'id' => "thinker-favorites-books-$i", 'size' => 35, 'value' => $thinker->favorite_books[$i]
								 )); ?>>
							</li>
						<?php } ?>
					</ol>					
				</td>
			</tr>
		</tbody>
	</table>
</div>