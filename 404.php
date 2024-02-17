<?php get_header(); ?>
  <main>
    <section class="no-page" id="no-page">
      <div class="no-page-wrapper __inner">
        <div class="__breadcrumb">
          <a href="<?php echo home_url();?>">HOME</a>
          <span>></span>
          <a href="<?php 	echo get_the_permalink();?>">404</a>
        </div>
        <div class="no-page-wrapper__ttl">
          <h2><span>エラー </span>404 NOT FOUND</h2>
        </div>
        <div class="no-page-wrapper__txt">
          <p>お探しのページは見つかりませんでした。</p>
          <p>
            申し訳ございませんが、<a href="<?php echo home_url('/'); ?>">
            こちらのリンク</a>からトップページにお戻りください。
          </p>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>


