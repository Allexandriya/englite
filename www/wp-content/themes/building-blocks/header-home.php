<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html <?php language_attributes('xhtml'); ?> xmlns="http://www.w3.org/1999/xhtml/">
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="content-type" content="<?php bloginfo('html_type')?>;charset=<?php bloginfo('charset'); ?>"/>
	
	<title><?php make_title()//Uses wp_title by default?></title>
	<meta name="description" content="<?php make_description()?>"/>
	<meta name="keywords" content="<?php if (is_single() && get_tags()) { foreach(get_tags() as $tag){ echo $tag->name . ', '; }}?>"/>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
	<meta name="language" content="<?php bloginfo('language')?>"/>
	<meta name="robots" content="<?php if(!is_404()){echo "index,follow";}else{echo "noindex,follow";}?>"/>
	<link rel="profile" href="http://microformats.org/profile/hcard"/>
	
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" type="text/css" media="screen"/>
	<link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri() ?>/img/favicon.ico"/>

	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/scripts/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/scripts/js.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/scripts/remove.js"></script>

	<?php wp_head()?>
</head>
<body <?php body_class()?> id="home">
	<div id="wrapper">
		<div id="header">
	<nav class="top_menu">
                <div>
                    <div>
                        <a href="#home" class="active">
                            Главная
                        </a><a href="#about" class="">
                            Условия обучения
                        </a><a href="http://englite.ru/about_us#contact" class="">
                            Контакты
                        </a>   
                    </div><div>
			<img src="http://englite.ru/wp-content/uploads/2014/01/skype.png" alt=""> admin.englite
                        <img src="http://englite.ru/wp-content/uploads/2014/01/flag_ru.png" />  +7 (495) 975-93-10 
 			<img src="http://englite.ru/wp-content/uploads/2014/01/flag_ua.png" /> +38 (067) 320-43-60
                        <img src="http://englite.ru/wp-content/uploads/2014/01/mail.png" /> admin@englite.ru
                    </div>
                </div>
            </nav>		
<header>
		<div class="container"><div class="textwidget social">
				<a href="http://vk.com/englite" class="social vk" target="_blank" rel="nofollow"></a>
				<a href="https://www.facebook.com/englite" class="social fb" target="_blank" rel="nofollow"></a>
				<a href="https://plus.google.com/u/0/117750914350895677114/about" class="social gp" target="_blank" rel="nofollow"></a>
				<a href="https://twitter.com/EngLite_school" class="social tw" target="_blank" rel="nofollow"></a>
				<a href="http://www.youtube.com/channel/UCLE_un5mTAIEHpNFBOsdFGQ/feed" class="social yt" target="_blank" rel="nofollow"></a>
			</div>
                        <div class="top_block">
                            <a class="logo" href="http://englite.ru/">
                                   <img src="<?php get_site_url(); ?>/wp-content/uploads/2014/02/EngliteLogoYell2.png" />
                                </a><div class="sign_up">	
                                 <span> Бесплатный<br/>пробный урок</span><span class="arrow"> > </span>
                                <a href="http://englite.ru/trial_lesson" class="btn_sign_up small">
                                <span>Записаться</span>
                                <em></em>
                                </a>
                            </div>
                        </div>                     
                	</div>
			<div class="main_menu">
			<?php $args = array(
				'theme_location'  => 'top',
				'container'       => 'ul',
				'menu_class'      => '', 
				'echo'            => true,
				'link_before'     => '<span>',
				'link_after'      => '</span><em></em>',
				'fallback_cb'     => 'wp_page_menu',
				'show_home'		=> true,
				'depth'           => 0 );
				wp_nav_menu( $args );
			?>

</div>
<div class="slider_box">
 <?php wowslider(27); ?>
                </div>
		</div>

 		
</header>
		<div id="main">	