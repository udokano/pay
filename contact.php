<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header();?>
<section class="contact__intro pages">
  <div class="section__inner tc">
    <h1>お問い合わせ</h1>
    <p>当法人の施術・料金についてのご質問や詳しい情報等をご希望の際は、<br class="pc">
      以下のフォームにより簡単にお問い合わせいただけます。<br class="pc">
      後日担当者より折り返しご連絡いたします。</p>
    <p class="note">※ご解約希望の方も、以下のフォームより、その旨を記載して送信のほどをお願いいたします。</p>
    <?php echo breadcrumb_func();?> </div>
</section>
<section class="contact ">
  <div class="section__inner">
    <div class="contact__form">
      <h2>お問い合わせフォーム</h2>
      <div class="contact__form__content"> <?php echo do_shortcode('[mwform_formkey key="31"]');?> </div>
      <!-- ./contact__form__content --> 
      
    </div>
    <!-- ./contact__form --> 
    
  </div>
  <!-- ./section__inner --> 
</section>
<script>
if ( $('.mw_wp_form .error')[0] ) {
	var errorEl = $('.mw_wp_form .error').eq(0);
	var position = errorEl.parent().offset().top;

	$('body,html').delay(200).animate({scrollTop:position - 40}, 600, 'swing');
}
    </script>
<?php get_footer();?>
