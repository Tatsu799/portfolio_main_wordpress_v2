<?php
function my_styles() {
  wp_enqueue_style( 'my_style', get_template_directory_uri() . '/css/style.css');
}
add_action('wp_enqueue_scripts', 'my_styles');

function swiper_scripts() { 
  wp_enqueue_style( 'swiper', get_template_directory_uri() . '/css/swiper-bundle.min.css');
  wp_enqueue_script( 'swiper_js', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'swiper_scripts');

function my_scripts() {
  wp_enqueue_script( 'top-buttonJS', get_template_directory_uri() . '/js/top-button.js', array(), false, true);
  wp_enqueue_script( 'commonJS', get_template_directory_uri() . '/js/common.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'my_scripts');

// カスタムメニュー機能
add_theme_support('menus');

// 管理画面で、アイキャッチ画像を投稿できるようにする
// サムネイル機能の有効化
add_theme_support('post-thumbnails');

//Contact Form7を使用する際に整形機能をoffにする
add_filter('wpcf7_autop_or_not', 'my_wpcf7_autop');
function my_wpcf7_autop()
{
  return false;
}

//reCAPTCHAマークをお問い合わせのみ表示する。
//ContactForm7のお問い合わせページ以外で読み込まないように設定。
function load_recaptcha_js() {
  if ( ! is_page( 'contact' ) ) {
  wp_deregister_script( 'google-recaptcha' );
  wp_dequeue_style( 'contact-form-7' );
  wp_deregister_script( 'contact-form-7' );
  }
  }
  add_action( 'wp_enqueue_scripts', 'load_recaptcha_js',100 );

//head内のヴァージョンを非表示
remove_action('wp_head','wp_generator');

//'ver='を非表示
function remove_cssjs_ver2( $src ) {
  if ( strpos( $src, 'ver=' ) )
      $src = remove_query_arg( 'ver', $src );
  return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver2', 9999 );
add_filter( 'script_loader_src', 'remove_cssjs_ver2', 9999 );
?>