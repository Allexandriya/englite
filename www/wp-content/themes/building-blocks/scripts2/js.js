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
    
    $(window).scroll(function(){
        
        var link = $('.top_menu>div>div').children('a');
        
        var src = null;

        for (var i=0; i<link.length; i++) {
            src = $($(link[i]).attr('href')).position().top;
            
            if ($(window).scrollTop()+1 > src){
                remove();
                $(link[i]).addClass('active');
            }
        }
                
        if ($(window).scrollTop() >=  ($(document).height()-$(window).height())) {
            remove();
           $(link).last().addClass('active');
        }
    });
	
	if($('.single_post').length > 0){
		$('#menu-item-15').addClass('current-menu-item');
	}
    
     $('#tabs').tabulous({
    	effect: 'scale'
    });
	
	$('#tabs2').tabulous({
    	effect: 'scale'
    });
	
	$('.tabs').tabulous({
    	effect: 'scale'
    });

    
});