<?php get_header(); ?>
  <main>
    <section class="contact" id="contact">
      <div class="contact-wrapper __inner">
        <div class="contact-wrapper__ttl">
          <div class="ttl">
            <p>お問い合わせ</p>
            <h1 class="ttl-main" data-en="Contact"><span>CONTACT</span></h1>
          </div>
        </div>
        <div class="__breadcrumb">
          <a href="<?php echo home_url();?>">HOME</a>
          <span>></span>
          <a href="<?php 	echo get_the_permalink();?>">CONTACT </a>
        </div>
        <div class="contact-wrapper__con">
          <div class="contact-wrapper__con__txt">
            <p>
              お気軽にお問い合わせください。<br>
              3営業日以内にご連絡をさせていただきます。
            </p>
          </div>
          <div class="contact-wrapper__con__form">
            <?php echo do_shortcode('
                [contact-form-7 id="cbea768" title="コンタクトフォームメイン"]
            ')?>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>