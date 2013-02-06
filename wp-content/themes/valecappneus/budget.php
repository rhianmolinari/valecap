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
		<div class="grid_6 omega alpha">
			<label for="nome" class="grid_2 alpha">Nome</label>
			<input type="text" value="" id="nome" tabindex="1" />
		</div>
		
		<div class="grid_6 omega alpha">
			<label for="email" class="grid_2 alpha">E-mail</label>
			<input type="email" value="" id="email" tabindex="2" />
		</div>

		<div class="grid_6 omega alpha">
			<label for="tel" class="grid_2 alpha">Telefone</label>
			<input type="tel" value="" id="tel" tabindex="3" />
		</div>

		<div class="grid_6 omega alpha">
			<label for="cidade" class="grid_2 alpha">Cidade</label>
			<input type="text" value="" id="cidade" placeholder="Lorena" tabindex="4" />


			<label for="uf" class="grid_1">Estado</label>
			<input type="text" value="" id="uf" placeholder="SP" tabindex="5" />
		</div>

		<div class="grid_6 omega alpha">
			<label for="cep" class="grid_2 alpha">CEP</label>
			<input type="number" value="" id="cep" tabindex="6" />
		</div>

		<div class="grid_6 omega alpha">
			<label for="adress" class="grid_2 alpha">Endereço</label>
			<input type="text" value="" id="adress" placeholder="Rua Rio Grande do Norte, 515, Industrial" tabindex="7" />
		</div>

		<div class="grid_6 omega alpha">
			<label for="cpf-cnpj" class="grid_2 alpha">CNPJ ou CPF</label>
			<input type="number" value="" id="cpf-cnpj" tabindex="8" />
		</div>
	</div>
	
	<div class="grid_6 omega">
		<div class="grid_6 omega alpha">
			<label for="categoria-pneu" class="grid_2 alpha">Categoria do Pneu</label>
			<select name="categoria" tabindex="9">
				<option value="">Selecione uma categoria</option>
				<option value="">Offroad</option>
				<option value="">Carga</option>
				<option value="">Passeio / Utilitário</option>
			</select>
		</div>

		<div class="grid_6 omega alpha">
			<label for="desenho-pneu" class="grid_2 alpha">Desenho do Pneu</label>
			<select name="desenho" tabindex="10">
				<option value="">Selecione o desenho</option>
				<option value="">DD-DV</option>
				<option value="">VTR-ECO</option>
				<option value="">Eco-TTR</option>
			</select>
		</div>

		<div class="grid_6 omega alpha">
			<label for="medida-pneu" class="grid_2 alpha">Medida do Pneu</label>
			<select name="medida" tabindex="11">
				<option value="">Selecione a medida</option>
				<option value="">175</option>
				<option value="">155</option>
				<option value="">165</option>
				<option value="">220</option>
			</select>
		</div>

		<div class="grid_6 omega alpha">
			<label for="mensagem" class="grid_2 alpha">Mensagem</label>
			<textarea id="mensagem" tabindex="12"></textarea>
		</div>
		<button type="submit" class="grid_4 omega alpha push_2" tabindex="13">Orçar</button>
	</div>
	</fieldset>
</form>
</section>


<?php get_footer(); ?>