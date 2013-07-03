<?php
/**
 * Template Name: Contato
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */

get_header(); ?>

<section class="grid_6">
<h1><?php the_title(); ?></h1>

<form class="formcontact grid_6 omega alpha" id="form-contato" role="" method="post">
	<fieldset>
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
		<label for="loja" class="grid_2 alpha">Refêrente a</label>
		<select name="loja" tabindex="4">
			<option value="">Selecione a loja</option>
			<option value="valecap@valecap.com.br|Valecap Recauchutagem">Valecap Recauchutagem</option>
			<option value="truckservice@valecap.com.br|Valecap Truck Service">Valecap Truck Service</option>
		</select>
	</div>
	
	<div class="grid_6 omega alpha">
	<label for="mensagem" class="grid_2 alpha">Mensagem</label>
        <textarea id="mensagem" name="mensagem" tabindex="5"></textarea>
	</div>
	
	<button class="grid_4 omega alpha push_2" tabindex="6">Enviar</button>

	<div class="error_box grid_4 push_2 omega alpha"></div>
	<div class="success_box grid_4 push_2 omega alpha">Sua mensagem foi enviada com sucesso!</div>
	</fieldset>
</form>
</section>

<aside class="grid_4 push_2 omega">
<h5>Endereços</h5>
<address>
	<ul class="box">
		<li>
			<h3>Valecap Recauchutagem</h3>
			<p>Rua Rio Grande do Norte Nº 515<br/>
			Cidade Industrial, Lorena – SP<br/>
			CEP: 12609-240<br/>
			Telefone: (12) 3153-5150<br/>
			Nextel: 82*22619</p>
			<a href="mailto:valecap@valecap.com.br">valecap@valecap.com.br</a>
			<a class="mapa" href="http://goo.gl/maps/SCZfd">Exibir mapa</a>
		</li>
		<li>
			<h3>Valecap Truck Service</h3>
			<p>Avenida Dom Pedro I Nº 7019<br/>
			Bairro Estoril (Avenida Marginal da LG), Taubaté – SP<br/>
			Às margens da rodovia Presidente Dutra sentido SP-RJ km 116,5<br/>
			CEP: 12092-000<br/>
			Telefone: (12) 3682-1531<br/>
			Nextel: 90*2907</p>
			<a href="mailto:truckservice@valecap.com.br">truckservice@valecap.com.br</a>
			<a class="mapa" href="http://goo.gl/maps/UCyMf">Exibir mapa</a>
		</li>
	</ul>
</address>
</aside>

<?php get_footer(); ?>