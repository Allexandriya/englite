<?php
/*
Template Name: About us
*/
?>
<?php get_header()?>
	<div id="page">
		<div class="header"><div class="separete"></div><h1 class="title"><?php the_title()?></h1><div class="separete"></div></div>
<div class="description">Englite - С нами английский действительно становится легким! Команда практиков Englite поможет вам почувствовать, что иностранный язык - не враг, а друг. Мы делаем все, чтобы изучение языка для вас стало приятным, доступным и занимало минимум вашего времени. C 10:00 до 22:00 (по московскому времени) мы в online! </div>
		<?php 
	 query_posts('cat=31');
	 if ( have_posts() ) :
                 while ( have_posts() ) : the_post(); //The Loop?>	
		<div class="aboutUs first"><?php the_content()?></div></div>
		<?php endwhile; ?>
<?php endif; ?>

<?php 
	 query_posts('cat=32');
	 if ( have_posts() ) :
                 while ( have_posts() ) : the_post(); //The Loop?>	
		<div class="aboutUs employee"><?php the_content()?></div></div>
		<?php endwhile; ?>
<?php endif; ?>

<div class="header aboutUs" id="contact"><div class="separete"></div><h1>Контакты</h1><div class="separete"></div></div>
<h2  class="aboutUs_header"><img src="http://englite.ru/wp-content/uploads/2014/01/flag_ru.png"> <b>+7 (495) 975-93-10</b> <img src="http://englite.ru/wp-content/uploads/2014/01/flag_ua.png"> <b>+38 (067) 320-43-60</b> <img src="http://englite.ru/wp-content/uploads/2014/01/skype.png" alt=""> <b>admin.englite</b> <img src="http://englite.ru/wp-content/uploads/2014/01/mail.png"> <b></b> admin@englite.ru</h2>
<span style="color: black; text-align: center; font-size: 20px; display: block; text-shadow: 0px 1px 0px rgba(255, 255, 255, 0.6)">C 10:00 до 22:00 (по московскому времени) мы в online!</span>
</div>



</div>
<?php get_footer()?>
