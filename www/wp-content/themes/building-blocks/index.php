<?php get_header()?>
	<div id="page">
		<?php if ( have_posts() ) : query_posts('cat=13'); while ( have_posts() ) : the_post(); //The Loop?>
			<div class="header">
				<div class="separete"></div><h1 class="title"><?php the_title()?></h1><div class="separete"></div>
				
			</div>
<?php the_content()?>
			<?php posts_nav_link() //Previous and Next page buttons?>
		<?php endwhile; else: //When there are no posts to list (do not confuse with 404.php)?>
			<div class="post">
				<h1 class="title"><?php _e('No posts found','building-blocks')?></h1>
				<div class="page-content"><p><?php _e('There are no posts to display here.','building-blocks')?></p></div>
			</div>
		<?php endif; ?>
	</div>
	<?php get_sidebar()?>
<?php get_footer()?>