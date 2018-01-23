$( document ).ready(function() {
	$("[rel='tooltip']").tooltip();    

	$('.thumb').hover(
		function(){
			$(this).find('.caption').fadeIn(250)
		},
		function(){
			$(this).find('.caption').fadeOut(205)
		}
		); 
});
$( document ).ready(function() {
	var hamburger = $('#hamburger-icon');
	var drop = $('dropdown');
	hamburger.click(function() {
		hamburger.toggleClass('active');
		return false;
	});
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
		autoplay:true,
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