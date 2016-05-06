$(document).ready(function(){
    $('#hide').hide();
    
     var name;
     var email;
    
    var blc = document.createElement('div');
    $(blc).html("<form method='post' id='test'>");
    
    function takeFive(elm, common, Class) { //function takes five question from the list
        var count = 0;
        var arr_rnd = [];
        var uniq_rnd = [];
        
        while(count<5){
            var rnd = Math.floor((Math.random() * common)); // получаем рандомное
            
            var flag = false; //пока оно новое
            
            for (var i = 0; i<arr_rnd.length; i++) {
                if (arr_rnd[i] == rnd){ //сравниваем с предыдущими, и если такое было, пропускаем ход
                    flag = true;
                }               
            }
            
            if (flag == false) { //если рандомное = уникальное
                uniq_rnd.push(rnd); // массив на 5 уникальных рандомных в пределах 0-19
                count++;
            }
            
            arr_rnd.push(rnd);
        }
        
        for (var i=0; i<uniq_rnd.length; i++){
            var idx =  uniq_rnd[i];
            var elm_body = $(elm).find('div').eq(idx).html();
            var new_elm = $(document.createElement('div')).html(elm_body);
            new_elm.addClass(Class);
            
            $(blc).find('form').append(new_elm);
        }
        $(elm).empty();
    }
    
    
    $('#test_contr').append($(blc));
       
    
    $('#GO').click(function(){ //check if it's first time to make a test, if not - clear customers errors
        if ($('#start input').val() != "") {
            
            name = $('#TestName').val() ;
            email = $('#TestEmail').val();
            
          //  window.location.href = window.location.href + '?name=' + name + '&email=' + email;
            
            $('.red').remove();
            $('#start').remove();
            $('#hide').show();
            
            takeFive("#preIntermediate_voc", 20, '');
            
            takeFive('#music', 10, 'musicFirst');
            
            $('#test>div:first-child').addClass('visibli');
    
            
        }else if($('.red').length == 0){
            $('.err').append('<span class="red">Заполните все поля<br/></span>');
        }
    });
    
    // counting questioans

    var ind = 1; 
    var text ="Вопрос " + ind + '/' + 30;
    $('.count').text(text);
    
    var right_count = 0;
    
    
    // go to the next block of questions, check if previous one was answered

    $('#next_test').click(function(){
        var count = $('#test>div').length;
        
        var CheckedLenght = $('.visibli').find('input:checked').length;
        if (CheckedLenght == 0) {
            
            if ($('.visibli>.err').length == 0) {
                var errLog = document.createElement('div');
                $(errLog).addClass('err red').text('Вы не выбрали вариант ответа');
                $('.visibli').append($(errLog));   
            }         
                        
            return false;
            //counting right answers
        }else if (CheckedLenght > 0 ) {
            
            if ($(".visibli input:checked").attr('rc') == "true") {
                right_count++;
            //    alert(right_count);
            } //showing next block
            
            if (($('.visibli').next().index() < count-1) && ($('.visibli').next().index() != -1 )) {
                ind++;
                var text ="Вопрос " + ind + '/' + count;
                $('.count').text(text);   
            
                $('.visibli').removeClass('visibli').next().addClass('visibli');
                
                if ($('.musicFirst').hasClass('visibli')) {
                        alert('s.k');
                       $('#test').parent().prepend('<div class="codeart-google-mp3-player small align mp3holder" style="overflow:hidden;width:500px; height: 27px;min-height:34px;"><embed type="application/x-shockwave-flash" src="http://prac-gadget.googlecode.com/svn/branches/google-audio-step.swf" quality="best" flashvars="audioUrl=MP3URL" width="466" height="27"></div>');
                }
            }else if ($('.visibli').next().index() == count-1){
                $('.visibli').removeClass('visibli').next().addClass('visibli');
                $(this).html('Finish');
            
                var current = $('.visibli').index() + 1;
                var text ="Вопрос " +  current + '/' + count;
                $('.count').text(text);
            
                $(this).attr('id', 'finishBtn');
                }
        }
        
        //giving the test results
        $('#finishBtn').click(function(){
            var text;
           
            if (right_count >= 0 && right_count<7 ) {
                text = "Правильных ответов: " + right_count + "; <br/> Ваш уровень: Beginner";
            }else if (right_count >= 7 && right_count<12) {
                text = "Правильных ответов: " + right_count + "; <br/> Ваш уровень: Elementary";
            }
            
            $('#NameTest_52_1').val(name);
            $('#EmailTest_53_1').val(email);
            $('#Result_54_1').val(text);
            $('#submit_51_1').trigger('click');
            
            $('#test_contr').empty().text("Подождите, сейчас вы будете перемещены");
            
            
            $(this).remove();
            $('.count').remove();
            return true;
        });
    }); 
});