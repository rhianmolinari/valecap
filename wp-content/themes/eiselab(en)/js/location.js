function switch_tab(url){
	var id = url.split('#')[1] ;
	jQuery('.type-box').hide();
	jQuery('#'+id).show();
	goTo("tabsContent") ;
}
function goTo(id){
     $('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
}
jQuery(function($) {
	$('#map').jMapping({
		'side_bar_selector': '.locations',
		'category_icon_options': {
			'eise' : {color: '#73278e'},
			'para-comer-e-beber' : {color: '#cc0000' },
			'transporte-e-estadia' : {color: '#2689c3' },
			'compras' : {color: '#006633' },
			'utilidades' : {color: '#f29100' },
		}
	});

	$('.locations a.map-link').live('click', function(event){
		goTo("top") ;
		event.preventDefault();

	});

	$('.location-tabs').live('click', function(event){
		var $this = $(this), $tab = $this.closest('li');
		event.preventDefault();

		if (!$this.hasClass('selected')) {
			switch_tab(this.href);
			$this.addClass('selected');
			$tab.siblings().find('a').removeClass('selected');
			switch_thinker_screen(this.href);
		}
		
	});


});