 $(document).ready(function(){
       try {
              var teacher = window.location.search;
              if(teacher.length > 0){
		var arr = teacher.split('?teacher=');
		var name = arr[1].split('&');
		
		$('.hiddenFild').attr('type', 'hidden').css({
			visibility: 'hidden',
			opacity: 0
		}).attr('value', name[0]);
	}
       } catch(e) {
       }
	
	 	
 });