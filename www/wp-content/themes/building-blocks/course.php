<?php
/*
Template Name: Course
*/
?>

<?php get_header()?><div id="page">
	<div class="header"><div class="separete"></div><h1 class="title"><?php the_title()?></h1><div class="separete"></div></div>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //The Loop?>
		<div class="header">
			<div class="page-content lal"><?php the_content()?></div>
		</div>
		<?php endwhile;endif;?>
	</div>
<?php get_footer()?>