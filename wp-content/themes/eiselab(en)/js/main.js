jQuery(document).ready( function($) {
	$("#a-eise li:last-child").css('background', 'none');
	$("#boxBlog ol li:last-child").css('background', 'none');

	$("ul#hive li div a").click(function(event){
		event.preventDefault();
	})
	$("ul#hive li div a[title]").tooltip({
		position: "center right", 
		delay:"100",
		fade:"slide"
	});
	$('.tooltip').live('mouseover', function(event){
		$(this).hide();
	});
	
	$(".boxBanner .wrap").carousel({
		dispItems: 1, 
		pagination: true,
		direction: "vertical", 
		effect:"fade"
	});


	// Using a selector:
	$("#particulars li a").colorbox({inline:true, speed: 200,
		onLoad: function(){
			var href = this.href.split('/') ; href = href[href.length-1] ;
			$(href).show();
		},
		onCleanup: function(){
			var href = this.href.split('/') ; href = href[href.length-1] ;
			$(href).hide(0);	
		}
	});
	$("#zoom").colorbox({inline:true, speed: 200,
		onLoad: function(){
			var href = this.href.split('/') ; href = href[href.length-1] ;
			$(href).show();
		},
		onCleanup: function(){
			var href = this.href.split('/') ; href = href[href.length-1] ;
			$(href).hide(0);	
		}
	});

});

