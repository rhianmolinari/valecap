<?php
/**
 * Template Name: Orçamento
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */

get_header(); ?>

<section class="grid_12">
<h1><?php the_title(); ?></h1>

<form class="budgetform" id="budgetform" role="" method="post" action="" >
	<fieldset>
	<div class="grid_6 alpha">
		<div class="grid_6 omega alpha">
			<label for="nome" class="grid_2 alpha">Nome</label>
			<input type="text" value="" id="nome" name="nome" tabindex="1" />
		</div>
		
		<div class="grid_6 omega alpha">
			<label for="email" class="grid_2 alpha">E-mail</label>
			<input type="text" value="" id="email" name="email" tabindex="2" />
		</div>

		<div class="grid_6 omega alpha">
			<label for="tel" class="grid_2 alpha">Telefone</label>
			<input type="tel" value="" id="tel" name="tel" tabindex="3" />
		</div>

		<div class="grid_6 omega alpha">
			<label for="cidade" class="grid_2 alpha">Cidade</label>
			<input type="text" value="" id="cidade" name="cidade" placeholder="Lorena" tabindex="4" />

			<label for="uf" class="grid_1">Estado</label>
			<input type="text" value="" id="uf" placeholder="SP" maxlength="2" name="uf" tabindex="5" />
		</div>

		<div class="grid_6 omega alpha">
			<label for="cep" class="grid_2 alpha">CEP</label>
			<input type="text" value="" id="cep" name="cep" tabindex="6" />
		</div>

		<div class="grid_6 omega alpha">
			<label for="address" class="grid_2 alpha">Endereço</label>
			<input type="text" value="" id="address" name="address" placeholder="Rua Rio Grande do Norte, 515, Industrial" tabindex="7" />
		</div>

		<div class="grid_6 omega alpha">
			<label for="cpf-cnpj" class="grid_2 alpha">CNPJ ou CPF</label>
			<input type="text" value="" id="cpf-cnpj" maxlength="18" name="cpf-cnpj" tabindex="8" />
		</div>
	</div>
	
	<div class="grid_6 omega">
		<div class="grid_6 omega alpha">
			<label for="categoria" class="grid_2 alpha">Categoria do Pneu</label>
			<select name="categoria" id="categoria" tabindex="9">
				<option value="">Selecione uma categoria</option>
				<?php $categories = get_categories(array('type' => 'produto', 'orderby' => 'slug','order' => 'ASC', 'taxonomy' => 'tipo_produto', 'hide_empty' => 1)); ?>
				<?php foreach($categories as $category): ?>
				<option value="<?php echo $category->slug . "|" . $category->cat_name; ?>"><?php echo $category->cat_name; ?></option>
				<?php endforeach; ?>
			</select>
		</div>

		<div class="grid_6 omega alpha">
			<label for="desenho" class="grid_2 alpha">Desenho do Pneu</label>
			<select name="desenho" id="desenho" tabindex="10">
				<option value="">Selecione o desenho</option>
			</select>
		</div>

		<div class="grid_6 omega alpha">
			<label for="medida" class="grid_2 alpha">Medida do Pneu</label>
			<select name="medida" id="medida" tabindex="11">
				<option value="">Selecione a medida</option>
			</select>
		</div>

		<div class="grid_6 omega alpha">
			<label for="mensagem" class="grid_2 alpha">Mensagem</label>
			<textarea id="mensagem" name="mensagem" tabindex="12"></textarea>
		</div>
		<button class="grid_4 omega alpha push_2" tabindex="13">Orçar</button>
		<div class="error_box grid_4 push_2 omega alpha"></div>
		<div class="success_box grid_4 push_2 omega alpha">Sua mensagem foi enviada com sucesso!</div>
	</div>
	</fieldset>
</form>
</section>


<?php get_footer(); ?>