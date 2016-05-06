$(window).load(function(){
    var tmp = new Array();
    var tmp2 = new Array();
    var param = new Array();
        
    var get = location.search;
           
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
            
            $('.hrn,.hrn+label').css({
                'display': 'none',
                'opacity': 0
            });	    
        }else if (param[3] == 'hrn') {
            currency = 'грн';
            idCur = '980';
            
            $('.rub,.rub+label').css({
                'display': 'none',
                'opacity': 0
            });
	}
	    
	var lesson = 'занятий';
	if (param[0] == '4') {
	    lesson = 'занятия';
	}
	if (param[0] == '1') {
	    lesson = 'занятие';
	}
	
        obj.innerHTML += "<h2>" + param[0] + ' ' + lesson + ' (' + param[1] + ' мин.) - ' +  "<span>" + param[2] + " " + currency + "</span></h2>";
    }
        
    $('.btnBlock').attr('target', '_blank');
    
    var ran = Math.floor((Math.random()*1000)+1);
    var clickHref = null;
    
    $('.onpay').each(function(){
        var href = $(this).attr('data-href');
        href += "&price=" + param[2] + "&pay_for=" + ran;
        
        $(this).attr('data-href', href);
    });   
     
    function SelectElement() {
	$('.btnBlock').empty();
	$('.btnBlock>a').empty().remove();
	$('.btnBlock').css('background-position', 'bottom');
    }
    
    $('.onpay').change(function(){
	if ($(this).is(':checked')) {
	    SelectElement();
	    clickHref = $(this).attr('data-href');
        
	    var a = document.createElement('a');
	    $(a).addClass('payment_btn').attr('href', clickHref);    
        
	    $('.btnBlock').append(a);
	    $('.btnBlock').css('background-position', 'top');
	    return false;
	}
    });
    
    $('.w1').change(function(){
	if ($(this).is(':checked')) {
	    SelectElement();
	
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
	}
    });
    
    $('.wm').change(function(){
	if ($(this).is(':checked')) {
	    SelectElement();
	    if ($(this).hasClass('wmz')) {
	        if (param[3] == 'rub') {
			//alert(param[2] +'+'+ $(this).attr('data-rub-curse'));
			param[2] = (param[2] / parseFloat($(this).attr('data-rub-curse'))).toFixed(2);
	        }else if (param[3] == 'hrn') {
			param[2] = parseFloat(param[2] / parseFloat($(this).attr('data-hrn-curse'))).toFixed(2);
		}
	    }        
	
	    var sys = $(this).attr('data-data');
               
	    var form = document.createElement('form');
	    $(form).attr('method', 'post').attr('action', 'https://merchant.webmoney.ru/lmi/payment.asp').attr('accept-charset', 'UTF-8');
	    $(form).append('<input type="hidden" name="LMI_PAYMENT_AMOUNT" value="' +  param[2] +'">');
	    $(form).append('<input type="hidden" name="LMI_PAYMENT_NO" value="'+ran+'">');
	    $(form).append('<input type="hidden" name="LMI_PAYEE_PURSE" value="'+sys+'">');	
	    $(form).append('<input type="hidden" name="LMI_PAYMENT_DESC" value="Lessons">');
	    $(form).append('<input type="submit" id="pay_submit">');
        
	    $('.btnBlock').append($(form));
	    $('.btnBlock').css('background-position', 'top');
	    
	    return false;
	}
    });
});