<?php get_header(); ?>
  <main>
    <section class="about" id="about">
      <div class="about-wrapper __inner">
        <!-- <div class="__breadcrumb">
          <a href="<?php echo home_url();?>">HOME</a>
          <span>></span>
          <a href="<?php 	echo get_the_permalink();?>">ABOUT</a>
        </div> -->
        <div class="about-wrapper__ttl">
          <div class="ttl">
            <p>自己紹介</p>
            <h1 class="ttl-main" data-en="About"><span>ABOUT</span></h1>
          </div>
        </div>
        <div class="__breadcrumb">
          <a href="<?php echo home_url();?>">HOME</a>
          <span>></span>
          <a href="<?php 	echo get_the_permalink();?>">ABOUT</a>
        </div>
        <div class="about-wrapper__con">
          <div class="about-wrapper__con__box">
            <h3>氏名</h3>
            <?php the_field('name')?>
          </div>
          <div class="about-wrapper__con__box">
            <h3>事業内容</h3>
            <?php the_field('business')?>
          </div>
          <div class="about-wrapper__con__box">
            <h3>スキル</h3>
            <?php the_field('skills')?>
          </div>
          <div class="about-wrapper__con__box">
            <h3>所在地</h3>
            <?php the_field('address')?>
          </div>
          <div class="about-wrapper__con__box">
            <h3>お問い合わせ</h3>
            <?php the_field('contact')?>
          </div>
          <div class="about-wrapper__con__box">
            <h3>略歴</h3>
            <?php echo the_content(); ?>
          </div>
        </div>
      </div>
    </section>
    <?php get_template_part( 'template-parts/contact-top' ); ?>
  </main>
<?php get_footer(); ?>