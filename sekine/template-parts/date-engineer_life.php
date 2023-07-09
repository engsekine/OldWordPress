<article>
<section id="archive-top" class="archive-page-title">
<div class="archive-page__inner">
<h1>エンジニアの備忘録</h1>
</div>
</section>
<section class="archive-page">
	<div class="archive-page-engineer_life archive-page__inner">
	<div class="archive-page-engineer_life__box">
<?php if(have_posts()): while(have_posts()):the_post(); ?>
	<?php get_template_part( 'template-parts/list-engineer_life' ) ?>
<?php endwhile; endif; wp_reset_postdata(); ?>

		

	</div>
		<?php get_template_part( 'template-parts/aside-engineer_life' ); ?>
	</div>
</section>
	
</article>