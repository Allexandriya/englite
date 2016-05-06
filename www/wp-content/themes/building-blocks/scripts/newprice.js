$(document).ready(function(){
    var time;
    var lesson_count;
    var price;
    var currency;
    
	try{
		var time = $('.time>.active')	
	}catch(err)
	{
  
	}
    
    //taking values

    var lesson_count = $('.check.active').parent().parent().find('h3').html();
    var price = $('.check.active').parent().html();
    var currency = $('.check.active').parent().html();
    


    function init(time, lesson_count, price, currency) {
        try{
		
		time = ((time.html()).split(' '))[0];
        lesson_count = (lesson_count.split(' '))[0];
        price = (price.split(' '))[0];
        currency = (currency.split(' '))[1];
		}catch(err){
		}
        
        //transform customers-looks to coding
        var local_curr = null;
                
        if (currency == 'руб'){
            local_curr = 'rub'
        }else if (currency == 'грн') {
            local_curr = 'hrn'
        }
        
       //alert('time '+ time + " lesson_count " + lesson_count + ' price ' + price + ' currency ' + currency);
      
      //making new url link with all data
      var href = 'http://englite.ru/payment?less_count=' + lesson_count + '&less_time=' + time + '&payment=' + price + '&currency=' + local_curr;
      $('.payText.active>.active>.pay_btn>a').attr('href', href);
    }
    
    init(time, lesson_count, price, currency);

    //choising by customers all paramentrs
    
    $('#choice_course>div>span').click(function(){
        var idx = $(this).parent().index();
        
        var block = $('.payBlock').eq(idx);
        
        $('#choice_course>div>span').removeClass('active');
        $(this).addClass('active');
        
        $('.payBlock').removeClass('active');
        $(block).addClass('active');        
    });
    
    $('.time>.btn').click(function(){
        var idx = $(this).index();
        
        var block = $(this).parent().parent().find('.payText').eq(idx);
                
        $(this).parent().find('.btn').removeClass('active');
        $(this).addClass('active');
        
        $(this).parent().parent().find('.payText').removeClass('active');
        $(this).parent().parent().find('.payText').find('div').removeClass('active');
        $(this).parent().parent().find('.payText').find('div>div>span').removeClass('active');
        
        $(block).addClass('active');       
    });
    
    //hightlighting new customers choices

    $('.check').click(function(){
        $(this).parent().parent().parent().find('div').removeClass('active');
        $(this).parent().parent().parent().find('div').find('div>span').removeClass('active');       
        
        $(this).addClass('active');
        
        $(this).parent().parent().addClass('active');
        
        var time = $(this).parent().parent().parent().parent().find('.time>div.active');
        var lesson_count = $(this).parent().parent().find('h3').html();
        var price = $(this).parent().html();
        var currency = $(this).parent().html();
        
        init(time, lesson_count, price, currency);
    });
    
});