<footer class="footer">
  <svg class="footer-line" xmlns="http://www.w3.org/2000/svg" width="1322" height="1" viewBox="0 0 1322 1">
    <line id="線_14" data-name="線 14" x2="1322" transform="translate(0 0.5)" fill="none" stroke="#707070" stroke-width="1" />
  </svg>
  <a href="<?php echo esc_url(home_url('/')); ?>" class="footer__logo">
    <?php bloginfo('name'); ?></a>

  <nav class="footer-nav">
    <ul class="footer-nav__ul">
      <li class="footer-nav__list"><a href="<?php echo esc_url(home_url('/company2')); ?>/">会社概要</a></li>
      <li class="footer-nav__list"><a href="<?php echo esc_url(home_url('/recruit')); ?>/">採用情報</a></li>
      <li class="footer-nav__list"><a href="<?php echo esc_url(home_url('/privacy')); ?>/">プライバシーポリシー</a></li>
      <li class="footer-nav__list"><a href="<?php echo esc_url(home_url('/contact')); ?>/">お問い合わせ</a></li> 　
    </ul>
  </nav>　　
  <small class="copyright">
    &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> All rights reserved.</small>
</footer>
<?php wp_footer(); ?>

</html>