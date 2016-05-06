<?php get_header()?>
	<div id="page">
			<div class="header">
				<div class="separete"></div><h1 class="title"><?php _e('Oops! Страница не найдена.','building-blocks')?></h1><div class="separete"></div></div>
			<div class="post-content e404">
				<p><?php _e('Страница, которую вы ищете - не существует.','building-blocks')?></p>
				<p><a href="<?php echo site_url()?>"><?php _e('Вернуться на главную','building-blocks')?></a></p>
			</div>
	</div>
<?php get_footer()?>