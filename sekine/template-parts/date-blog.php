<article>
<section id="archive-top" class="archive-page-title">
<div class="archive-page__inner">
<h1>ブログ</h1>
</div>
</section>
<section class="archive-page">
	<div class="archive-page-blog archive-page__inner">
	<div class="archive-page-blog__box">
<?php if(have_posts()): while(have_posts()):the_post(); ?>
	<?php get_template_part( 'template-parts/list-blog' ) ?>
<?php endwhile; endif; wp_reset_postdata(); ?>

		

	</div>
		<?php get_template_part( 'template-parts/aside-blog' ); ?>
	</div>
</section>
	
</article>