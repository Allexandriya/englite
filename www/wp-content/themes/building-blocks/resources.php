<?php
/*
  Template Name: Resources
 */
?>

<?php get_header(); ?>
<?php
   $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
$params = array(
	'posts_per_page' => 5, // количество постов на странице
	'paged'           => $current_page, // текущая страница
	'cat' => 24
);

query_posts($params); ?>
 <div id="page">
 
<?php while(have_posts()): the_post(); ?>
<div class="res_block">
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
	</p>
    <?php the_excerpt(); ?>
</div>
<div class="comments_line">
	<a href="<?php the_permalink() ?>#comments">
		<i class="icon-comments"></i>
		<?php comments_number('нет комментариев', '1 комменатрий', '% комментариев'); ?>
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