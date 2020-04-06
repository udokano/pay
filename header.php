<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>
<?php bloginfo('title'); ?>
</title>
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">

<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?var=1.1.5">
<?php if (!is_page('usces-cart')): ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php endif; ?>
<script>

/*
リアルタイムバリデーション
------------------------------*/
<?php if (is_home() || is_front_page() || is_single()) : ?>

/* トップページ */
jQuery(document).ready(function(){
jQuery("input['type=radio']").addClass("validate[required]");
jQuery("form").validationEngine('attach', {
    　promptPosition:"topLeft"
  　});
});

<?php endif; ?>

<?php if (is_page('usces-cart')): ?>

/* お客様情報入力ページ */
jQuery(function(){
    jQuery("form").validationEngine();
    jQuery("#mailaddress1").addClass("validate[required]");
     jQuery("#mailaddress2").addClass("validate[required,equals[mailaddress1]]");
    jQuery("#pass01").addClass("validate[required]");
     jQuery("#pass02").addClass("validate[required,equals[pass01]]");

jQuery("#name1").addClass("validate[required]");
jQuery("#name2").addClass("validate[required]");
jQuery("#tel").addClass("validate[required]");


});

/*
戻るボタン押したらバリデーション無効化する
-------------*/
jQuery(function(){
jQuery(".back_cart_button").on("click", function() {
  jQuery("input").removeClass("validate[required]");
  jQuery("input").removeClass("validate[required,equals[mailaddress1]]");
 jQuery("input").removeClass("validate[required,equals[pass01]]");
});
});

<?php endif; ?>

<?php if (is_page('contact')): ?>

/* お問い合わせページ */
jQuery(document).ready(function(){
jQuery("input[name='seimei']").addClass("validate[required]");
jQuery("input[name='your-email']").addClass("validate[required]");
jQuery(".wpcf7-form").validationEngine('attach', {
    　promptPosition:"top"
  　});
});
<?php endif; ?>


<?php if (is_page('usces-member')): ?>

/* 新規会員入会ページ */
jQuery(document).ready(function(){
jQuery("#mailaddress1").addClass("validate[required]");
jQuery("#mailaddress2").addClass("validate[required,equals[mailaddress1]]");
      jQuery("#password1").addClass("validate[required]");
     jQuery("#password2").addClass("validate[required,equals[password1]]");
     jQuery("#name1").addClass("validate[required]");
jQuery("#name2").addClass("validate[required]");
jQuery("#new__member__form").validationEngine('attach', {
    　promptPosition:"topLeft"
  　});
});
<?php endif; ?>

</script>


</head>

<body <?php body_class(); ?> id="front__page">
<div class="wrapper">

<?php if (is_home() || is_front_page() || is_single()) : ?>

<?php else: ?>
  <header id="site__header" >
  <div class="header__inner flex al-cent">
    <div class="header__logo"> <a href="<?php echo home_url('/');?>">創輝会グループ月額通い放題プラン</a> </div>
    <!-- ./header__logo -->

    <div class="menu-trigger" id="js-menu"> <span></span> <span></span> <span></span> </div>
    <nav class="header__nav" id="js-nav">
      <ul class="flex">
        <li><a href="<?php echo home_url('/');?>usces-cart" class="cart-view"><span>カート</span></a></li>
        <li><a href="<?php echo home_url('/');?>privacy"><span>プライバシーポリシー</span></a></li>
        <li><a href="<?php echo home_url('/');?>term"><span>利用規約</span></a></li>
        <li><a href="<?php echo home_url('/');?>company"><span>特商法について</span></a></li>
          <li>
          <?php if (usces_is_login()): ?><!-- ログインしているときはパラメータ付与--><a href="<?php home_url('/'); ?>contact?simai=<?php usces_memberinfo('name1') ?><?php usces_memberinfo('name2');?>&num=<?php usces_memberinfo('ID');?>&mail=<?php usces_memberinfo('mailaddress1');?>">
<!-- ログアウト時はエラーするのでパラメーター外す -->
        <?php else: ?> <a href="<?php echo home_url('/');?>contact">
 <?php endif; ?>お問い合わせ</a></li>
        <li>
          <a href="<?php echo home_url('/');?>usces-member">
<?php if (usces_is_login()): ?>
マイページ<?php else: ?>ログイン<?php endif; ?>
      </a>
    </li>
      </ul>
    </nav>
    <!-- ./header__nav -->
  </div>
  <!-- ./header__inner -->
</header>
<?php endif; ?>
