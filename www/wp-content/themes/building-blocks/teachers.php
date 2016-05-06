<?php
/*
Template Name: teachers
*/
?>

<?php get_header(); ?>


	<div id="page">
<div class="header">
				<div class="separete"></div><h1 class="title"><?php the_title()?></h1><div class="separete"></div>
				
			</div>
<div class="description">Команда Englite делает ставку на результат, который нужен вам. Уроки английского онлайн позволят вам быстро и комфортно овладеть иностранным языком. <BR>Наши преподаватели – опытные специалисты, которые живут своей профессией и готовы поделиться знаниями с теми, кто действительно хочет научиться. Команда практиков Englite делает ставку на результат, который нужен вам. Большинство – обладатели международных сертификатов, участники профильных конференций и тренингов. Из списка лучших из лучших, которых мы отыскали специально для вас, вы можете сами выбрать приглянувшегося вам профессионала. Приглашаем вас прямо сейчас бесплатно пройти пробный урок, это займет всего 20-30 минут.<br/> Нажмите <span class="green">"Больше о преподавателе"</span>, чтобы просмотреть дополнительную информацию и просмотреть видео<a href="http://www.englite.ru/anketa" class="btn_sign_up big">
        <span>Записаться</span>
        <em></em>
    </a></div>
	<div class="page-content"><?php the_content()?></div>

		<?php if ( have_posts() ) :
                query_posts('cat=4');
                while ( have_posts() ) : the_post(); //The Loop?>
		<div class="teachers_block"><div class="teachers"><div class="before"></div><div class="info"><?php the_content()?></div>
</div>
</div>
</div>
			
		<?php endwhile; ?>
			
		<?php endif; ?>
	</div>
<?php get_footer()?>