<footer class="footer" id="footer">
  <div class="footer-wrapper __inner">
    <nav class="footer-wrapper__nav">
    <?php
      $args = array(
        'menu' => 'footer-menu',
        'menu_class' => 'footer-wrapper__nav__list',
        'container' => false,
      );
      wp_nav_menu($args);
      ?>
    </nav>
  </div>
  <div class="footer-wrapper__copyright">
    <small>© 2023 TATSUYAYOSHIIKE All Rights Reserved.</small>
  </div>
  </footer>
  <div id="scroll-top" class="scroll-top">TOP</div>
  <?php wp_footer(); ?>
</body>
</html>