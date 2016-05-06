$(document).ready(function(){
     
     $('.question .toggle_container').hide();
 
    var elems = $('.question');

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
   
   $( arr ).appendTo('.questions');
   
     
     $('.question:first>h2.trigger').addClass('active'); //добавляем класс .active к первому блоку
     $('.question:first>.toggle_container').show();
     
     $('.question h2.trigger').click(function() {
          $(this).toggleClass('active').next().slideToggle('slow').siblings("div:visible").slideUp('slow'); // при клике раскрываем блок и закрываем другие видимые блоки
          $(this).siblings('h2').removeClass('active'); // удаляем класс .active у родственных блоков
          return false; // возвращаем false для запрета перехода по ссылке
     });
});
