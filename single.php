<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php the_title(); ?></title>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?var=1.1.2">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <?php wp_head();?>
<script>

/*
リアルタイムバリデーション
------------------------------*/


/* トップページ */


jQuery(document).ready(function(){
jQuery("#radio__out > input").addClass("validate[required]");

jQuery("#form").validationEngine('attach', {
    　promptPosition:"topLeft"
  　});
});
/* リロードフォームクリア */

window.onpageshow = function() {
  $("#form").each(function(){
    $("input[type='radio']").prop("checked",false);
    $("#txt").val("");
    $("textarea").val("");
  });
}

</script>

</head>
<body <?php body_class(); ?> id="front__page">

<div class="wrapper">
 <form action="<?php echo USCES_CART_URL ?>" method="post" id="form">
<header class="key__visual">
  <div class="content">
    <div class="key__visual__texts">
      <h1 class="">創輝会グループ<br>
      <span class="bold"><em>月額</em><strong>通い補題プラン</strong></span></h1>
      <p class="cach__text">定額で指定の施術が何度でも受けられるサービスです。<br>プランにない施術でも別途ご相談可能ですので、お気軽にスタッフまでご相談ください。</p>
    </div>
    <!-- ./key__visual__texts -->

    <div class="key__visual__nots__list">
          <p class="list__top">ご利用の際の注意点</p>
          <ul>
            <li>※導入機械は医院によって異なる場合がありますので、予めご確認いただいた上でご利用ください。</li>
            <li>※医師の判断により、同日に合わせて治療が出来ない場合がございます。</li>
            <li>※水光注射はスタンダードカクテル3ccとなります。</li>
            <li>※水光注射の針は1度の施術につき1つ付属します。塗る麻酔も付属しております。</li>
            <li>※全てのプラン内の治療可能範囲は全顔のみとなります。首、お体への照射は別途ご相談ください。</li>
            <li>※ダブロorウルトラフォーマー3は300ショットとなります。</li>
            <li>※チャージ利用不可・他のキャンペーンとの併用不可。</li>
            <li>※ご購入頂いたクリニックのみでのご利用となります。</li>
          </ul>
    </div><!-- ./key__visual__nots__list -->
</div>
  <!-- ./content -->


    <!------------


    form__start


    ------------------->



 <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); usces_the_item("plan"); ?>
      <?php usces_have_skus();?>

<div class="shop__select__area">
<div class="select__wrap">
<p><span>①</span>ご利用クリニックの選択</p>
<?php echo usces_the_itemOption("ご利用クリニック");?>
</div><!-- ./select__wrap -->
</div><!-- ./shop__select__area -->

</header>
<!-- ./key__visual -->



<!-- ラジオボタン出力 -->

<div id="radio__out">
<?php echo usces_the_itemOption("コース選択");?>
</div>

<!-- ./ラジオボタン -->


      <div class="error_message tc">
        <?php usces_singleitem_error_message($post->ID, usces_the_itemSku('return')); ?>
      </div>


<!-- PLAN01 -->

<section class="select__plan__area">
<div class="select__plan__wrapper">
  <div class="content flex">

  <div class="row__left">
        <p class="price">30,000円プラン</p>
          <ol class="sp">
  <li><span class="num_sq num__bg01">1</span>ファビュラスピーリング</li>
  <li><span class="num_sq num__bg01">2</span>YAGレーザートーニング＋マスクパック</li>
  <li><span class="num_sq num__bg01">3</span>PICOレーザートーニング＋マスクパック</li>

  </ol>
 <div class="select__btn" id="move__point01"></div>
  </div><!-- ./row__left -->


  <div class="row__right pc">
  <ol>
  <li><span class="num_sq num__bg01">1</span>ファビュラスピーリング</li>
  <li><span class="num_sq num__bg01">2</span>YAGレーザートーニング＋マスクパック</li>
  <li><span class="num_sq num__bg01">3</span>PICOレーザートーニング＋マスクパック</li>

  </ol>

  </div><!-- ./row__right -->




  </div><!-- ./content -->

</div><!-- ./select__plan__wrapper -->

</section>

<!-- ./PLAN01 -->

<!-- PLAN02 -->

