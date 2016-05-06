<?php
/*
Template Name: reviews
*/
?>

<?php get_header(); ?>


	<div id="page">
<div class="header">
				<div class="separete"></div><h1 class="title"><?php the_title()?></h1><div class="separete"></div>
				
			</div>
<div class="description"><h3>Они уже попробовали учить английский по скайпу и рекомендуют вам:</h3></div>
	<div class="page-content"><?php the_content()?></div>
<div class="rew_cont">
		<?php if ( have_posts() ) :
                query_posts('cat=12');
                while ( have_posts() ) : the_post(); //The Loop?>
<div class="rew_block">
<h2 class="rew_header"><?php the_title()?></h2>
		<div class="rew"><?php the_content()?></div>
			</div>
		<?php endwhile; ?>
			
		<?php endif; ?>
</div>
	<div class="description" style="margin: auto; width: 85%; margin-top: 34px; font-size: 20px; clear: both;">Спасибо всем, кто уже добавил свой комментарий об уроках в Englite.<br/> Ваш отзыв вы можете оставить в форме ниже.</div>

<?php echo do_shortcode('[xyz-cfm-form id=2]'); ?>

	</div>
<?php get_footer()?>