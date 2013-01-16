<?php
/**
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */
?>

<form role="search" method="get" action="<?php echo home_url( '/' ); ?>" >
	<fieldset>
	<label for="search">Procurar por</label>
	<input type="search" value="<?php the_search_query(); ?>" id="search" name="s" />
	<button type="submit" id="searchsubmit" value="Search">Buscar</button>
	</fieldset>
</form>