var isIframe = function() {
	var a = !1;
	try {
		self.location.href != top.location.href && ( a = !0 )
	} catch ( b ) {
		a = !0
	}
	return a
};
if ( !isIframe() ) {
	var logo = $( "<a href='http://pupunzi.com/#mb.components/components.html' style='position:absolute;top:0;z-index:1000'><img id='logo' border='0' src='http://pupunzi.com/images/logo.png' alt='mb.ideas.repository'></a>" );
	$( "#wrapper" ).prepend( logo ), $( "#logo" ).fadeIn()
}

/* Initialize the mbGallery */
var myGallery = jQuery("#thumbGallery").mbGallery();

/* customizer */
jQuery("#effect").on("change",function(){
	var x = $(this).val();
	myGallery.data("nav_effect", x);

});

jQuery("#delay").on("change",function(){
	var x = parseFloat($(this).val());
	myGallery.data("nav_delay", x);
});

jQuery("#timing").on("change",function(){
	var x = parseFloat($(this).val());
	myGallery.data("nav_timing", x);
});

if(jQuery.isMobile){
	jQuery("body").css({marginBottom: 140})
}
$(window).scroll(function(){                        


	if ($(this).scrollTop() > 400) {
		$('.navbar-wrapper').addClass('menu');
		$('.menu').fadeIn(1000);
		$('.navbar-wrapper').removeClass('navbar-wrapper');


	}else if($(this).scrollTop() < 400 && $(this).scrollTop() >150) {

		$('#teste').css("display","none");
		$('.menu').fadeOut(1000);
		$('#teste').addClass('navbar-wrapper');
		$('.navbar-wrapper').fadeIn(150);
		if ($('#teste').hasClass('menu')) {
			$('#teste').fadeOut(1000)
			$('#teste').removeClass('menu');
		}		
	}
});

// $(window).scroll(function(){                        
// 	if ($(this).scrollTop() > 300) {
// 		$('.menu').fadeIn(1000);
// 	} else {
// 		$('.menu').fadeOut(1000);		
// 	}
// });
$('.destino').change(function(){

	window.location.replace($(this).val());
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
var wordLimitMobile = 19;
$('.show-summary-mobile').each(function() {
	var post = $(this);
	var text = post.text();
	var re = /[\s]+/gm, results = null, count = 0;
	while ((results = re.exec(text)) !== null && ++count < wordLimitMobile) { }
		if (results !== null && count >= wordLimitMobile) {
			var summary = text.substring(0, re.lastIndex - results[0].length);
			post.text(summary + '...');

		}
	});

$("#data-thumbgrid").thumbGrid();

$( document ).ready(function() {
	$(".artigo p img").addClass("img-responsive");
	var hamburger = $('#hamburger-icon');
	var drop = $('dropdown');
	hamburger.click(function() {
		hamburger.toggleClass('active');
		return false;
	});
	$('#add').click(function(){  
		var rota = "http://developer.agenciavilaca.com.br/formula/public/assets/viagem-15.jpg";
		$('#dinamico').append(
			'<div class="container-fluid" style="background: #161b33">'
			+'<div class="row">'
			+'<div class="col-sm-4">'
			+'<div class="row">'
			+'<div class="thumb">'
			+'<img src="'+rota+'" data-aos="fade-down"  alt="" class="img-responsive">'
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
			+'<img src="'+rota+'" data-aos="fade-down"  alt="" class="img-responsive">'
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
			+'<img src="'+rota+'" data-aos="fade-down"  alt="" class="img-responsive">'
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
		$('.popup-modal').magnificPopup({
			type: 'inline',
			midClick: true,
			preloader: false,
			modal: false
		});
		$(document).on('click', '.popup-modal-dismiss', function (e) {
			e.preventDefault();
			$.magnificPopup.close();
		});
		$('.popup-modal').on('click',function (e) {
		//console.log('asdasdas');
		e.preventDefault();
		$('#test-modal').removeClass('mfp-hide2');
	});
	}); 
});
$(document).ready(function() {
	$('.popup-modal').magnificPopup({
		type: 'inline',
		midClick: true,
		preloader: false,
		modal: false
	});
	$(document).on('click', '.popup-modal-dismiss', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});
	$('.popup-modal').on('click',function (e) {
		//console.log('asdasdas');
		e.preventDefault();
		$('#test-modal').removeClass('mfp-hide2');
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
		autoWidth:true
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

// $('.formphp').on('submit', function() {
// 	var emailContato = "contato@poloman.com.br"; // Escreva aqui o seu e-mail

// 	var that = $(this),
// 	url = that.attr('action'),
// 	type = that.attr('method'),
// 	data = {};

// 	that.find('[name]').each(function(index, value) {
// 		var that = $(this),
// 		name = that.attr('name'),
// 		value = that.val();

// 		data[name] = value;
// 	});

// 	$.ajax({
// 		url: url,
// 		type: type,
// 		data: data,
// 		success: function(response) {

// 			if( $('[name="leaveblank"]').val().length != 0 ) {
// 				$('.formphp').html("<div id='form-erro'></div>");
// 				$('#form-erro').html("<span>Falha no envio!</span><p>Você pode tentar novamente, ou enviar direto para o e-mail " + emailContato + " </p>")
// 				.hide()
// 				.fadeIn(1500, function() {
// 					$('#form-erro');
// 				});
// 			} else {

// 				$('.formphp').html("<div id='form-send'></div>");
// 				$('#form-send').html("<span>Mensagem enviada!</span><p>Em breve eu entro em contato com você. Abraços.</p>")
// 				.hide()
// 				.fadeIn(1500, function() {
// 					$('#form-send');
// 				});
// 			};
// 		},
// 		error: function(response) {
// 			$('.formphp').html("<div id='form-erro'></div>");
// 			$('#form-erro').html("<span>Falha no envio!</span><p>Você pode tentar novamente, ou enviar direto para o e-mail " + emailContato + " </p>")
// 			.hide()
// 			.fadeIn(1500, function() {
// 				$('#form-erro');  
// 			});
// 		}
// 	});

// 	return false;
// });

// $(document).ready(function() {  
// 	$("#myCarousel").swiperight(function() {  
// 		$("#myCarousel").carousel('prev');  
// 	});  
// 	$("#myCarousel").swipeleft(function() {  
// 		$("#myCarousel").carousel('next');  
// 	});  
// });  

$(window).on('load', function() {
	AOS.init({
		duration: 1200,
	});
	AOS.refresh();
});