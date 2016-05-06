<?php get_header()?>
	<div id="page" class="single_post">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //The Loop?>
		<div <?php post_class()?>>
			<h1 class="title"><?php the_title()?></h1>
			<p><i class="icon-calendar"></i><?php the_date()?></p>
			<div class="post-content"><?php the_content()?></div>
			<?php if(has_tag()){the_tags( _e('Keywords','building-blocks') . ': ', ', ');}?>
			<?php wp_link_pages() //Page buttons for multi-page posts?>
		</div>
<h2 id="comments_title">Комментарии:</h2>
		<?php comments_template()?>
		<?php endwhile;endif;?>
	</div>
<?php get_footer()?>