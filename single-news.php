<?php get_header(); ?>
  <main>
    <section class="news-detail" id="news-detail">
      <div class="news-detail-wrapper __inner">
        <div class="news-detail-wrapper__ttl">
          <div class="ttl">
            <p>ニュース</p>
            <h1 class="ttl-main" data-en="news"><span>NEWS</span></h1>
          </div>
        </div>
        <div class="__breadcrumb">
          <a href="<?php echo home_url();?>">トップ</a>
          <a href="<?php echo get_page_link(208); ?>">/ NEWS</a>
          <a href="<?php 	echo get_the_permalink();?>">/ <?php the_title(); ?></a>
        </div>
        <div class="news-detail-wrapper__con">
          <div class="news-detail-wrapper__con__cont">
            <div class="news-detail-wrapper__con__cont__date">
              <a href="<?php the_permalink(); ?>">
                <p class="date"><?php the_time('Y.m.d'); ?></p>
              </a>
          </div>
            <div class="news-detail-wrapper__con__cont__txt">
              <a href="<?php the_permalink(); ?>">
                <h2 class="title"><?php the_title(); ?></h2>
                <P class="txt">
                  <?php echo wp_trim_words(get_the_content(), 70, '...'); ?>
                </P>
              </a>
            </div>
          </div>
        </div>
        <div aria-label="pagination">
          <ul class="pagination">
            <?php if (!get_previous_post('news')->ID): ?>
            <?php else: ?>
              <?php previous_post_link('%link', '<< 前へ', TRUE); ?>
            <?php endif;?>
            <li><a href="<?php echo get_permalink(get_page_by_path('news')->ID); ?>" class="all"><span>一覧</span></a></li>
            <?php if (!get_next_post('news')->ID): ?>
            <?php else: ?>
              <?php next_post_link('%link', '次へ >>', TRUE); ?>
            <?php endif;?>
          </ul>
        </div>
      </div>
    </section>
    <?php get_template_part( 'template-parts/contact-top' ); ?>
  </main>
<?php get_footer(); ?>