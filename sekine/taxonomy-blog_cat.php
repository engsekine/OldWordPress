<?php get_header(); ?>
<main>
<?php get_template_part( 'template-parts/breadcrumb' ) ?>
<article>
<section id="archive-top" class="archive-page-title">
<div class="archive-page__inner">
<h1>Blog</h1>
</div>
</section>
	
<section class="archive-page">
	<div class="archive-page-blog archive-page__inner">
	<div class="archive-page-blog__box">
<?php 
    $term      = wp_get_object_terms($post->ID,'blog_cat'); 
    $term_name = $term[0]->name; //ターム名
    $term_slug = $term[0]->slug; //タームのスラッグ
 ?>
<?php
 $args = array(
  'posts_per_page' => 10, //3件表示(デフォルトは５件)
  'orderby' => 'post_date',
	 'taxonomy' => 'blog_cat',
    'term' => $term_slug,
  'order' => 'DESC', 
  'post_status' => 'publish',
	 'paged' => get_query_var( 'paged', 1 ),
 ); ?>

		<?php $custom_query = new WP_Query( $args );
if ( $custom_query->have_posts() ) : 
    while ( $custom_query->have_posts() ) : 
        $custom_query->the_post(); 
?>

<?php get_template_part( 'template-parts/list-blog' ) ?>

<?php endwhile;
endif;
wp_reset_postdata();
?>


		
	</div>
		<?php get_template_part( 'template-parts/aside-blog' ); ?>
	</div>
</section>
</article>

	
</main>

<?php get_footer(); ?>