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