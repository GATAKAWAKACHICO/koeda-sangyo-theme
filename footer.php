	<!-- フッター -->
	<footer id="footer">
		
    <!-- 左側 -->
		<div id="info" class="grid">
	  	<!-- ロゴ -->
			<div class="logo">		
  			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php tpl_021_rwd_print_Logo(); ?>
      		<p>
						<?php tpl_021_rwd_print_Logo_name(); ?>
          	<?php tpl_021_rwd_print_Logo_slogan(); ?>
        	</p>
      	</a>
			</div>
			<!-- / ロゴ -->
    
			<!-- 電話番号+受付時間 -->
			<div class="info">
    		<?php tpl_021_rwd_print_tel(); ?>
    		<?php tpl_021_rwd_print_open_time(); ?>
    	</div>
			<!-- / 電話番号+受付時間 -->
		</div>  
		<!-- / 左側 -->
	
  	<!-- 右側 ナビゲーション -->
		<?php wp_nav_menu( array( 'container' => '', 'items_wrap' => '<ul class="footnav">%3$s</ul>','theme_location'=>'footer') );?>
<!-- リンク -->
<?php if( is_front_page() ) : ?>
<ul id="links">
  <li><a href="http://www.love-tokachi.jp/" target="_blank"><img src="wp-content/uploads/2015/05/shien.gif" width="88" height="31" alt="国際ラリー支援歓迎実行委員会"></a></li>
  <li><a href="http://www.rallyjapan.jp/" target="_blank"><img src="wp-content/uploads/2015/05/wrc.gif" width="88" height="31" alt="RALLYJAPAN"></a></li>
  <li><a href="http://www.rally-hokkaido.com/" target="_blank"><img src="wp-content/uploads/2015/05/rally.gif" width="88" height="31" alt="RallyHokkaido"></a></li>
  <li><a href="http://www.mytokachi.jp/" target="_blank"><img src="wp-content/uploads/2015/05/mytoka.gif" width="88" height="31" border="0"></a></li>
  <li><a href="http://www.tokachi.be/" target="_blank"><img src="wp-content/uploads/2015/05/trend.gif" width="88" height="31" border="0"></a></li>
  <li><a href="http://www.hokkaido.doyu.jp/obihiro/" target="_blank"><img src="wp-content/uploads/2015/05/douyu.gif" width="88" height="31" border="0"></a></li>
  <li><a href="http://www.tokachigawa.net/" target="_blank"><img src="/wp-content/uploads/2015/06/otohuke.jpg" width="88" height="31" border="0"></a></li>
  <li><a href="http://www.takken-obihiro.com/" target="_blank"><img src="/wp-content/uploads/2015/06/hokkaido-hudosan.jpg" width="88" height="31" border="1"></a></li>
  <li><a href="http://www.otofuke.jp/" target="_blank"><img src="/wp-content/uploads/2015/06/syokokai.jpg" width="88" height="31" border="1"></a></li>
</ul>
<?php endif; ?>
	</footer>
	<!-- / footer -->

	<p id="copyright">Copyright(c) <?php echo date('Y'); ?> <?php bloginfo('name'); ?> All Rights Reserved. Design by <a href="http://f-tpl.com" target="_blank" rel="nofollow">http://f-tpl.com</a></p>
</div>

<?php wp_footer(); ?>
</body>
</html>