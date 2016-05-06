<?php
/*
Template Name: FAQ
*/
?>

<?php get_header(); ?>


	<div id="page">
<div class="header">
				<div class="separete"></div><h1 class="title"><?php the_title()?></h1><div class="separete"></div>
				
			</div>

<div class="description"><h4>Здесь мы постараемся ответить на все вопросы об изучении английского языка по скайпу и обучения в Englite. Изучать английский онлайн в большинстве случаев даже легче, чем оффлайн. Не верите – попробуйте пройти один урок совершенно бесплатно. Если вы не нашли ответа на свой вопрос, пожалуйста, задайте его при помощи формы внизу страницы.</h4></div>
	<div class="questions">
		<?php if ( have_posts() ) :
                query_posts('cat=9');
                while ( have_posts() ) : the_post(); //The Loop?>
		
		<div class="question"><h2 class="trigger"><a href="#"><?php the_title()?></a></h2>
<div class="toggle_container">
        <div class="block">
<?php the_content()?></div></div>
</div>
			
		<?php endwhile; ?>
			
		<?php endif; ?></div>
	</div>

<?php get_footer()?>