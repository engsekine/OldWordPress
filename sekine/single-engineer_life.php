<?php get_header(); ?>
<main>
	<?php get_template_part( 'template-parts/breadcrumb' ) ?>
	<article>
		<section class="single-page">
			<div class="single-page-engineer_life single-page__inner">
				<div class="single-page-engineer_life__box">
<?php if ( have_posts() ) : ?>
  <?php while( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
				<?php if( get_field('EntryData_ListImage') ): ?>
				<div style="background-image: url('<?php the_field('EntryData_ListImage'); ?>');" class="single-page-blog__box--cnt--img"></div>
				<?php endif; ?>
					<span class="single-page-blog__box--cnt--date"><?php the_date(); ?></span>
				<div><?php the_content(); ?></div>
  <?php endwhile;?>
<?php endif; ?>
					<div class="get-page">
					<div class="get-page__prev">
<?php if (get_previous_post()):?>
<?php previous_post_link('%link', '前の記事へ'); ?>
<?php endif; ?>
					</div>
					<div class="get-page__next">
<?php if (get_next_post()):?>
<?php next_post_link('%link', '次の記事へ'); ?>
<?php endif; ?>
					</div>			
					</div>
				</div>
			<?php get_template_part( 'template-parts/aside-engineer_life' ); ?>
			</div>
			
		</section>
	</article>

</main>
<?php get_footer(); ?>