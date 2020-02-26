<footer id="site__footer">
  <div class="method__btn"> <a href="<?php echo home_url('/');?>use">ご利用方法について</a> </div>
  <ul class="footer__nav">
    <li><a href="<?php echo home_url('/');?>privacy" class="">プライバシーポリシー </a></li>
    <li><a href="<?php echo home_url('/');?>term">利用規約</a></li>
    <li><a href="<?php echo home_url('/');?>company">特定商取引法に基づく表示</a></li>
    <li><a href="<?php echo home_url('/');?>contact">お問い合わせ</a></li>
    <li><a href="<?php echo home_url('/');?>usces-member">
      <?php if (usces_is_login()): ?>
      マイページ
      <?php else: ?>
      ログイン
      <?php endif; ?>
      </a></li>
  </ul>
  <p class="tc copy">© 創輝会</p>
</footer>
</div>
<!--  ./wrapper -->

<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js?var=1.33"></script>
<?php wp_footer();?>
</body></html>