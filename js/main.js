// Menu
$(function(){
	$('header nav ul li').hover(function(){
	$('ul:first',this).css('display', 'block'); 
	}, function(){
	$('ul:first',this).css('display', 'none');
	});
});

// Slider
$(window).load(function() {
    $('.flexslider').flexslider({
        animation: "fade",
        keyboard: true,
        slideshow: true,
        slideshowSpeed: 3000,
        animationSpeed: 500,
        pauseOnHover: true,
        touch: true,
        start: function(slider) {
            $('.flexslider').removeClass('flex-loading');
        }
    });
});

// Effects hover
$(document).ready(function(){
	$('.featured, .productbox').mouseover(function(e){
            var $t = $(e.target).parent();
            $t.find('span').css('display', 'block');
	});
	$('.featured, .productbox').mouseout(function(e){
            var $t = $(e.target).parent();
            $t.find('span').css('display', 'none');
	});
});

function mouseCima(e) {
    var $t = $(e.target).parent();
    $t.find('span').css('display', 'block');
}

function mouseFora(e) {
    var $t = $(e.target).parent();
    $t.find('span').css('display', 'none');
}

// Abas listagem produtos
$(document).ready(function(){
    if(location.pathname.indexOf('lista-produtos')>-1) {
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
    }
    
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

    $(".load").ajaxStart(function () {
            $('#products').html('');
            $(this).show();
    });

    $(".load").ajaxStop(function () {
            $(this).hide();
    });

});

function getProdutos(data) {
    if(data != null) {
        var classez = [' alpha','',' omega'];
        var cont = 0;
        
        $.each(data.produtos, function(key, value) {
            var li = document.createElement('li');li.setAttribute('class', 'box grid_3 productbox'+classez[cont]);li.setAttribute("onmouseover", "mouseCima(event)");li.setAttribute("onmouseout", "mouseFora(event)");
            var a = document.createElement('a');a.setAttribute('href', value.link);
            var h3 = document.createElement('h3');h3.appendChild(document.createTextNode(value.title));
            var img = document.createElement('img');img.setAttribute('src', (value.img == null)?'http://www.valecap.com.br/wp-content/themes/valecappneus/image/not-image.png':value.img);
            var span = document.createElement('span');span.setAttribute('class', 'saibamais');span.appendChild(document.createTextNode('+ saiba mais'));
            a.appendChild(h3);a.appendChild(img);a.appendChild(span);
            li.appendChild(a);
            if(cont++ == 2)cont=0;
            $('#products').append(li);
        });
    }else
        alert('No momento não há produtos nesta categoria!');
}

$(document).ready(function(){        
        $('#categoria').dropkick({
            change: function (value, label) {
                if(value != "") {
                    var vl = value.split("|");
                    $.ajax({
                        type: "GET",
                        url: "/wp-admin/admin-ajax.php",
                        data: 'action=tipo_produto&slug='+vl[0],
                        dataType: 'json',
                        success: function(data) {
                            $('#desenho').removeData("dropkick");
                            $("#dk_container_desenho").remove();
                            $('#desenho').html('');
                            var vazio = document.createElement("option");
                            vazio.setAttribute("value", "");
                            vazio.appendChild(document.createTextNode("Selecione o desenho"));
                            $('#desenho').append(vazio);
                            $.each(data.produtos, function(key, value) {
                                var opt = document.createElement("option");
                                opt.setAttribute("value", value.id+"|"+value.title);
                                opt.appendChild(document.createTextNode(value.title));
                                $('#desenho').append(opt);
                            });
                            $('#desenho').dropkick({
                                change: function (value, label) {
                                    if(value != "") {
                                        var vl = value.split("|");
                                        $.ajax({
                                            type: "GET",
                                            url: "/wp-admin/admin-ajax.php",
                                            data: 'action=tags_produto&post_id='+vl[0],
                                            dataType: 'text',
                                            success: function(data) {
                                                $('#medida').removeData("dropkick");
                                                $("#dk_container_medida").remove();
                                                $('#medida').html('');
                                                var vazio = document.createElement("option");
                                                vazio.setAttribute("value", "");
                                                vazio.appendChild(document.createTextNode("Selecione a medida"));
                                                $('#medida').append(vazio);
                                                var tags = data.split('|');
                                                for(var i=0;i<tags.length;i++) {
                                                    var opt = document.createElement("option");
                                                    opt.setAttribute("value", tags[i]);
                                                    opt.appendChild(document.createTextNode(tags[i]));
                                                    $('#medida').append(opt);
                                                }
                                                $('#medida').dropkick();
                                            }
                                        });
                                    }
                                }
                            });
                        }
                    });
                }
            }
        });
});

