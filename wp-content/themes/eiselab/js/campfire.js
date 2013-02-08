jQuery(function($) {
	$('#signup-button').live( 'click', function(event){
		$(this).replaceWith($('#inscricao-campfire'));
		$('#inscricao-campfire').show('slow');
		event.preventDefault();
	});
	$('#telefone').mask('(99) 9999-9999');
	$('#inscricao-campfire').validate();

});