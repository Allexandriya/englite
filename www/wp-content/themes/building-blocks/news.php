<?php
/*
  Template Name: News
 */
?>

<?php get_header(); ?>
 <div id="page">
<!--<form style="" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=Englite', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
<p>Введите ваш email:</p><p><input type="text" style="width:140px" name="email"/></p><input type="hidden" value="Englite" name="uri"/><input type="hidden" name="loc" value="en_US"/>
<input type="submit" value="Подписаться" /></form> -->

<?php
   $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
$params = array(
	'posts_per_page' => 5, // количество постов на странице
	'paged'           => $current_page, // текущая страница
	'cat' => 13
);

query_posts($params); ?>


<?php while(have_posts()): the_post(); ?>
<div class="news_block">
	<h2>
		<a href="<?php the_permalink(); ?>" title="Читать далее">
			<?php the_title(); ?>
		</a>
	</h2>
<div class="news_block_cont">
	<p class="date_line">
		<i class="icon-calendar"></i>
		<?php the_date()?>
		<i class="icon-time"></i>
		<?php the_time()?>
	</p><?php the_post_thumbnail();?><?php the_excerpt(); ?>
</div>
<div class="comments_line">
	<a href="<?php the_permalink() ?>#comments">
		<i class="icon-comments"></i>
		<?php comments_number('нет комментариев', '1 коммеатарий', '% комментариев'); ?>
	</a>
	<a href="<?php the_permalink(); ?>#comments">
		<i class="icon-pencil"></i>
		Оставить комментарий
	</a>
<a href="<?php the_permalink(); ?>" class="read_more">
		Читать далее<i class="icon-double-angle-right"></i>
	</a>
</div>
</div>
<?php endwhile; ?>
                    <div class="navigation">
                        <div class="alignleft"><?php next_posts_link('&laquo; Предыдущие записи') ?></div>
                        <div class="alignright"><?php previous_posts_link('Следующие записи &raquo;') ?></div>
                    </div>
</div>
<?php get_footer(); ?>