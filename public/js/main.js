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