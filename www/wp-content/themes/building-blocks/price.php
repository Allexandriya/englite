<?php
/*
Template Name: price
*/
?>

<?php get_header(); ?>


	<div id="page" style="width: 1024px">
<!--<div class="header">
				<div class="separete"></div><h1 class="title"><?php the_title()?></h1><div class="separete"></div>
				
			</div>
<div class="description price_text"><p>Нашим студентам и преподавателям не нужно тратить время на дорогу, мы экономим на аренде офиса, поэтому стоимость обучения в Englite ниже, чем в стационарных школах.</p>
<p>Наша цель – сделать качественное обучение доступным. </p>
<p>Если вы по какой-то причине не можете продолжать обучение в Englite, мы вернем вам деньги за непройденные уроки. Это предложение не распространяется на акционные пакеты. В отдельных случаях, уроки, которые вы проплатили, но не прошли, вы можете передать кому-то из родственников или друзей.</p></div>-->
<div class="header">
				<div class="separete"></div><h1 class="title">Стоимость обучения</h1><div class="separete"></div>
			</div>
<p class="description">Для оплаты занятий выберите программу, продолжительность и количество уроков, а также валюту. <br> После этого нажмите кнопку <b>«Оплатить»</b> и воспользуйтесь наиболее удобным для вас способом оплаты. <br>Если у вас возникли трудности – свяжитесь с нами.</p>
<div class="dest_list_cont">
<div class="des_list">
	<h3>Общие программы</h3>
	<ul>
		<li>Общий английский</li>
		<li>Разговорный английский</li>
		<li>Бизнес английский</li>
	</ul>
</div><div class="des_list">
	<h3>Специальные программы</h3>
	<ul>
		<li>Профессиональный английский</li>
		<li>Подготовка к экзаменам</li>
		<li>Интенсивный английский</li>
	</ul>
</div>
</div>
<?php 
  	query_posts('cat=7');
	if ( have_posts() ) :             
                while ( have_posts() ) : the_post(); //The Loop?>		
		<div class="page-content"><?php the_content()?></div>

		<?php endwhile; ?>
<?php endif; ?>
<?php 
	 query_posts('cat=29');
	 if ( have_posts() ) :
                 while ( have_posts() ) : the_post(); //The Loop?>	
		<div class="header">
				<div class="separete"></div><h1 class="title"><?php the_title()?></h1><div class="separete"></div>
				
			</div>
		<div class="action"><?php the_content()?></div>

		<?php endwhile; ?>
<?php endif; ?>	
<?php 
	 query_posts('cat=8');
	 if ( have_posts() ) :
                 while ( have_posts() ) : the_post(); //The Loop?>	
		<div class="header">
				<div class="separete"></div><h1 class="title"><?php the_title()?></h1><div class="separete"></div>
				
			</div>
		<div class="payment_methods"><?php the_content()?></div>

		<?php endwhile; ?>
<?php endif; ?>	</div>
<?php get_footer()?>