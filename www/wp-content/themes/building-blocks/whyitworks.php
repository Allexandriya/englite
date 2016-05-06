<?php
/*
Template Name: WhyItWorks
*/
?>

<?php get_header(); ?>


	<div id="page">
<div class="header">
				<div class="separete"></div><h1 class="title"><?php the_title()?></h1><div class="separete"></div>
				
			</div>
<div class="description">Максимум времени на уроке мы с вами посвятим упражнениям для развития коммуникативных навыков.  Наши методики разработаны специально для индивидуального обучения и позволят вам заговорить по-английски быстро и уверенно. Вы начнете говорить по-английски с первого урока, даже если учите язык с нуля. Разрабатывая индивидуальную методику специально для вас, мы учтем все ваши пожелания, потребности и цели. В Englite вы будете выполнять задания, которые нужны именно вам именно на этом этапе обучения.</div>
	<div class="page-content"><?php the_content()?></div>
<h2 class="small_title">Что необходимо, чтобы начать заниматься уже сейчас?</h2>
		<?php if ( have_posts() ) :
                query_posts('cat=11');
                while ( have_posts() ) : the_post(); //The Loop?>

		<div class="" style="overflow: hidden;"><?php the_content()?></div>
			
		<?php endwhile; ?>
			
		<?php endif; ?>

<?php 
	 query_posts('cat=35');
	 if ( have_posts() ) :
                 while ( have_posts() ) : the_post(); //The Loop?>	
		<div class="action"><?php the_content()?></div>

		<?php endwhile; ?>
<?php endif; ?>	
	</div>
<?php get_footer()?>