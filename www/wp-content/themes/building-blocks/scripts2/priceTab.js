$(document).ready(function(){
    var time = '';
    var count = "";
    var rubPrice = "";
    var hrnPrice = "";
    var payment = "";
    var current = $('.paymentBtn span.active').attr('data-data');
    
    
    function doAllThis(elm) {
        var timeText = elm.parent().parent().parent().parent().parent().parent().find('ul>li>a.tabulous_active').text().split(' ');
        time = timeText[0];
              
        hrnPriceText = elm.prev().html();
        if (hrnPriceText.search('<span>') != -1) {
            hrnPriceText = hrnPriceText.split('</span>');
            
            hrnPrice = hrnPriceText[1];
            
        }else{            
            hrnPrice = hrnPriceText;
        }
        
        rubPriceText = elm.prev().prev().html();
        if (rubPriceText.search('<span>') != -1) {
            rubPriceText = rubPriceText.split('</span>');
            
            rubPrice = rubPriceText[1];
            
        }else{            
            rubPrice = rubPriceText;
        }
        
        count = elm.prev().prev().prev().text();
    
        if (current == 'rub') {
            payment = rubPrice;
        }else{
            payment = hrnPrice;
        };    
         
        var actualHref = 'http://englite.ru/payment?less_count=' + count + '&less_time=' + time + '&payment=' + payment + '&currency=' + current ;
        $('.btnBlock').attr('href', actualHref);
    }
    
    var elm = $('.hide.active');
    doAllThis(elm);

    $('.paymentBtn span').click(function(){
         $('.paymentBtn span').removeClass('active');
         $(this).addClass('active');
         
         current = $(this).attr('data-data');
        
        if (current == 'rub') {
            payment = rubPrice;
        }else{
            payment = hrnPrice;
        };        
         
        var actualHref = 'http://englite.ru/payment?less_count=' + count + '&less_time=' + time + '&payment=' + payment + '&currency=' + current ;
        $('.btnBlock').attr('href', actualHref);
         
         return false;
    });
    
    
    $('.hide').click(function(){
        $('.hide').removeClass('active');
        $(this).addClass('active');
        $('tr').removeClass('superActive');
        $(this).parent('tr').addClass('superActive');
        
        var elm = $(this);
        doAllThis(elm);
    });
    
    $('tr').click(function(){
        $('.hide').removeClass('active');
        $(this).find('.hide').addClass('active');
        $('tr').removeClass('superActive');
        $(this).addClass('superActive');
        
        var elm = $(this).find('.active');
        doAllThis(elm);
    });
    
});