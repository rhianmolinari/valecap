<?php
/**
 * Template Name: Contato
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */

get_header(); ?>

<nav class="grid_12">
	<ol class="breadcrumb"><?php the_breadcrumb(); ?></ol>
</nav>

<section class="grid_6">
<h1><?php the_title(); ?></h1>

<form class="formcontact grid_6 omega alpha" role="" method="" action="" >
	<fieldset>
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
		<label for="loja" class="grid_2 alpha">Refêrente a</label>
		<select name="loja" tabindex="4">
			<option value="">Selecione a loja</option>
			<option value="">Valecap Recauchutagem</option>
			<option value="">Valecap Truck Service</option>
		</select>
	</div>
	
	<div class="grid_6 omega alpha">
	<label for="mensagem" class="grid_2 alpha">Mensagem</label>
	<textarea id="mensagem" tabindex="5"></textarea>
	</div>

	<button type="submit" class="grid_4 omega alpha push_2" tabindex="6">Enviar</button>
	</fieldset>
</form>
</section>

<aside class="grid_4 push_2 omega">
<h5>Endereços</h5>
<address class="box">
	<ul>
		<li>
			<h3>Valecap Recauchutagem</h3>
			<p>Rua Rio Grande do Norte Nº 515<br>
			Cidade Industrial, Lorena – SP<br>
			CEP: 12609-240<br>
			Telefone: (12) 3153-5150<br>
			Nextel: 55*82*22619</p>
			<a href="#">valecap@valecap.com.br</a><br>
			<a class="mapa" href="#">Exibir mapa</a>
		</li>
		<li>
			<h3>Valecap Truck Service</h3>
			<p>Rua Rio Grande do Norte Nº 515<br>
			Cidade Industrial, Lorena – SP<br>
			CEP: 12609-240<br>
			Telefone: (12) 3153-5150<br>
			Nextel: 55*82*22619</p>
			<a href="#">valecap@valecap.com.br</a><br>
			<a class="mapa" href="#">Exibir mapa</a>
		</li>
	</ul>
</address>
</aside>

<?php get_footer(); ?>