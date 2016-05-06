$(document).ready(function(){
	
	var item = null;
	
	
	$('.price_bottom').hover(function(){
		item = $(this).parent().find('.descriptionCourse');
		
		$(item).slideDown(300);

	}, function(){
		item = $(this).parent().find('.descriptionCourse');
		
		$(item).slideUp(300);
});
});

