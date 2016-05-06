$(document).ready(function(){
		
	var create = function (elm){
		var back = document.createElement('div');
		
		$(back).bind('click', function(){
			close(elm);
		});		
        
		$(back).addClass('overflow');
		$(elm).parent().append(back);
		
		$(document).keydown(function(e){
			var code = e.keyCode ? e.keyCode : e.which;
			if ((code == 27)){
				close(elm);
			}
		});
		
		var closeDiv = document.createElement('div');
		$(closeDiv).addClass('close');
		
		$(closeDiv).bind('click', function(){
			close(elm);
		});
		
		$(elm).append(closeDiv);
		elm.css({
				top:  $(document).scrollTop() + 30,
				left: ($(window).width() - 740)/2,
				opacity: 1
			}).slideDown(200);
	};
	
	var close = function(elm){
		elm.slideUp(200, function(){
			$(elm).css({
				display: 'none',
				top: 0,
				left: 0,
				opacity: 0
			});
			$('.overflow').remove(); document.location.reload();
		});
	};
	
	
	$('.teachers').click(function(){
		var j = $(this).next('.hidden');
		create(j);
	});

    $('.showInfo').click(function(){
	var hiddenBlock = $(this).parent().parent().parent().parent().find('.hidden');
        
        create(hiddenBlock);
    });
	
	$('.notaktiv').click(function(){
		$(this).removeAttr('href');
	});
	
	$('.sign_up').click(function(){
			$('.teachers').unbind('click');
	});
	
	$('.notaktiv').click(function(){
		$(this).removeAttr('href');
	});

	
	if ($('.res_block').length > 0){
		$('.menu-item-888').addClass('current-menu-item');
	}
	
	if($('.category-24').length > 0) {
		$('#menu-main>li').removeClass('current-menu-item');
		$('.menu-item-888').addClass('current-menu-item');
	}
});
