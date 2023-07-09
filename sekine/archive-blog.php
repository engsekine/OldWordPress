<?php get_header(); ?>
<main>
<?php get_template_part( 'template-parts/breadcrumb' ) ?>
<article>
<section id="archive-top" class="archive-page-title">
<div class="archive-page__inner">
<h1>ブログ</h1>
</div>
</section>
<section class="archive-page">
	<div class="archive-page-blog archive-page__inner">
	<div class="archive-page-blog__box">
<?php
 $args = array(
  'posts_per_page' => 10, //3件表示(デフォルトは５件)
  'post_type' => 'blog', //カスタム投稿タイプ名
  'orderby' => 'post_date',
  'order' => 'DESC', //ランダム表示
  'post_status' => 'publish',
	 'paged' => get_query_var( 'paged', 1 ),
 );
?>
<?php $myPosts = get_posts($args); if($myPosts) : ?>
<?php foreach($myPosts as $post) : setup_postdata($post); ?>

<?php get_template_part( 'template-parts/list-blog' ) ?>
		
<?php endforeach; ?>
<?php
if( function_exists('pagenation') ){ // 関数が定義されていたらtrueになる
    pagenation();
}?>

<?php else : ?>
 <div>関連アイテムはまだありません。</div>
<?php endif; wp_reset_postdata(); ?>
	</div>
		<?php get_template_part( 'template-parts/aside-blog' ); ?>
	</div>
</section>
</article>

	
</main>

<?php get_footer(); ?>