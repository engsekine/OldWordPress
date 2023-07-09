<?php get_header(); ?>
<main>
	<?php get_template_part( 'template-parts/breadcrumb' ) ?>
	<?php if ( is_post_type_archive( 'engineer_life' ) ) : ?>
	<?php get_template_part( 'template-parts/date-engineer_life' ) ?>
	<?php elseif ( is_post_type_archive( 'blog' ) ) : ?>
	<?php get_template_part( 'template-parts/date-blog' ) ?>
	<?php endif; ?>
</main>
<?php get_footer(); ?>