<section class="select__plan__area">
<div class="select__plan__wrapper">
  <div class="content flex">

  <div class="row__left">
        <p class="price">50,000円プラン</p>
         <ol class="sp">
  <li><span class="num_sq num__bg01">1</span>ファビュラスピーリング</li>
  <li><span class="num_sq num__bg01">2</span>YAGレーザートーニング＋マスクパック</li>
  <li><span class="num_sq num__bg01">3</span>PICOレーザートーニング＋マスクパック</li>
  <li><span class="num_sq num__bg02">4</span>PICOフラクショナル＋マスクパックor PICO FX＋マスクパック</li>
  <li><span class="num_sq num__bg02">5</span>プラズマシャワー </li>
  </ol>

         <div class="select__btn" id="move__point02"></div>
  </div><!-- ./row__left -->


  <div class="row__right pc">
  <ol>
  <li><span class="num_sq num__bg01">1</span>ファビュラスピーリング</li>
  <li><span class="num_sq num__bg01">2</span>YAGレーザートーニング＋マスクパック</li>
  <li><span class="num_sq num__bg01">3</span>PICOレーザートーニング＋マスクパック</li>
  <li><span class="num_sq num__bg02">4</span>PICOフラクショナル＋マスクパックor PICO FX＋マスクパック</li>
  <li><span class="num_sq num__bg02">5</span>プラズマシャワー </li>
  </ol>

  </div><!-- ./row__right -->

  </div><!-- ./content -->

</div><!-- ./select__plan__wrapper -->

</section>

<!-- ./PLAN02 -->

<!-- PLAN03 -->

<section class="select__plan__area">
<div class="select__plan__wrapper">
  <div class="content flex">

  <div class="row__left">
        <p class="price">70,000円プラン</p>
         <ol class="sp">
  <li><span class="num_sq num__bg01">1</span>ファビュラスピーリング</li>
  <li><span class="num_sq num__bg01">2</span>YAGレーザートーニング＋マスクパック</li>
  <li><span class="num_sq num__bg01">3</span>PICOレーザートーニング＋マスクパック</li>
  <li><span class="num_sq num__bg02">4</span>PICOフラクショナル＋マスクパックor PICO FX＋マスクパック</li>
  <li><span class="num_sq num__bg02">5</span>プラズマシャワー </li>
    <li><span class="num_sq num__bg03">6</span>水光注射</li>
  </ol>

         <div class="select__btn" id="move__point03"></div>
  </div><!-- ./row__left -->


  <div class="row__right pc">
  <ol>
  <li><span class="num_sq num__bg01">1</span>ファビュラスピーリング</li>
  <li><span class="num_sq num__bg01">2</span>YAGレーザートーニング＋マスクパック</li>
  <li><span class="num_sq num__bg01">3</span>PICOレーザートーニング＋マスクパック</li>
  <li><span class="num_sq num__bg02">4</span>PICOフラクショナル＋マスクパックor PICO FX＋マスクパック</li>
  <li><span class="num_sq num__bg02">5</span>プラズマシャワー </li>
      <li><span class="num_sq num__bg03">6</span>水光注射</li>

  </ol>

  </div><!-- ./row__right -->

  </div><!-- ./content -->

</div><!-- ./select__plan__wrapper -->

</section>

<!-- ./PLAN03 -->

<!-- PLAN04 -->

<section class="select__plan__area">
<div class="select__plan__wrapper">
  <div class="content flex">

  <div class="row__left">
        <p class="price">100,000円プラン</p>
         <ol class="sp">
  <li><span class="num_sq num__bg01">1</span>ファビュラスピーリング</li>
  <li><span class="num_sq num__bg01">2</span>YAGレーザートーニング＋マスクパック</li>
  <li><span class="num_sq num__bg01">3</span>PICOレーザートーニング＋マスクパック</li>
  <li><span class="num_sq num__bg02">4</span>PICOフラクショナル＋マスクパックor PICO FX＋マスクパック</li>
  <li><span class="num_sq num__bg02">5</span>プラズマシャワー </li>
    <li><span class="num_sq num__bg03">6</span>水光注射</li>
    <li><span class="num_sq num__bg03">7</span>ダブロ or ウルトラフォーマー3 </li>
  </ol>

         <div class="select__btn" id="move__point04"></div>
  </div><!-- ./row__left -->


  <div class="row__right pc">
  <ol>
  <li><span class="num_sq num__bg01">1</span>ファビュラスピーリング</li>
  <li><span class="num_sq num__bg01">2</span>YAGレーザートーニング＋マスクパック</li>
  <li><span class="num_sq num__bg01">3</span>PICOレーザートーニング＋マスクパック</li>
  <li><span class="num_sq num__bg02">4</span>PICOフラクショナル＋マスクパックor PICO FX＋マスクパック</li>
  <li><span class="num_sq num__bg02">5</span>プラズマシャワー </li>
      <li><span class="num_sq num__bg03">6</span>水光注射</li>
       <li><span class="num_sq num__bg03">7</span>ダブロ or ウルトラフォーマー3 </li>

  </ol>

  </div><!-- ./row__right -->

  </div><!-- ./content -->

</div><!-- ./select__plan__wrapper -->

</section>

<!-- ./PLAN04 -->

<div class="cart__in">
<div class="content">

<div class="cart__btn__cont">

 <?php usces_the_itemSkuButton('カートに入れて注文に進む');?>
</div>

</div>
</div>

 <?php endwhile; endif; ?>

 </form>
<?php get_footer(); ?>

