<?php
/**
 * Template Name: Orçamento
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */

get_header(); ?>

<nav class="grid_12">
	<ol class="breadcrumb"><?php the_breadcrumb(); ?></ol>
</nav>

<section class="grid_12">
<h1><?php the_title(); ?></h1>

<form class="budgetform" role="" method="" action="" >
	<fieldset>
	<div class="grid_6 alpha">
		<div>
			<label for="nome" class="grid_2 alpha">Nome</label>
			<input type="text" value="" id="nome" />
		</div>
		
		<div>
		<label for="email" class="grid_2 alpha">E-mail</label>
		<input type="email" value="" id="email" />
		</div>

		<div>
		<label for="tel" class="grid_2 alpha">Telefone</label>
		<input type="tel" value="" id="tel" />
		</div>

		<div>
		<label for="uf" class="grid_2 alpha">Estado</label>
		<select id="uf">
			<option>Selecione o estado</option>
			<option>São Paulo</option>
			<option>Rio de janeiro</option>
		</select>
		</div>

		<div>
		<label for="cidade" class="grid_2 alpha">Cidade</label>
		<select id="cidade">
			<option>Selecione a cidade</option>
			<option>Lorena</option>
			<option>Guaratinguetá</option>
		</select>
		</div>

		<div>
		<label for="cep" class="grid_2 alpha">CEP</label>
		<input type="number" value="" id="cep" />
		</div>

		<div>
		<label for="adress" class="grid_2 alpha">Endereço</label>
		<input type="text" value="" id="adress" placeholder="Avenida Paulista, 1050"/>
		</div>

		<div>
		<label for="cpf-cnpj" class="grid_2 alpha">CNPJ ou CPF</label>
		<input type="number" value="" id="cpf-cnpj" />
		</div>
	</div>
	<div class="grid_6 omega">
		<div>
		<label for="categoria-pneu" class="grid_2 alpha">Categoria do Pneu</label>
		<select id="categoria-pneu">
			<option>Selecione a categoria do pneu</option>
			<option>Agrícola</option>
			<option>Off road</option>
		</select>
		</div>

		<div>
		<label for="desenho-pneu" class="grid_2 alpha">Desenho do Pneu</label>
		<select id="desenho-pneu">
			<option>Selecione o desenho do pneu</option>
			<option>VT-DD</option>
			<option>DD-DV</option>
		</select>
		</div>

		<div>
		<label for="medida-pneu" class="grid_2 alpha">Medida do Pneu</label>
		<select id="medida-pneu">
			<option>Selecione a medida do pneu</option>
			<option>195</option>
			<option>155</option>
		</select>
		</div>

		<div>
		<label for="mensagem" class="grid_2 alpha">Mensagem</label>
		<textarea id="mensagem"></textarea>
		</div>
		<button type="submit" class="grid_4 omega alpha push_2">Orçar</button>
	</div>
	</fieldset>
</form>
</section>


<?php get_footer(); ?>