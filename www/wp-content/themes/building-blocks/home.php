<?php
/*
Template Name: Home
*/
?>

<?php get_header( 'home' ); ?>
	<div id="page">
		<?php if ( have_posts() ) :
                query_posts('cat=5');
                while ( have_posts() ) : the_post(); //The Loop?>
			<div class="header">
				<div class="separete"></div><h1 class="title"><?php the_title()?></h1><div class="separete"></div>
			</div><?php the_content()?>		
		<?php endwhile; ?>
			
		<?php endif; ?>
	</div>
 <a href="https://plus.google.com/117750914350895677114" rel="publisher" style="display: none;">Google+</a>
<?php get_footer()?>