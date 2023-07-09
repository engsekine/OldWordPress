<?php
/*
Template Name: LPテンプレート
*/
?>

<?php get_header(); ?>
<main>
	<?php get_template_part( 'template-parts/breadcrumb' ) ?>
	<article class="lp-page">
	<?php the_content(); ?>
	</article>
</main>
<?php get_footer(); ?>