// Tiptip
$(document).ready(function() {
	$('section.grid_4.product .box ul li img[title], .recommended span').each(function() {
	var Tiplink = $(this).attr('title');
	var text = Tiplink;
	$(this).attr('title', text);
	$(this).tipTip({ 
		defaultPosition: 'top',
		delay: 150,
		fadeIn: 100,
		fadeOut: 100
	});
	});
});

//menu dropdown do archive (blog)
$(document).ready(function(){
            $('#archive_dropdown').dropkick({
                startSpeed:0,
                change: function (value, label) {
                    location.href = value;
                }
            });
});

// Dropkick
$(document).ready(function(){
    $('select').dropkick({startSpeed:0});
});

// Abas listagem itens historico
$(document).ready(function(){
    
    if(location.pathname.indexOf('historico')>-1 && location.hash != '') {
            var hsh = location.hash;
            hsh = hsh.substring(hsh.lastIndexOf('/')+1);
            $('.entry-content li').css('display', 'none')
            $('#content-'+hsh).css('display', 'block');
            $('#itens-historico li').removeClass('selected');
            $('#itens-historico li a[href="' + location.hash + '"]').parent().addClass('selected');
    }
    
    $('#itens-historico li a').click(function(){
        var title = $(this).attr('href');
        title = title.substring(title.lastIndexOf('/')+1);
        $('.entry-content li').css('display', 'none')
        $('#content-'+title).css('display', 'block');
        $('#itens-historico li').removeClass('selected');
        $(this).parent().addClass('selected');
    });
    
});

function fileUpload(formId, action_url, div_id) {
    // Create the iframe...
    var iframe = document.createElement("iframe");
    iframe.setAttribute("id", "upload_iframe");
    iframe.setAttribute("name", "upload_iframe");
    iframe.setAttribute("width", "0");
    iframe.setAttribute("height", "0");
    iframe.setAttribute("border", "0");
    iframe.setAttribute("style", "width: 0; height: 0; border: none;");

    var form = document.getElementById(formId);
 
    // Add to document...
    form.parentNode.appendChild(iframe);
    window.frames['upload_iframe'].name = "upload_iframe";
 
    iframeId = document.getElementById("upload_iframe");

    // Add event...
    var eventHandler = function () {
 
            if (iframeId.detachEvent) iframeId.detachEvent("onload", eventHandler);
            else iframeId.removeEventListener("load", eventHandler, false);
 
            // Message from server...
            if (iframeId.contentDocument) {
                content = iframeId.contentDocument.body.innerHTML;
            } else if (iframeId.contentWindow) {
                content = iframeId.contentWindow.document.body.innerHTML;
            } else if (iframeId.document) {
                content = iframeId.document.body.innerHTML;
            }

            if (content == "Seu currículo foi enviada com sucesso!") {
                document.getElementById("msg-success").innerHTML = content;
                document.getElementById("msg-success").style.display = "block";
            }
            else if (content) {
                document.getElementById("msg-error").innerHTML = content;
                document.getElementById("msg-error").style.display = "block";
            }
 
            //alert(content);
            document.getElementById(div_id).innerHTML = "";
            document.getElementById(div_id).style.display = "none";

            document.getElementById("send-curriculum").disabled = false;
            document.getElementById("send-curriculum").innerHTML = "Enviar";
            document.getElementById("send-curriculum").style.cursor = "pointer";
 
            // Del the iframe...
            setTimeout('iframeId.parentNode.removeChild(iframeId)', 250);
        }
 
    if (iframeId.addEventListener) iframeId.addEventListener("load", eventHandler, true);
    if (iframeId.attachEvent) iframeId.attachEvent("onload", eventHandler);
 
    // Set properties of form...
    form.setAttribute("target", "upload_iframe");
    form.setAttribute("action", action_url);
    form.setAttribute("method", "post");
    form.setAttribute("enctype", "multipart/form-data");
    form.setAttribute("encoding", "multipart/form-data");
 
    // Submit the form...
    form.submit();

    document.getElementById("msg-error").innerHTML = "";
    document.getElementById("msg-error").style.display = "none";

    document.getElementById("send-curriculum").disabled = true;
    document.getElementById("send-curriculum").innerHTML = "Aguarde...";
    document.getElementById("send-curriculum").style.cursor = "progress";

    document.getElementById(div_id).innerHTML = "Enviando...";
    document.getElementById(div_id).style.display = "block";

}

