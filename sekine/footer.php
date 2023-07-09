<footer id="footer" class="footer">
	<div class="footer__container">
		<div class="footer__container--inner">
			<div class="footer__container--inner--top">
				<a href="<?php echo home_url(); ?>/">DAICHI SEKINE</a>
			</div>
			<div class="footer__container--inner--cnt">
				<div class="footer__container--inner--cnt--sitemap">
					<span>Content</span>
					<ul>
						<li><a href="<?php echo home_url(); ?>/about/">自己紹介</a></li>
						<li><a href="<?php echo home_url(); ?>/engineer-life/">エンジニアの備忘録</a></li>
						<li><a href="<?php echo home_url(); ?>/blog/">ブログ一覧</a></li>
						
						
					</ul>
				</div>
				<div class="footer__container--inner--cnt--blog">
					<span>Blog</span>
					<?php 
					wp_nav_menu( array( 
						'theme_location' => 'blog-list' 
					) ); 
					?>
				</div>
				<div class="footer__container--inner--cnt--solution">
					<span>Solution</span>
						<?php 
					wp_nav_menu( array( 
						'theme_location' => 'solution-list' 
					) ); 
					?>
				</div>
			</div>
				<div class="footer__container--inner--sns">
					<ul>
						<li><a href="https://www.facebook.com/profile.php?id=100025618028160" target="_blank" rel="noopener noreferrer"><img src="<?php echo home_url(); ?>/images/icon_facebook.png" alt="facebook"></a></li>
						<li><a href="https://twitter.com/EngSekine" target="_blank" rel="noopener noreferrer"><img src="<?php echo home_url(); ?>/images/icon_twitter.png" alt="twitter"></a></li>
						<li><a href="https://www.instagram.com/EngSekine" target="_blank" rel="noopener noreferrer"><img src="<?php echo home_url(); ?>/images/icon_instagram.png" alt="instagram"></a></li>
					</ul>
				</div>
		</div>
	</div>
	<div class="footer__copyright">
		<small>Copyright © 2021 DAICHI SEKINE All Rights Reserved.</small>
	</div>
</footer>

<?php get_template_part( 'js' );?>
</body>
</html>