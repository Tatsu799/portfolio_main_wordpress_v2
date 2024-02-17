<?php get_header(); ?>
  <main>
    <section class="policy" id="policy">
      <div class="policy-wrapper __inner">
        <div class="__breadcrumb">
          <a href="<?php echo home_url();?>">HOME</a>
          <span>></span>
          <a href="<?php 	echo get_the_permalink();?>">POLICY</a>
        </div>
        <div class="works-wrapper__ttl">
          <div class="ttl">
            <p>プライバシーポリシー</p>
            <h2 class="ttl-main" data-en="POLICY"><span>POLICY</span></h2>
          </div>
        </div>
        <div class="policy-wrapper__con">
          <?php echo the_content(); ?>
        </div>
      </div>
    </section>
    <?php get_template_part( 'template-parts/contact-top' ); ?>
  </main>
<?php get_footer(); ?>