// Mask input
jQuery(function($){
    $("#tel").mask("(99) 9999-9999");
    $("#cep").mask("99999-999");
});

// Validate
$(document).ready(function(){
    new FormValidator('form-contato', [{
        name: 'nome',
        display: 'Nome',
        rules: 'required|min_length[2]'
    }, {
        name: 'email',
        display: 'E-mail',
        rules: 'required|valid_email'
    }, {
        name: 'loja',
        display: 'Referênte a',
        rules: 'required'
    }, {
        name: 'mensagem',
        display: 'Mensagem',
        rules: 'required|min_length[2]'
    }], function(errors, evt) {
        var SELECTOR_ERRORS = $('.error_box'),
            SELECTOR_SUCCESS = $('.success_box');

        if (errors.length > 0) {
            SELECTOR_ERRORS.empty();

            for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
                SELECTOR_ERRORS.append(errors[i].message + '<br />');
            }

            SELECTOR_SUCCESS.css({ display: 'none' });
            SELECTOR_ERRORS.fadeIn(200);
        } else {
            SELECTOR_ERRORS.css({ display: 'none' });
            SELECTOR_SUCCESS.fadeIn(200);
            $.ajax({
                type: "POST",
                url: "/wp-admin/admin-ajax.php",
                data: 'action=contato_ajax&'+$("#form-contato").serialize()
            });
            $('#form-contato')[0].reset();
        }

        if (evt && evt.preventDefault) {
            evt.preventDefault();
        } else if (event) {
            event.returnValue = false;
        }
    });

    new FormValidator('budgetform', [{
        name: 'nome',
        display: 'Nome',
        rules: 'required|min_length[2]'
    }, {
        name: 'email',
        display: 'E-mail',
        rules: 'required|valid_email'
    }, {
        name: 'tel',
        display: 'Telefone',
        rules: 'required|exact_length[14]'
    }, {
        name: 'cidade',
        display: 'Cidade',
        rules: 'required'
    }, {
        name: 'uf',
        display: 'Estado',
        rules: 'required|exact_length[2]'
    }, {
        name: 'address',
        display: 'Endereço',
        rules: 'required|min_length[3]'
    }, {
        name: 'cpf-cnpj',
        display: 'CPF ou CNPJ',
        rules: 'required'
    }, {
        name: 'categoria',
        display: 'Categoria do Pneu',
        rules: 'required'
    }, {
        name: 'desenho',
        display: 'Desenho do Pneu',
        rules: 'required'
    }, {
        name: 'medida',
        display: 'Medida do Pneu',
        rules: 'required'
    }, {
        name: 'mensagem',
        display: 'Mensagem',
        rules: 'min_length[2]'
    }], function(errors, evt) {
        var SELECTOR_ERRORS = $('.error_box'),
            SELECTOR_SUCCESS = $('.success_box');

        if (errors.length > 0) {
            SELECTOR_ERRORS.empty();

            for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
                SELECTOR_ERRORS.append(errors[i].message + '<br />');
            }

            SELECTOR_SUCCESS.css({ display: 'none' });
            SELECTOR_ERRORS.fadeIn(200);
        } else {
            SELECTOR_ERRORS.css({ display: 'none' });
            SELECTOR_SUCCESS.fadeIn(200);
            $.ajax({
                type: "POST",
                url: "/wp-admin/admin-ajax.php",
                data: 'action=orcamento_ajax&'+$("#budgetform").serialize()
            });
            $('#budgetform')[0].reset();
        }

        if (evt && evt.preventDefault) {
            evt.preventDefault();
        } else if (event) {
            event.returnValue = false;
        }
    });

});