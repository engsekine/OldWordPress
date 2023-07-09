		  <article class="archive-page__inner--box archive-page-blog__box--cnt">
				  <div class="archive-page-blog__box--cnt--inner">
					  <h3><?php the_title(); ?></h3>
					  <span class="archive-page-blog__box--cnt--inner--date"><?php the_time('Y-m-d'); ?></span>
					  <?php if( get_field('EntryData_ListImage') ): ?>
					  <div style="background-image: url('<?php the_field('EntryData_ListImage'); ?>');" class="archive-page-blog__box--cnt--inner--img"></div>

									<?php else : ?>
									<div style="background-image: url('<?php echo home_url( '/' ); ?>images/no-img.jpg');" class="archive-page-blog__box--cnt--inner--img"></div>
					  <?php endif; ?>
					  <p class="archive-page-blog__box--cnt--inner--article mh"><?php echo wp_trim_words(get_field('EntryData_ArticleContent'),52, "…"); ?></p>
					  <div class="button05"><a href="<?php the_permalink(); ?>">Read More</a></div>
				  </div>
		</article>
