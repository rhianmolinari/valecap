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
	<label for="loja" class="grid_2 alpha">Refêrente a</label>
	<select id="loja">
		<option>Valecap Recauchutagem</option>
		<option>Valecap Truck Service</option>
	</select>
	</div>

	<div>
	<label for="mensagem" class="grid_2 alpha">Mensagem</label>
	<textarea id="mensagem"></textarea>
	</div>

	<button type="submit" class="grid_4 omega alpha push_2">Enviar</button>
	</fieldset>
</form>
</section>

<aside class="grid_4 push_2 omega">
<h1>Endereços</h1>
<address class="box">
	<ul>
		<li>
			<h4>Valecap Recauchutagem</h4>
			<p>Rua Rio Grande do Norte Nº 515<br>
			Cidade Industrial, Lorena – SP<br>
			CEP: 12609-240<br>
			Telefone: (12) 3153-5150<br>
			Nextel: 55*82*22619</p>
			<a href="#">valecap@valecap.com.br</a><br>
			<a class="mapa" href="#">Exibir mapa</a>
		</li>
		<li>
			<h4>Valecap Truck Service</h4>
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