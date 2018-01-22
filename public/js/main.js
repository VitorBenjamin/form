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

