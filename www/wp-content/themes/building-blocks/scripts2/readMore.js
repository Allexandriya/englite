$(document).ready(function(){
	var elems = $('.rew_block');

    var arr = jQuery.makeArray( elems );     
    
    function random(min, max) {
        var range = max - min + 1;
        return Math.floor(Math.random()*range) + min;
    }
 
    function shuffle(arr) {
        var r_i; // случайный индекс
        var v; // временная переменная
        for (var i = 0; i < arr.length-1; i++) {
            /* получаем случайный индекс (кроме последнего) */
            r_i = random(0, arr.length-1);
            /* меняем местами случайный элемент массива с последним */
            v = arr[r_i];
            arr[r_i] = arr[arr.length-1];
            arr[arr.length-1] = v;
        }
        return arr;
    }
    
   shuffle(arr);
	$( arr ).appendTo('.rew_cont');
	
	$('.rew').each(function(){
		var smallHeight = $(this).height()+40;
		var bigHeight = $(this).find('div').height();
		
		if (smallHeight < bigHeight){
			var after = document.createElement('div');
			$(after).addClass('after').attr('data-count', 'false').attr('title', 'Развернуть длинный отзыв');
			
			$(this).append(after);
		}
	});
	
	$('.after').click(function(){
		var smallHeight = 340;
		var bigHeight = $(this).prev('div').height();
		
		var count = $(this).attr('data-count');
		
		if (count == 'false'){
			$(this).parent().animate({
				height: bigHeight,
				'max-height': bigHeight
			}, 300, function(){
				$(this).find('.after').css({
					transform: 'rotate(180deg)'
				});
			});
			
			$(this).attr('data-count', 'true');
		}else{		
			var diffe = bigHeight - 340;
			$(this).parent().animate({
				height: 340,
				'max-height': 340
			}, 300, function(){
				$(this).find('.after').css({
					transform: 'rotate(360deg)'
				});
			});
						
			$('html, body').animate({
				scrollTop: $(document).scrollTop() - diffe
			}, 300);
			
			$(this).attr('data-count', 'false');
		}
	});
	/*
	
	$('.rew').hover(function(){
        smallHight = $(this).height();
        var bigHeight = $(this).find('div').height();
        
        $(this).animate({
            height: bigHeight,
            'max-height': bigHeight
        }, 300);
    }, function(){
        $(this).animate({
            height: smallHight,
            'max-height': '340px'
        }, 300);
    });
	*/
});