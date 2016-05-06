$(document).ready(function(){

    function remove() {
        $('.top_menu a').removeClass('active');
    }

    $('.top_menu a').click(function(){
        
        var src = $(this).attr('href');

        $('html, body').animate({
            scrollTop: $(src).position().top
        }, 1000);
      
        return false;
    });
	
    if($('.single_post').length > 0){
		$('#menu-item-15').addClass('current-menu-item');
    }

    
});
/*
$(window).load(function(){
    try {
	$('#cdChatSendForm').submit(function(){
	    $('.cd_name').html('Я:');  
	});
	
	$('.cd_name').html('Я:');
    } catch(e) {
	alert(e);
    }


});*/
 