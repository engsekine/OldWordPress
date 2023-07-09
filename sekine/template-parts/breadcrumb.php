<div class="breadcrumb-cnt">
	<a href="<?php echo home_url(); ?>">ホーム</a>
	<?php if ( is_post_type_archive( 'engineer_life' ) ) : ?>
	<span>　>　</span><span>エンジニアの備忘録</span>
	<?php elseif ( is_post_type_archive( 'blog' ) ) : ?>
	<span>　>　</span><span>ブログ</span>
	
	<?php elseif ( is_tax() ) : ?>
	<span>　>　</span><a href="<?php echo home_url(); ?>/blog/">ブログ</a><span>　>　</span><span>ブログカテゴリ</span>
	
	<?php elseif ( is_singular( 'engineer_life' ) ) : ?>
	<span>　>　</span><a href="<?php echo home_url(); ?>/engineer-life/">エンジニアの備忘録</a><span>　>　</span><span><?php the_title(); ?></span>


	<?php elseif ( is_singular( 'blog' ) ) : ?>
	<span>　>　</span><a href="<?php echo home_url(); ?>/blog/">ブログ</a><span>　>　</span><span><?php the_title(); ?></span>
	
	<?php elseif ( is_page( ) ) : ?>
	<span>　>　</span><span><?php the_title(); ?></span>
	
	
	<?php else: ?>

	<?php endif; ?>
</div>
