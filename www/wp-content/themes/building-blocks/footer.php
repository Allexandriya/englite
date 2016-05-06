		</div>
	<div id="zagl"></div></div>
		<div id="footer">

		<div>
                    <div>
                       <div class="footer_menu">
			<?php $args = array(
				'theme_location'  => 'bottom',
				'container'       => 'false',
				'menu_class'      => '', 
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'show_home'		=> true,
				'depth'           => 0 );
				wp_nav_menu( $args );
			?>
</div><div class="footer_contacts">
				<img src="http://englite.ru/wp-content/uploads/2014/01/skype.png" />
				<span>admin.englite</span>
				<img src="http://englite.ru/wp-content/uploads/2014/01/flag_ru.png" /><span> +7 (495) 975-93-10  </span>
				<img src="http://englite.ru/wp-content/uploads/2014/01/flag_ua.png" /><span>+38 (067) 320-43-60 </span>
                            	<img src="http://englite.ru/wp-content/uploads/2014/01/mail.png" />
				<span>admin@englite.ru</span>
<span style="width: 100%; text-align: center; font-size: 13px; display: block; margin-top: 10px;">C 10:00 до 22:00 (по московскому времени) мы в online!</span>

                        </div>
                    </div><div>
			<h5>Подружиться с нами:</h5>
                     	<div class="social">
				<a href="http://vk.com/englite" class="social vk" target="_blank" rel="nofollow"></a>
				<a href="https://www.facebook.com/englite" class="social fb" target="_blank" rel="nofollow"></a>
				<a href="https://plus.google.com/u/0/117750914350895677114/about" class="social gp" target="_blank" rel="nofollow"></a>
				<a href="https://twitter.com/EngLite_school" class="social tw" target="_blank" rel="nofollow"></a>
				<a href="http://www.youtube.com/channel/UCLE_un5mTAIEHpNFBOsdFGQ/feed" class="social yt" target="_blank" rel="nofollow"></a>
</div>
                    </div>
                </div>
		<span class="rights"><a  href="<?php echo site_url()?>">Englite &copy;</a> All rights reserved - 2013-2014</span>	
		</div>
	<?php wp_footer()?>

<script type="text/javascript">
			$(function() {			
				$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );
			});
		</script>

<!-- Yandex.Metrika informer -->
<a style="display: none"href="https://metrika.yandex.ru/stat/?id=24222013&amp;from=informer"
target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/24222013/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:24222013,lang:'ru'});return false}catch(e){}"/></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter24222013 = new Ya.Metrika({id:24222013,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div style="display: none;"><img style="display: none;" src="//mc.yandex.ru/watch/24222013" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-47928686-1']);
  _gaq.push(['_setDomainName', 'englite.ru']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</html>