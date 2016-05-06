$(window).load(function(){
    
    var tmp = new Array();		// два вспомагательных
    var tmp2 = new Array();		// массива
    var param = new Array();

    var get = location.search;	// строка GET запроса
    if(get != '') {
	tmp = (get.substr(1)).split('&');	// разделяем переменные
	for(var i=0; i < tmp.length; i++) {
		tmp2 = tmp[i].split('=');		// массив param будет содержать
		param[i] = tmp2[1];		// пары ключ(имя переменной)->значение tmp2[0]
	}
	var obj = document.getElementById('lesson');	// вывод на экран
        var currency = null;
        var sysCur = "";
        var idCur = "";
        
        if (param[3] == 'rub') {
            currency = "руб";
            idCur = '643';
            
            $('a.hrn').css({
                'display': 'none',
                'opacity': 0
            });
        }else if (param[3] == 'hrn') {
            currency = 'грн';
            idCur = '980';
            
            $('a.rub').css({
                'display': 'none',
                'opacity': 0
            });
        }else{
            currency = '';
        }
        
       
        
        obj.innerHTML += "<h2>" + param[0] + ' занятие (' + param[1] + ' мин.) - ' +  "<span>" + param[2] + " " + currency + "</span></h2>";
    }

    $('.payment .toggle_container').hide();
    
    $('.payment:first>h2.trigger').addClass('active'); //добавляем класс .active к первому блоку
    $('.payment:first>.toggle_container').show();
    
    $('.paymenth>2.trigger').click(function() {
	$(this).toggleClass('active').next().slideToggle('slow').siblings("div:visible").slideUp('slow'); // при клике раскрываем блок и закрываем другие видимые блоки
	$(this).siblings('h2').removeClass('active'); // удаляем класс .active у родственных блоков
	return false; // возвращаем false для запрета перехода по ссылке
    });
     $('.btnBlock').attr('target', '_blank');

    
    var ran = Math.floor((Math.random()*1000)+1);
    var clickHref = null;
    
    $('a.onpay').each(function(){
        var href = $(this).attr('href');
        href += "&price=" + param[2] + "&pay_for=" + ran;
        
        $(this).attr('href', href);
    });
    
    $('a.onpay').click(function(){
        $('.btnBlock').css('background-position', 'bottom');
        $('a.onpay').css('box-shadow', '0px 0px 3px rgba(0, 0, 0, 0.2)');
	 $('a.w1').css('box-shadow', '0px 0px 3px rgba(0, 0, 0, 0.2)');
	$('a.onpay').find('h6').text('Оплатить');
        $('.btnBlock>a').empty().remove();
	$(this).css('box-shadow', '0px 0px 7px #358260');
	$(this).find('h6').text('Выбрано');
        clickHref = $(this).attr('href');
        
        
        var a = document.createElement('a');
        $(a).addClass('payment_btn').attr('href', clickHref);
        
        
        $('.btnBlock').append(a);
        $('.btnBlock').css('background-position', 'top');
        return false;    
    });
    
    $('a.w1').click(function(){
        $('.btnBlock').css('background-position', 'bottom');
        $('a.w1').css('box-shadow', '0px 0px 3px rgba(0, 0, 0, 0.2)');
	$('a.onpay').css('box-shadow', '0px 0px 3px rgba(0, 0, 0, 0.2)');
	$('a.w1').find('h6').text('Оплатить');
        $('.btnBlock').empty();
        $(this).css('box-shadow', '0px 0px 7px #358260');
	$(this).find('h6').text('Выбрано');
        
        var sys = $(this).attr('data-data');
        
        
        var form = document.createElement('form');
        $(form).attr('method', 'post').attr('action', 'https://merchant.w1.ru/checkout/default.aspx').attr('accept-charset', 'UTF-8');
        $(form).append('<input type="hidden" name="WMI_MERCHANT_ID" value="141393640817">');
        $(form).append('<input type="hidden" name="WMI_PAYMENT_AMOUNT" value="' +  param[2] +'">');
        $(form).append('<input type="hidden" name="WMI_PTENABLED" value="'+ sys +'">');
        $(form).append('<input type="hidden" name="WMI_CURRENCY_ID" value="' + idCur +'">');
        $(form).append('<input type="hidden" name="WMI_SUCCESS_URL" value="http://englite.ru"><input type="hidden" name="WMI_FAIL_URL" value="http://englite.ru">');
        $(form).append('<input type="submit" id="pay_submit">');
        
        $('.btnBlock').append($(form));
        $('.btnBlock').css('background-position', 'top');
        
        return false;    
    });
    
    
});