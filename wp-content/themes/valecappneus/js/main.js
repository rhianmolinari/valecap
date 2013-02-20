// Menu
$(function(){
	$('header nav ul li').hover(function(){
	$('ul:first',this).css('display', 'block'); 
	}, function(){
	$('ul:first',this).css('display', 'none');
	});
});

// Slider
jQuery(document).ready(function($) {
$('.slider').royalSlider({
	//Definitons
	controlsInside: false,
	controlNavigationSpacing: 0,
	imageScaleMode: 'none',
	imageAlignCenter:false,
	loop: false,
	loopRewind: true,
	numImagesToPreload: 6,
	usePreloader: false,
	navigateByClick: false,

	//Transition
	transitionType: 'fade', // fade or move
	transitionSpeed: 0,
	//slidesOrientation: 'vertical', // move (horizontal or vertical)

	//Autoplay
	autoPlay: {
		enabled: true,
		pauseOnHover: true,
		delay: 3000
	},

	//Arrow
	allowCSS3: true,
	arrowsNav: true,

	//Ball
	controlNavigation: 'tabs',

	//Arrows keyboard
	keyboardNavEnabled: true
	});
});

// Effects hover
$(document).ready(function(){
	$('.featured').mouseover(function(){
		$('.saibamais').css('display', 'block');
	});
	$('.featured').mouseout(function(){
		$('.saibamais').css('display', 'none');
	});

	$('.type-product').mouseover(function(){
		$('.saibamais').css('display', 'block');
	});
	$('.type-product').mouseout(function(){
		$('.saibamais').css('display', 'none');
	});
});

// Abas listagem produtos
$(document).ready(function(){
    
    var slugi = location.hash;
    slugi = slugi.substring(slugi.lastIndexOf('/')+1);
    $('#categoria-produtos ul li').removeClass('selected');
    $('#'+slugi).parent().addClass('selected');
    $.ajax({
        type: "GET",
        url: "/wp-admin/admin-ajax.php",
        data: 'action=tipo_produto&slug='+slugi,
        dataType: 'json',
        success: getProdutos
    });
    
	$('#categoria-produtos ul li a').click(function(){
            var slug = $(this).attr('href');
            slug = slug.substring(slug.lastIndexOf('/')+1);
            $('#categoria-produtos ul li').removeClass('selected');
            $(this).parent().addClass('selected');
            $.ajax({
                type: "GET",
                url: "/wp-admin/admin-ajax.php",
                data: 'action=tipo_produto&slug='+slug,
                dataType: 'json',
                success: getProdutos
            });
	});
});

function getProdutos(data) {
    if(data != null) {
        var classez = [' alpha','',' omega'];
        var cont = 0;
        $('#products').html('');
        for(var i=0;i<data.length;i++) {
            var li = document.createElement('li');li.setAttribute('class', 'box grid_3 productbox'+classez[cont]);
            var a = document.createElement('a');a.setAttribute('href', data[i][0].link);
            var h3 = document.createElement('h3');h3.appendChild(document.createTextNode(data[i][0].title));
            var img = document.createElement('img');img.setAttribute('src', (data[i][0].img == null)?'':data[i][0].img);
            var span = document.createElement('span');span.setAttribute('class', 'saibamais');span.appendChild(document.createTextNode('+ saiba mais'));
            a.appendChild(h3);a.appendChild(img);a.appendChild(span);
            li.appendChild(a);
            if(cont++ == 2)cont=0;
            $('#products').append(li);
        }
    }else
        alert('No momento não há produtos nesta categoria!');
}

// Dropkick
$(document).ready(function(){
	$('select').dropkick({startSpeed:0});
});

// Tiptip
$(document).ready(function() {
	$('img[title], a.logo[title], .recommended span').each(function() {
	var goto = $(this).attr('title');
	var text = goto;
	$(this).attr('title', text);
	$(this).tipTip({ 
		defaultPosition: 'top',
		delay: 150,
		fadeIn: 100,
		fadeOut: 100
	});
	});
});

// Formulario de contato
$(document).ready(function(){
	$("#form-contato").submit(function() {
		$.ajax({
			type: "POST",
			url: "/wp-admin/admin-ajax.php",
			data: 'action=form_contato&'+$("#form-contato").serialize(),
			success: function(msg) {
                            alert("Mensagem enviada com sucesso!");
			}
		});

		$(this)[0].reset();
		
		return false;
		});
});