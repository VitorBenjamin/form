AOS.init({
	duration: 1200,
});
$(".up").click(function() {
     var currentTop = parseFloat($(".p").css('top').replace('px', ''));
     console.log(currentTop);
     var newTop = currentTop - 35;
     $(".p").animate({top: newTop + "px"});
});

$(".down").click(function() {
     var currentTop = parseFloat($(".p").css('top').replace('px', ''));
     var newTop = currentTop + 35;
     $(".p").animate({top: newTop + "px"});
});
$( document ).ready(function() {
	$('.link-menu').on('click', function(){
		console.log("teste")
		$('.collapse').removeClass('in');
		$('.navbar-toggle').addClass('collapsed');
	});
	$("[rel='tooltip']").tooltip();    

	$('.thumb').hover(function(){
		$(this).find('.caption').fadeIn(250)
	},function(){
		$(this).find('.caption').fadeOut(205)
	}
	); 
	var wordLimit = 60;
	$('.show-summary').each(function() {
		var post = $(this);
		var text = post.text();
		var re = /[\s]+/gm, results = null, count = 0;
		while ((results = re.exec(text)) !== null && ++count < wordLimit) { }
			if (results !== null && count >= wordLimit) {
				var summary = text.substring(0, re.lastIndex - results[0].length);
				post.text(summary + '...');

			}
		});
	var wordLimit2 = 12;
	$('.show-dots').each(function() {
		var post = $(this);
		var text = post.text();
		var re = /[\s]+/gm, results = null, count = 0;
		while ((results = re.exec(text)) !== null && ++count < wordLimit2) { }
			if (results !== null && count >= wordLimit2) {
				var summary = text.substring(0, re.lastIndex - results[0].length);
				post.text(summary + '...');

			}
		});
});
$( document ).ready(function() {
	var hamburger = $('#hamburger-icon');
	var drop = $('dropdown');
	hamburger.click(function() {
		hamburger.toggleClass('active');
		return false;
	});
	$('#add').click(function(){  
		$('#dinamico').append(
			'<div class="container-fluid" style="background: #161b33">'
			+'<div class="row">'
			+'<div class="col-sm-4">'
			+'<div class="row">'
			+'<div class="thumb">'
			+'<img src="/form/public/assets/viagem-15.jpg" data-aos="fade-down"  alt="" class="img-responsive">'
			+'<div class="caption">'
			+'<div class="col-xs-12">'
			+'<div class="caption-titulo">'
			+'<div class="caption-titulo">'
			+'<p class="show-dots">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>'
			+'</div>'
			+'</div>'
			+'</div>'
			+'<div class="caption-rodape">'
			+'<div class="col-xs-6 col-md-6">'
			+'<div class="border-top">'
			+'<hr width="25%">'
			+'<p>Porto Seguro</p>'
			+'</div>'
			+'</div>'
			+'<div class="col-xs-6 col-md-6">'
			+'<a href="#" class="a-caption">'
			+'<div class="button-caption">'
			+'VER MAIS'
			+'</div>'
			+'</a>'
			+'</div>'
			+'</div>'
			+'</div>'
			+'</div>'
			+'</div>'
			+'</div>'
			+'<div class="col-sm-4">'
			+'<div class="row">'
			+'<div class="thumb">'
			+'<img src="/form/public/assets/viagem-16.jpg" data-aos="fade-down"  alt="" class="img-responsive">'
			+'<div class="caption">'
			+'<div class="col-xs-12">'
			+'<div class="caption-titulo">'
			+'<div class="caption-titulo">'
			+'<p class="show-dots">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>'
			+'</div>'
			+'</div>'
			+'</div>'
			+'<div class="col-xs-6 col-md-6">'
			+'<div class="border-top">'
			+'<hr width="25%">'
			+'<p>Porto Seguro</p>'
			+'</div>'
			+'</div>'
			+'<div class="col-xs-6 col-md-6">'
			+'<a href="#" class="a-caption">'
			+'<div class="button-caption">'
			+'VER MAIS'
			+'</div>'
			+'</a>'
			+'</div>'
			+'</div>'
			+'</div>'
			+'</div>'
			+'</div>'
			+'<div class="col-sm-4">'
			+'<div class="row">'
			+'<div class="thumb">'
			+'<img src="/form/public/assets/viagem-18.jpg" data-aos="fade-down"  alt="" class="img-responsive">'
			+'<div class="caption">'
			+'<div class="col-xs-12">'
			+'<div class="caption-titulo">'
			+'<div class="caption-titulo">'
			+'<p class="show-dots">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>'
			+'</div>'
			+'</div>'
			+'</div>'
			+'<div class="col-xs-6 col-md-6">'
			+'<div class="border-top">'
			+'<hr width="25%">'
			+'<p>Porto Seguro Porto Seguro </p>'
			+'</div>'
			+'</div>'
			+'<div class="col-xs-6 col-md-6">'
			+'<a href="#" class="a-caption">'
			+'<div class="button-caption">'
			+'VER MAIS'
			+'</div>'
			+'</a>'
			+'</div>'
			+'</div>'
			+'</div>'
			+'</div>'
			+'</div>'
			+'</div>'
			+'</div>');
		$('.thumb').hover(function(){
			$(this).find('.caption').fadeIn(250)
		},function(){
			$(this).find('.caption').fadeOut(205)
		}
		);
	}); 
});
$(".link-menu").click(function() {

	$('html, body').animate({
		scrollTop: $($(this).attr('href')).offset().top
	}, 1500);
});
$(document).ready(function(){
	$('.clientes').owlCarousel({
		dots:false,
		autoplay:true,
		loop:true,
		margin:0,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:false
			},
			600:{
				items:3,
				nav:false
			},
			1000:{
				items:5,
				nav:false,
				loop:false
			}
		}
	});
	$('.owl-carousel').owlCarousel({
		nav:true,
		dots:false,
		autoplay:false,
		loop:true,
		margin:60,
		responsiveClass:true,
		navText:["<i class='material-icons icons-custom'>keyboard_arrow_left</i>","<i class='material-icons icons-custom'>keyboard_arrow_right</i>"],
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:3,
				nav:false
			},
			1000:{
				items:5,
				nav:true,
				loop:false
			}
		}
	});

});

