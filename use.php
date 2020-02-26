<?php
/*
Template Name: ご利用方法
*/
?>
<?php get_header();?>
<section class="use__intro pages">
  <div class="section__inner tc">
    <?php echo breadcrumb_func();?>

    <h1>ご利用方法について</h1>

  </div><!-- ./section__inner -->
</section>


 <div class="sub__tit">
    <h2 class="tc">サービスのお申し込み方法</h2>
  </div>


<section class="use__flow">
  <div class="section__inner">

  <ul class="flow__tab" id="tabs">
    <li class="tab__list is-active" id="tab01">WEB上で申し込み</li>
    <li class="tab__list" id="tab02">店舗で申し込み</li>
  </ul>
 </div>
  <!-- ./section__inner -->


  <ul class="use__flow__content">

  <!--


  TAB content 01


  -->

    <li class="is-show" id="tab01">
        <div class="flow__steps">
          <div class="steps__inner">
             <div class="steps__bottom__content flex al-cent">
                <div class="thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/use/flow01.jpg" alt="施術を受けるクリニックとプランを選択">
                </div><!-- ./thumb -->
                <div class="steps__text">
                  <h3 class="steps__tit"><span>STEP1.</span>フォームを入力</h3>
                  <p><a href="<?php echo home_url('/');?>" target="_blank">こちらのページ</a>の購入フォームから施術を受けたいクリニックと月額のプラン（30,000円、50,000円、70,000円、10,0000円）をそれぞれ選んでいただき、選択したら「カートへ入れて注文へ進む」ボタンをクリックしてください。</p>
                </div><!-- .steps__text/ -->
             </div><!-- ./steps__bottom__content -->
          </div><!-- ./steps__inner -->
        </div><!-- ./floe__steps -->

        <div class="flow__steps">
         <div class="steps__inner">
             <div class="steps__bottom__content flex al-cent">
                <div class="thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/use/flow02.jpg" alt="カートの中の内容を確認">
                </div><!-- ./thumb -->
                <div class="steps__text">
                  <h3 class="steps__tit"><span>STEP2.</span>カートの中の内容を確認</h3>
                  <p>カートの中の内容（直前の申し込みフォームで選択した内容）のお間違いがなければ、「次へ」ボタンをクリックしてください。</p>
                </div><!-- .steps__text/ -->
              </div><!-- ./steps__bottom__content -->
          </div><!-- ./steps__inner -->
        </div><!-- ./floe__steps -->
          <div class="flow__steps">
         <div class="steps__inner">
             <div class="steps__bottom__content flex al-cent">
                <div class="thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/use/flow03.jpg" alt="会員登録">
                </div><!-- ./thumb -->
                <div class="steps__text">
                  <h3 class="steps__tit"><span>STEP3.</span>会員登録</h3>
                  <p>写真の画面が表示されましたら、「会員登録がお済みでない方はこちら▼」(写真の下部の入力フォーム)の氏名・メールアドレス・ログインパスワードなどの必要事項をご入力していただき、ご入力が完了いたしましたら「会員登録をして次へ」のボタンをクリックしてください。<span class="fw600">※本サービスのご利用には会員登録が必須となります。</span></p>
                  <p>※<a href="<?php echo home_url('/');?>usces-member/?page=newmember" target="_blank">こちらのページ</a>にて、事前に会員登録することも可能です。</p>
                </div><!-- .steps__text/ -->
              </div><!-- ./steps__bottom__content -->
          </div><!-- ./steps__inner -->
        </div><!-- ./floe__steps -->
          <div class="flow__steps">
         <div class="steps__inner">
             <div class="steps__bottom__content flex al-cent">
                <div class="thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/use/flow04.jpg" alt="会員登録">
                </div><!-- ./thumb -->
                <div class="steps__text">
                  <h3 class="steps__tit"><span>STEP4.</span>お支払い情報</h3>
                  <p>お支払い方法に関しては、今回の定額サービスにおいては<span class="fw600">クレジットカード</span>のみとなりますので、お支払い方法をクレジットカードで選択してください。下の備考欄に何かご記入したい点などがございましたら、ご記入ください。その後、「次へ」ボタンをクリックしてください。</p>
                </div><!-- .steps__text/ -->
              </div><!-- ./steps__bottom__content -->
          </div><!-- ./steps__inner -->
        </div><!-- ./floe__steps -->
         <div class="flow__steps">
         <div class="steps__inner">
             <div class="steps__bottom__content flex al-cent">
                <div class="thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/use/flow05.jpg" alt="会員登録">
                </div><!-- ./thumb -->
                <div class="steps__text">
                  <h3 class="steps__tit"><span>STEP5.</span>お申し込み内容確認</h3>
                  <p>お申し込みした内容・会員登録の情報にお間違いがなければ、『上記内容で注文する』ボタンをクリックしてください。クリックしたら、クレジットカードの決済画面に遷移いたしますので、そこでカード番号を入力してクレジットカード決済をお願い致します。</p>
                </div><!-- .steps__text/ -->
              </div><!-- ./steps__bottom__content -->
          </div><!-- ./steps__inner -->
        </div><!-- ./floe__steps -->
         <div class="flow__steps">
         <div class="steps__inner">
             <div class="steps__bottom__content flex al-cent">
                <div class="thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/use/flow06.jpg" alt="申し込み完了">
                </div><!-- ./thumb -->
                <div class="steps__text">
                  <h3 class="steps__tit"><span>STEP6.</span>申し込み完了</h3>
                  <p>クレジットカートの決済が無事に終了したら、『ご注文内容の確認メール』が届きます。<span class="fw600">こちらのメールは、クリニックにご来院いただく際に、必要なものとなりますので、大切に保存のほどをお願い致します。</span></p>
                  <p>また、クリニックの来院予約は<a href="https://connect-app.net/r_yag/reserve/top" target="_blank">こちらのサイト</a>から行うことが可能です。ご希望の日時・クリニックを選択してご予約くださいませ。</p>
                </div><!-- .steps__text/ -->
              </div><!-- ./steps__bottom__content -->
          </div><!-- ./steps__inner -->
        </div><!-- ./floe__steps -->
    </li>


  <!--


  TAB content 02


  -->

     <li id="tab02">
        <div class="flow__steps">
          <div class="steps__inner">
             <div class="steps__bottom__content flex al-cent">
                <div class="thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/use/flow07.jpg" alt="施術を受けるクリニックとプランを選択">
                </div><!-- ./thumb -->
                <div class="steps__text">
                  <h3 class="steps__tit"><span>STEP1.</span>ご予約</h3>
                  <p>お電話もしくは、<a href="https://connect-app.net/r_yag/reserve/top" target="_blank">こちらのページ</a>の予約フォームからご希望に日時・クリニックを選択いただき、ご予約したクリニックへ来院ください。</p>
                  <p><span class="fw600">※本サービスを実施していないクリニックもあります。ご予約の際はご注意ください。</span></p>
                </div><!-- .steps__text/ -->
             </div><!-- ./steps__bottom__content -->
          </div><!-- ./steps__inner -->
        </div><!-- ./floe__steps -->


         <div class="flow__steps">
          <div class="steps__inner">
             <div class="steps__bottom__content flex al-cent">
                <div class="thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/use/flow08.jpg" alt="施術を受けるクリニックとプランを選択">
                </div><!-- ./thumb -->
                <div class="steps__text">
                  <h3 class="steps__tit"><span>STEP2.</span>ご来院</h3>
                  <p>ご来院した際に、受付スタッフに『継続課金サービス』の説明希望の旨を伝えて、スタッフから本サービスについての説明を受けます。ご不明な点があれば、お気軽にご質問ください。</p>
                </div><!-- .steps__text/ -->
             </div><!-- ./steps__bottom__content -->
          </div><!-- ./steps__inner -->
        </div><!-- ./floe__steps -->

        <div class="flow__steps">
         <div class="steps__inner">
             <div class="steps__bottom__content flex al-cent">
                <div class="thumb">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/use/flow09.jpg" alt="カートの中の内容を確認">
                </div><!-- ./thumb -->
                <div class="steps__text">
                  <h3 class="steps__tit"><span>STEP3.</span>お申し込み</h3>
                  <p>本サービスの説明を受けて、本サービスのお申し込みを希望する方は<a href="<?php echo home_url('/');?>" target="_blank">こちらのページ</a><!-- または、スタッフから提示されたQRコードを読み取って、 -->からお申し込みフォームへ進みます。</p>
                  <p><span class="fw600">以降の流れは、WEBでのお申し込みと同様になります。</span></p>
                </div><!-- .steps__text/ -->
              </div><!-- ./steps__bottom__content -->
          </div><!-- ./steps__inner -->
        </div><!-- ./floe__steps -->

    </li>

  </ul>



</section>


<div class="sub__tit">
    <h2 class="tc">解約方法</h2>
  </div>


<section class="use__flow">
  <div class="section__inner">
    <p class="tc">月額課金サービスのご解約希望の方は、こちらの <!-- ログインしているときはパラメータ付与-->    <?php if (usces_is_login()): ?><a href="<?php home_url('/'); ?>contact?simai=<?php usces_memberinfo('name1') ?><?php usces_memberinfo('name2');?>&youken=ご解約&num=<?php usces_memberinfo('ID');?>&mail=<?php usces_memberinfo('mailaddress1');?>" target="_blank">
            <!-- ログアウト時はエラーするのでパラメーター外す -->
            <?php else: ?>
            <a href="<?php home_url('/'); ?>contact?youken=ご解約" target="_blank">
            <?php endif; ?>お問い合わせフォーム</a>より、ご解約の旨を記載してご送信ください。</p>
</div>
<!-- ./section__inner -->
</section>

<?php get_footer();?>
