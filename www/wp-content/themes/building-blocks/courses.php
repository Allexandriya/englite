<?php
/*
Template Name: Courses
*/
?>
<?php get_header()?>
	<div id="page">
		<div class="header"><div class="separete"></div><h1 class="title"><?php the_title()?></h1><div class="separete"></div></div>
<div class="description">
Вы – аудиал или визуал, cова или жаворонок, или.. Больше узнаем при ближайшем знакомстве – на пробном уроке. В Englite каждая личность чувствует себя максимально комфортно. С нами выучить английский онлайн легко. Определяем откуда стартовать и как попасть в желаемую точку. Методика Englite — это не устаревшие стандартные программы, а гибкий, динамичный курс. От сдачи экзаменов – к успешной карьере, от хобби – в кругосветное путешествие. Даже изучая английский с нуля, вы можете рассчитывать на заметный результат! Обучение у нас позволит вам не только быстро выучить английский, а и получить от этого удовольствие.
</div>
		
<div class="other_courses" style="text-align: center;">		
		<a href="http://englite.ru/course/basic_english" style="margin-bottom: 20px; width: 276px; ">Общий английский</a>
		
		<a href="http://englite.ru/course/spoken_english" style="margin-bottom: 20px; width: 276px; ">Разговорный английский</a>
		
		<a href="http://englite.ru/course/business_english" style="margin-bottom: 20px; width: 276px; ">Бизнес английский</a>
		
		<a href="http://englite.ru/course/professional_english" style="margin-bottom: 20px; width: 276px; ">Профессиональный английский</a>
		
		<a href="http://englite.ru/course/exam_preparation" style="margin-bottom: 20px; width: 276px; ">Подготовка к экзаменам</a>
		
		<a href="http://englite.ru/course/intensity" style="margin-bottom: 20px; width: 276px; ">Интенсивный английский</a>
			</div>

	<div class="courses"> 
	<?php 
	 query_posts('cat=37');
	 if ( have_posts() ) :
                 while ( have_posts() ) : the_post(); //The Loop?>	
		<div>
			<div class="before"></div><h2>
				<?php the_title()?>
			</h2><div class="after"></div>
			<div class="block">
				<?php the_content()?>
					<span>
						Подробнее о курсе<br/>
						<b><?php the_title()?></b>
					</span>
					<em></em>
				</a>
				</div>
			</div>			
		</div>
		<?php endwhile; ?>
<?php endif; ?>
	</div>

</div>
<?php get_footer()?>