$('.formphp').on('submit', function() {
	var emailContato = "contato@poloman.com.br"; // Escreva aqui o seu e-mail

	var that = $(this),
	url = that.attr('action'),
	type = that.attr('method'),
	data = {};
	
	that.find('[name]').each(function(index, value) {
		var that = $(this),
		name = that.attr('name'),
		value = that.val();
		
		data[name] = value;
	});
	
	$.ajax({
		url: url,
		type: type,
		data: data,
		success: function(response) {
			
			if( $('[name="leaveblank"]').val().length != 0 ) {
				$('.formphp').html("<div id='form-erro'></div>");
				$('#form-erro').html("<span>Falha no envio!</span><p>Você pode tentar novamente, ou enviar direto para o e-mail " + emailContato + " </p>")
				.hide()
				.fadeIn(1500, function() {
					$('#form-erro');
				});
			} else {
				
				$('.formphp').html("<div id='form-send'></div>");
				$('#form-send').html("<span>Mensagem enviada!</span><p>Em breve eu entro em contato com você. Abraços.</p>")
				.hide()
				.fadeIn(1500, function() {
					$('#form-send');
				});
			};
		},
		error: function(response) {
			$('.formphp').html("<div id='form-erro'></div>");
			$('#form-erro').html("<span>Falha no envio!</span><p>Você pode tentar novamente, ou enviar direto para o e-mail " + emailContato + " </p>")
			.hide()
			.fadeIn(1500, function() {
				$('#form-erro');  
			});
		}
	});
	
	return false;
});
$(document).ready(function() {  
	$("#myCarousel").swiperight(function() {  
		$("#myCarousel").carousel('prev');  
	});  
	$("#myCarousel").swipeleft(function() {  
		$("#myCarousel").carousel('next');  
	});  
});  
