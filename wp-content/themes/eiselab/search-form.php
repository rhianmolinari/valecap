<form action="<?php bloginfo('url')?>">
	
	<?php $search_description = 'Buscar ' ;
	if(isset($post_type) && ! empty($post_type)){
		$search_description .= get_post_type_object($post_type)->labels->singular_name ; ?>
		<input type="hidden" name="post_type" value="<?php echo $post_type ?>"> 
	<?php } ?>

	<input name="s" type="text" value="" >
	<input type="submit" value="buscar" title="<?php echo $search_description ?>" />
</form>