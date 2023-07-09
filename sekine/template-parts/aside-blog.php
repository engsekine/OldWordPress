<aside>
	<nav class="sidebar aside-blog">
		<div class="sidebar__inner">
			<section class="sidebar__profile">
				<span>関根　大地</span>
				<p>HTML,CSSの勉強を開始→web制作会社のフロントエンドエンジニア→web製作のフリーランスエンジニア</p>
			</section>
			<section class="sidebar__monthly-list">
				<h2>アーカイブ</h2>
				<ul class="monthly-list">
					<?php wp_get_archives('type=monthly&post_type=blog&show_post_count=1'); ?>
				</ul>
			</section>
			<section class="sidebar__blog">
				<h2>エンジニアの備忘録</h2>
							
<?php
 $args = array(
  'numberposts' => 10, //3件表示(デフォルトは５件)
  'post_type' => 'engineer_life', //カスタム投稿タイプ名
  'orderby' => 'post_date',
  'order' => 'DESC', //ランダム表示
  'post_status' => 'publish',
 );
?>
<?php $myPosts = get_posts($args); if($myPosts) : ?>
<?php foreach($myPosts as $post) : setup_postdata($post); ?>
				<article>
					<a href="<?php the_permalink(); ?>">
						<section class="aside-blog__box">
							<div class="aside-blog__box--cnt">
								<div class="aside-blog__box--cnt--inner">
									<h3 class="aside-blog__box--cnt--title"><?php the_title(); ?></h3>
									<?php if( get_field('EntryData_ListImage') ): ?>
									<div style="background-image: url('<?php the_field('EntryData_ListImage'); ?>');" class="aside-blog__box--cnt--inner--img"></div>
									<?php else : ?>
									<div style="background-image: url('<?php echo home_url( '/' ); ?>images/no-img.jpg');" class="aside-blog__box--cnt--inner--img"></div>
									<?php endif; ?>
									<p class="aside-blog__box--cnt--inner--article"><?php echo wp_trim_words(get_field('EntryData_ArticleContent'),52, "…"); ?></p>
								</div>
							</div>
						</section>
					</a>
				</article>
				<?php endforeach; ?>
				<?php else : ?>
				<div>関連アイテムはまだありません。</div>
				<?php endif; wp_reset_postdata(); ?>
				
			</section>
		</div>
	</nav>
</aside>