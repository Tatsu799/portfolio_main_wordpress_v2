<?php get_header(); ?>
  <main>
    <section class="news" id="news">
      <div class="news-wrapper __inner">
        <div class="news-wrapper__ttl">
          <div class="ttl">
            <p>ニュース</p>
            <h1 class="ttl-main" data-en="news"><span>NEWS</span></h1>
          </div>
        </div>
        <div class="__breadcrumb">
          <a href="<?php echo home_url();?>">HOME</a>
          <span>></span>
          <a href="<?php 	echo get_the_permalink();?>">NEWS</a>
        </div>
        <div class="news-wrapper__con">
          <h3 class="news-wrapper__con__ttl">All News</h3>
          <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $the_query = new WP_Query( array(
              'post_status' => 'publish',
              'paged' => $paged,
              'category_name' => 'news',
              'posts_per_page' => 4, //ページの表示数変更可能
              'orderby'     => 'date',
              'order' => 'ASC'
            ) );
            if ($the_query->have_posts()) :?><?php
              while ($the_query->have_posts()) : $the_query->the_post();?>
            <div class="news-wrapper__con__cont">
              <div class="news-wrapper__con__cont__date">
                <a href="<?php the_permalink(); ?>">
                  <p class="date"><?php the_time('Y.m.d'); ?></p>
                </a>
              </div>
              <div class="news-wrapper__con__cont__txt">
                <a href="<?php the_permalink(); ?>">
                  <h2 class="title"><?php the_title(); ?></h2>
                  <P class="txt">
                    <?php echo wp_trim_words(get_the_content(), 70, '...'); ?>
                  </P>
                </a>
              </div>
            </div>
          <?php endwhile;?><?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </div>
        <div class="pagination">
          <?php //ページリスト表示処理
          global $wp_rewrite;
          $paginate_base = get_pagenum_link(1);
          if(strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()){
            $paginate_format = '';
            $paginate_base = add_query_arg('paged','%#%');
          }else{
            $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
            user_trailingslashit('page/%#%/','paged');
            $paginate_base .= '%_%';
          }
          echo paginate_links(array(
            'base' => $paginate_base,
            'format' => $paginate_format,
            'total' => $the_query->max_num_pages,
            'mid_size' => 1,
            'current' => ($paged ? $paged : 1),
            'prev_text' => '<<',
            'next_text' => '>>',
          ));
          ?>
          </div>
        </div>
      </div>
    </section>
    <?php get_template_part( 'template-parts/contact-top' ); ?>
  </main>
<?php get_footer(); ?>