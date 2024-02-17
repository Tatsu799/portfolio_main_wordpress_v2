<?php get_header(); ?>
  <main>
    <section class="works-detail" id="works-detail">
      <div class="works-detail-wrapper __inner">
        <div class="works-detail-wrapper__ttl">
          <div class="ttl">
            <p>制作実績</p>
            <h1 class="ttl-main" data-en="Works"><span>WORKS</span></h1>
          </div>
        </div>
        <div class="__breadcrumb">
          <a href="<?php echo home_url();?>">HOME</a>
          <span>></span>
          <a href="<?php echo get_page_link(5); ?>">WORKS </a>
          <span>></span>
          <a href="<?php 	echo get_the_permalink();?>"><?php the_title(); ?></a>
        </div>
        <div class="works-detail-wrapper__con">
          <div class="works-detail-wrapper__con__img">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="works-detail-wrapper__con__ttl">
            <h2><?php the_title(); ?> <br class="__tab __sp"><span><?php the_field('demo2'); ?></span></h2>
            <a href="<?php the_field('url')?>"><?php the_field('url')?></a>
          </div>
          <div class="works-detail-wrapper__con__box">
            <div class="works-detail-wrapper__con__box__left">
              <h3 class="detail-txt">詳細</h3>
              <div class="works-detail-wrapper__con__box__left__txt">
                <h3>カテゴリ</h3>
                <p><?php the_field('カテゴリ')?></p>
              </div>
              <div class="works-detail-wrapper__con__box__left__txt">
                <h3>制作範囲</h3>
                <p><?php the_field('制作範囲')?></p>
              </div>
              <div class="works-detail-wrapper__con__box__left__txt">
                <h3>使用ツール</h3>
                <p><?php the_field('使用ツール')?></p>
              </div>
              <div class="works-detail-wrapper__con__box__left__txt">
                <h3>制作期間</h3>
                <p><?php the_field('制作期間')?></p>
              </div>
              <!-- <div class="works-detail-wrapper__con__box__left__txt"> //追加可能
                <h3>費用</h3>
                <p><?php the_field('費用')?></p>
              </div> -->
            </div>
            <div class="works-detail-wrapper__con__box__right">
              <p>
                <?php echo the_content(); ?>
              </p>
            </div>
          </div>
        </div>
        <div class="works-detail-wrapper__gallery">
          <div class="works-detail-wrapper__gallery__ttl">
            <h2>ギャラリー</h2>
          </div>
          <div class="swiper gallery">
            <div class="swiper-wrapper">
              <img class="swiper-slide" src="<?php the_field('img-1')?>" alt="demo-image">
              <img class="swiper-slide" src="<?php the_field('img-2')?>" alt="demo-image">
              <img class="swiper-slide" src="<?php the_field('img-3')?>" alt="demo-image">
              <img class="swiper-slide" src="<?php the_field('img-4')?>" alt="demo-image">
              <img class="swiper-slide" src="<?php the_field('img-5')?>" alt="demo-image">
            </div>
          </div>
        </div>
        <div class="pagination">
          <?php if (!get_previous_post('works')->ID): ?>
          <?php else: ?>
            <?php previous_post_link('%link', '前へ  ＜', TRUE); ?>
          <?php endif;?>
          <a href="<?php echo get_permalink(get_page_by_path('works')->ID); ?>"><p class="__top">一覧</p></a>
          <?php if (!get_next_post('works')->ID): ?>
          <?php else: ?>
            <?php next_post_link('%link', '＞ 次へ', TRUE); ?>
          <?php endif;?>
        </div>
      </div>
    </section>
    <?php get_template_part( 'template-parts/contact-top' ); ?>
  </main>
<?php get_footer(); ?>