<?php get_header(); ?>
<main>
    <section class="front-page fadeIn">
        <div class="front-page-first-view">
            <div class="front-page-first-view__box" id="particles-js">

                <div class="front-page-first-view__box--cnt front-page__inner">
                    <div class="front-page-first-view__box--cnt--inner">
                        <h1>関根大地のweb制作</h1>
                    </div>
                </div>
                <div class="sld_scroll"><a href="#main-top"><span>SCROLL</span></a></div>
            </div>
        </div>

    </section>
    <section id="main-top" class="front-page front-page-title fadeIn">
        <div class="front-page__inner">
            <h2>Greeting</h2>
        </div>
    </section>
    <section id="particles-js2" class="front-page front-page-about fadeIn">
        <div class="front-page-about__box front-page__inner">
            <div class="front-page-about__box--cnt">
                <div class="front-page-about__box--cnt--01">
					<h3>高品質な作品を提供する</h3>
					<p>「質とスピードにこだわる」サイトを制作します。<br><br>メンテナンスのしやすさを意識しながら、デザインに忠実なコーディングを実現します。</p>
                    <span>関根 大地</span>
                    <p>HTML,CSSの勉強を開始→web制作会社のフロントエンドエンジニア→web制作のフリーランスエンジニア</p>
                    <div class="button05"><a href="<?php echo home_url(); ?>/about/">Read More</a></div>
                </div>
                <div class="front-page-about__box--cnt--02">
                    <div class="tab-area">
                        <div class="tab active tab-facebook">
                            Facebook
                        </div>
                        <div class="tab tab-twitter">
                            Twitter
                        </div>
                    </div>
                    <div class="content-area">
                        <div class="content show">

                            <div class="fb-page" data-href="https://www.facebook.com/EngSekine" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com/EngSekine" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/EngSekine">関根 大地</a></blockquote>
                            </div>


                        </div>
                        <div class="content">
                            <a class="twitter-timeline" href="https://twitter.com/EngSekine?ref_src=twsrc%5Etfw">Tweets by EngSekine</a>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                        </div>
                    </div>


                </div>
                <!--<div class="button05"><a href="#main-solution">Solution</a></div>-->
            </div>
        </div>

    </section>


    <section class="front-page front-page-title fadeIn">
        <div class="front-page__inner">
            <h2>Engineer Life</h2>
        </div>
    </section>
    <article class="front-page front-page-engineer-life fadeIn">
        <div class="front-page__inner engineer-life-slider">
            <?php
            $args = array(
                'numberposts' => 7, //3件表示(デフォルトは５件)
                'post_type' => 'engineer_life', //カスタム投稿タイプ名
                'orderby' => 'post_date',
                'order' => 'ASC', //ランダム表示
                'post_status' => 'publish',
                'post__not_in' => array($post->ID) //表示中の記事を除外
            );
            ?>
            <?php $myPosts = get_posts($args);
            if ($myPosts) : ?>
                <?php foreach ($myPosts as $post) : setup_postdata($post); ?>

                    <div class="front-page__inner--box front-page-engineer-life__box">
                        <div class="front-page-inner--box--cnt front-page-engineer-life__box--cnt">
                            <div class="front-page-engineer-life__box--cnt--inner">
                                <h3><?php the_title(); ?></h3>
                                <span class="front-page-engineer-life__box--cnt--inner--date"><?php the_time('Y-m-d'); ?></span>
                                <?php if (get_field('EntryData_ListImage')) : ?>
                                    <div style="background-image: url('<?php the_field('EntryData_ListImage'); ?>');" class="front-page-engineer-life__box--cnt--inner--img"></div>
                                <?php endif; ?>
                                <p class="front-page-engineer-life__box--cnt--inner--article mh"><?php echo wp_trim_words(get_field('EntryData_ArticleContent'), 52, "…"); ?></p>
                                 <div class="button05"><a href="<?php the_permalink(); ?>">Read More</a></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <div>関連アイテムはまだありません。</div>
            <?php endif;
            wp_reset_postdata(); ?>
        </div>
    </article>


    <section class="front-page front-page-title fadeIn">
        <div class="front-page__inner">
            <h2>Blog</h2>
        </div>
    </section>
    <article class="front-page  fadeIn">
        <div class="front-page-blog">
            <div class="front-page__inner">
                <div class="front-page-blog__box">
                    <?php
                    if (!is_mobile()) {
                        $args = array(
                            'numberposts' => 6, //3件表示(デフォルトは５件)
                            'post_type' => 'blog', //カスタム投稿タイプ名
                            'orderby' => 'post_date',
                            'orderby' => 'DESC', //ランダム表示
                            'post_status' => 'publish',
                            'post__not_in' => array($post->ID) //表示中の記事を除外
                        );
                    } else {
                        $args = array(
                            'numberposts' => 10, //3件表示(デフォルトは５件)
                            'post_type' => 'blog', //カスタム投稿タイプ名
                            'orderby' => 'post_date',
                            'orderby' => 'DESC', //ランダム表示
                            'post_status' => 'publish',
                            'post__not_in' => array($post->ID) //表示中の記事を除外
                        );
                    }
                    ?>
                    <?php $myPosts = get_posts($args);
                    if ($myPosts) : ?>
                        <?php foreach ($myPosts as $post) : setup_postdata($post); ?>
                            <article>
                                <a href="<?php the_permalink(); ?>">
                                    <div data-mh="front-page-blog-mh" class="front-page-blog__box--cnt">
                                        <?php if (get_field('EntryData_ListImage')) : ?>
                                            <div style="background-image: url('<?php the_field('EntryData_ListImage'); ?>');" class="front-page-blog__box--cnt--img" loading="lazy"></div>
                                        <?php else : ?>
                                            <div style="background-image: url('<?php echo home_url('/'); ?>images/no-img.jpg');" class="front-page-blog__box--cnt--img" loading="lazy"></div>
                                        <?php endif; ?>
                                        <h3 class="front-page-blog__box--cnt--title"><?php the_title(); ?></h3>
                                        <?php if (!is_mobile()) : ?>
                                            <p class="front-page-blog__box--cnt--article" data-mh="front-page-blog__box--cnt--article-mh"><?php echo wp_trim_words(get_field('EntryData_ArticleContent'), 52, "…"); ?></p>
                                        <?php endif; ?>
                                        <span class="front-page-blog__box--cnt--date"><?php the_time('Y-m-d'); ?></span>
                                    </div>
                                </a>
                            </article>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <div>関連アイテムはまだありません。</div>
                    <?php endif;
                    wp_reset_postdata(); ?>
                </div>
                <div class="button03"><a href="<?php echo home_url('/'); ?>blog/">Read More</a></div>
            </div>
        </div>
    </article>


    <section id="main-solution" class="front-page front-page-title fadeIn">
        <div class="front-page__inner">
            <h2>Solution</h2>
        </div>
    </section>
    <section class="front-page front-page-solution fadeIn">
        <div class="front-page-solution__box front-page__inner">
            <div class="front-page-solution__box--cnt">
                <div class="front-page-solution__box--cnt--01">
                    <h3>Webサイト制作</h3>
                    <div class="front-page-solution__box--cnt--img" style="background-image: url('<?php echo home_url(); ?>/images/fv_img04.jpg');">
                    </div>
                    <p>低価格高品質のwebサイトを提供します。</p>
                    <div class="button05"><a href="<?php echo home_url(); ?>/make-wp/">More Details</a></div>
                </div>
                <div class="front-page-solution__box--cnt--02">
                    <h3>LPコーディング</h3>
                    <div class="front-page-solution__box--cnt--img" style="background-image: url('<?php echo home_url(); ?>/images/fv_img05.jpg');">
                    </div>
                    <p>デザインデータを元に、LPをコーディングします。</p>
                    <div class="button05"><a href="<?php echo home_url(); ?>/lp-cording/">More Detalis</a></div>
                </div>
                <!--<div class="front-page-solution__box--cnt--03">
					<h3>サイト修正</h3>
					<div class="front-page-solution__box--cnt--img" style="background-image: url('<?php echo home_url(); ?>/images/fv_img06.jpg');">
					</div>
					<p>ご指摘いただいた箇所を修正します。</p>
					<div class="button05"><a href="<?php echo home_url(); ?>/about/#site-renewal">さらに詳しく</a></div>
				</div>-->
            </div>
        </div>
    </section>


    <section id="main-contact" class="front-page front-page-title fadeIn">
        <div class="front-page__inner">
            <h2>Contact</h2>
        </div>
    </section>
    <section class="front-page front-page-contact fadeIn">
        <div class="front-page-contact__box front-page__inner">
            <div class="front-page-contact__box--cnt">
                <div class="front-page-contact__box--cnt01">
                    <h3>Facebookで友達申請</h3>
                    <ol>
                        <li>カメラで下記QRコードを読み取る、またはQRコードの画像をクリック</li>
                        <li>友達申請後、Messengerにてお問い合わせください</li>
                    </ol>
                    <p>カメラで下記QRコードを読み取ってください。</p>
                    <a href="https://www.facebook.com/profile.php?id=100025618028160" target="_blank" rel="noopener noreferrer"><img src="<?php echo home_url(); ?>/images/facebook_qr.png" alt="facebookQRコード" loading="lazy"></a>
                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>