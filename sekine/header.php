<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<?php if ( is_front_page() || is_post_type_archive() || is_tax()): ?>	
	<title>Daichi Sekine Eng</title>
<?php else : ?>
		<title><?php the_title(); ?> | Daichi Sekine Eng</title>
<?php endif; ?>	
<?php if ( is_post_type_archive() || is_tax()): ?>
	<meta name="robots" content="noindex,follow">
<?php endif; ?>
	
	
	
	
	<?php if ( !is_front_page() ) : ?>
		<link rel="prerender" href="<?php echo esc_url( home_url() ); ?>">
	<?php endif; ?>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!--▼head add-->	
	<?php wp_head(); ?>

	
	<!--▼css add-->
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo home_url( '/' ); ?>wp-content/themes/sekine/style.css" />
	<link rel="stylesheet" href="<?php echo home_url( '/' ); ?>wp-content/themes/sekine/css/main.css" />
	<!--▼front-pag add-->
	<?php if ( is_front_page() ) : ?>
	<link rel="stylesheet" href="<?php echo home_url( '/' ); ?>wp-content/themes/sekine/css/slick-theme.css"　/>
	<link rel="stylesheet" href="<?php echo home_url( '/' ); ?>wp-content/themes/sekine/css/slick.css"/>
	<link rel="stylesheet" href="<?php echo home_url( '/' ); ?>wp-content/themes/sekine/front-page/css/front-page.css"　/>
	<?php endif; ?>
	
	<!--individual css-->
	
	<!--archive css-->
	<?php if ( is_post_type_archive() || is_tax () ) : ?>
	<link rel="stylesheet" href="<?php echo home_url( '/' ); ?>wp-content/themes/sekine/archive/css/archive.css"/>
	<?php endif; ?>
	
	<!--single css-->
	<?php if ( is_singular() ) : ?>
	<link rel="stylesheet" href="<?php echo home_url( '/' ); ?>wp-content/themes/sekine/singular/css/singular.css"/>
	<?php endif; ?>
	
	
	<?php if (is_page( $page )) : ?>
	<?php
     $page = get_post( get_the_ID() );
     $slug = $page->post_name;
	?>
	<link rel="stylesheet" href="<?php echo home_url( '/' ); ?>wp-content/themes/sekine/page/css/template.css"/>
	<link rel="stylesheet" href="<?php echo home_url( '/' ); ?>wp-content/themes/sekine/lp/<?php echo $slug; ?>.css"/>
	<?php endif; ?>

	
	<!--▼js add-->
	<!--jquery add-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<!--slick add-->
	<?php if ( is_front_page() ) : ?>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo home_url( '/' ); ?>wp-content/themes/sekine/js/particles.min.js"></script> <!-- stats.js lib -->
	<?php endif; ?>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>

</head>
	
<body>

<header id="header" class="header">
  <div class="header__container">
	  <div class="header__container--inner">
		  <div><a href="<?php echo home_url(); ?>/">DAICHI SEKINE</a></div>
	  
    <div id="nav-toggle">
      <div>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
	  </div>
<!-- Navigation -->
<nav id="gloval-nav" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
<div id="navi">
	<div class="navi-in">
		<div><a href="<?php echo home_url(); ?>/">TOP</a></div>
		<ul>
			<li><a href="<?php echo home_url(); ?>/about/">自己紹介</a></li>
			<li><a href="<?php echo home_url(); ?>/engineer-life/">エンジニアの備忘録</a></li>
			<li><a href="<?php echo home_url(); ?>/blog/">ブログ一覧</a></li>
		</ul>
	</div>
</div>
</nav>
<!-- Navigation -->
  </div>
</header>
