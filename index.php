<?php get_header(); ?>
  <main>
    <section class="top" id="top">
      <div class="top-wrapper __inner">
        <div class="top-wrapper__ttl">
          <h1 class="text-anime">
            <span class="char">Y</span>
            <span class="char">O</span>
            <span class="char">S</span>
            <span class="char">H</span>
            <span class="char">I</span>
            <span class="char">D</span>
            <span class="char">E</span>
            <span class="char">S</span>
            <span class="char">I</span>
            <span class="char">G</span>
            <span class="char">N</span>
          </h1>
          <p class="txt-1">Web Design</p>
        </div>
        <p class="scroll-text">SCROLL</p>
      </div>
    </section>
    <section class="works-top" id="works-top">
      <div class="works-top-wrapper __inner">
        <div class="works-top-wrapper__ttl">
          <div class="ttl  fade fadeRightTrigger">
            <p>制作実績</p>
            <h2 class="ttl-main" data-en="Works"><span>WORKS</span></h2>
          </div>
        </div>
        <div class="swiper swiper_1">
          <div class="swiper-wrapper">
            <?php
              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
              $the_query = new WP_Query( array(
                'post_status' => 'publish',
                'paged' => $paged,
                'category_name' => 'works',
                // 'posts_per_page' => 3, //ページの表示数変更可能
                'orderby'     => 'date',
                'order' => 'ASC'
              ) );
              if ($the_query->have_posts()) :?><?php
                while ($the_query->have_posts()) : $the_query->the_post();?>
              <div class="swiper-slide">
                <div class="works-top-wrapper__con__box __con">
                  <a href="<?php the_permalink(); ?>">
                    <div class="works-top-wrapper__con__box__img">
                      <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="works-top-wrapper__con__box__txt">
                      <p><span></span><?php the_title(); ?></p>
                      <small><?php the_field('demo1'); ?></small>
                    </div>
                  </a>
                </div>
              </div>  
            <?php endwhile;?><?php endif; ?>
            <?php wp_reset_postdata(); ?>
            </div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="works-top-wrapper__con__btn fade fadeUpTrigger">
          <a href="<?php echo get_page_link(5); ?>"><!-- 本番環境ではID5 -->
            <p>実績一覧</p>
          </a>
        </div>
      </div>
    </section>
    <section class="service-top" id="service-top">
      <div class="service-top-wrapper __inner">
        <div class="service-top-wrapper__ttl">
          <div class="ttl fade fadeRightTrigger">
            <p>サービス</p>
            <h2 class="ttl-main" data-en="Service"><span>SERVICE</span></h2>
          </div>
        </div>
        <div class="service-top-wrapper__con fade fadeUpTrigger">
          <div class="service-top-wrapper__con__box">
            <div class="service-top-wrapper__con__box__top">
              <div class="service-top-wrapper__con__box__top__img">
                <img src="<?php echo get_template_directory_uri(); ?>/image/icon-pc.png">
              </div>
            </div>
            <div class="service-top-wrapper__con__box__ttl">
              <h3>Webサイトデザイン</h3>
            </div>
            <div class="service-top-wrapper__con__box__txt"> 
              <p>
                コーポレートサイト、ランディングページなど、お客様のご希望に沿ったWebサイトのデザインを作成いたします。
                ヒアリングをしっかりさせていただき、目的にそったサイトデザインを作成できるよう心がけております。
              </p>
            </div>
          </div>
          <div class="service-top-wrapper__con__box">
            <div class="service-top-wrapper__con__box__top">
              <div class="service-top-wrapper__con__box__top__img">
                <img src="<?php echo get_template_directory_uri(); ?>/image/icon-html.png">
              </div>
            </div>
            <div class="service-top-wrapper__con__box__ttl">
              <h3>コーディング</h3>
            </div>
            <div class="service-top-wrapper__con__box__txt">
              <p>
                レスポンシブ（スマートフォン）に対応したコーティング、Javascriptを使用した動きのあるサイト作成をするためのコーディングを行います。
              </p>
            </div>
          </div>
          <div class="service-top-wrapper__con__box">
            <div class="service-top-wrapper__con__box__top">
              <div class="service-top-wrapper__con__box__top__img">
                <img src="<?php echo get_template_directory_uri(); ?>/image/icon-wp.png">
              </div>
            </div>
            <div class="service-top-wrapper__con__box__ttl">
              <h3>WordPressを使用<br>
                更新可能なサイト作成
              </h3>
            </div>
            <div class="service-top-wrapper__con__box__txt">
              <p>
                更新が必要なサイトはWordPressを利用しての制作が適しております。
                静的サイトのWordPress化対応、WordPressでの更新が必要なサイト作成を行います。
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="news-top" id="news-top">
      <div class="news-top-wrapper __inner">
        <div class="news-top-wrapper__ttl fade fadeRightTrigger">
          <div class="ttl">
            <p>ニュース</p>
            <h2 class="ttl-main" data-en="news"><span>NEWS</span></h2>
          </div>
        </div>
        <div class="news-top-wrapper__con fade fadeUpTrigger">
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
            <div class="news-top-wrapper__con__cont">
              <div class="news-top-wrapper__con__cont__date">
                <a href="<?php the_permalink(); ?>">
                  <p class="date"><?php the_time('Y.m.d'); ?></p>
                </a>
              </div>
              <div class="news-top-wrapper__con__cont__txt">
                <a href="<?php the_permalink(); ?>">
                  <h3 class="title"><?php the_title(); ?></h3>
                  <P class="txt">
                    <?php echo wp_trim_words(get_the_content(), 70, '...'); ?>
                  </P>
                </a>
              </div>
            </div>
          <?php endwhile;?><?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </div>
        <div class="news-top-wrapper__con__btn fade fadeUpTrigger">
          <a href="<?php echo get_page_link(208); ?>"><!-- 本番環境ではID208 -->
            <p>お知らせ一覧</p>
          </a>
        </div>
      </div>
    </section>
    <section class="about-top" id="about-top">
      <div class="about-top-wrapper __inner">
        <div class="about-top-wrapper__ttl">
          <div class="ttl fade fadeRightTrigger">
            <p>自己紹介</p>
            <h2 class="ttl-main" data-en="About"><span>ABOUT</span></h2>
          </div>
        </div>
        <div class="about-top-wrapper__con">
          <div class="about-top-wrapper__con__box fade fadeUpTrigger">
            <div class="about-top-wrapper__con__box__ttl">
              <h3>人とのつがなりを<br class="__sp">何よりも大切に。</h3>
            </div>
            <div class="about-top-wrapper__con__box__txt">
              <p>
                コミュニケーションを大切に客様の要望をしっかりとお聞きしどのようなサイトを制作していきたいのかを把握した上での制作を心がけております。
              </p>
              <p>    
                ウェブサイト制作を通じての出会いを大切にし一人でも多くの方のお役に立てるように日々努力を重ねております。
              </p>
            </div>
            <div class="about-top-wrapper__con__box__btn">
              <a href="<?php echo get_page_link(9); ?>">
                <p>詳細</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php get_template_part( 'template-parts/contact-top' ); ?>
  </main>
<?php get_footer(); ?>