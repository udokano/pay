/*


FORM 関連


-------------------------------------*/

/*
いらないラベル削除
*/

jQuery(".iopt_label").remove();


/* ラベルクラスナンバリング */

jQuery(function ($) {

  jQuery("#radio__out label").each(function (i) {
    jQuery(this).attr('id', 'label' + (i + 1));

  });


  jQuery("#radio__out input").each(function (i) {
    jQuery(this).attr('id', 'type' + (i + 1));

  });

  //LABEL要素にfor追加ナンバリング
  jQuery("#radio__out label").each(function (i) {
    jQuery(this).attr('for', 'type' + (i + 1));

  });

  //selectエリアID付与
  jQuery("#select__shop select").attr("id", "select__shop__list");


  /* -----

  ラジオボタン ラベルテキスト設置場所変更

  ---------------------------------------*/

  //テキスト変更
  $("#label1").text("3万円の通い放題プランに申し込む");
  $("#label2").text("5万円の通い放題プランに申し込む");
  $("#label3").text("7万円の通い放題プランに申し込む");
  $("#label4").text("10万円の通い放題プランに申し込む");

  //設置場所変更
  $("#label1").prependTo("#move__point01");
  $("#label2").prependTo("#move__point02");
  $("#label3").prependTo("#move__point03");
  $("#label4").prependTo("#move__point04");

  //FVプルダウンメニュー選択後スクロール

  $("#select__shop__list").on("change", function () {
    const scpos = $("#scroll__pos").offset().top;
    jQuery("html,body").animate({ scrollTop: scpos }, '500');
  });


  //ラジオボタンクリックスタイリング,選択後スクロール
  $("#radio__out").on("change", function () {
    const radio = $(".iopt_radio_label");
    const scroll_pos = $("#cart__pos").offset().top;
    jQuery("html,body").animate({ scrollTop: scroll_pos }, '500');
    if ($('[value="30%2C000%E5%86%86%E3%83%97%E3%83%A9%E3%83%B3"]').prop('checked')) {
      radio.removeClass("check");
      $("#label1").addClass("check");
    }
    if ($('[value="50%2C000%E5%86%86%E3%83%97%E3%83%A9%E3%83%B3"]').prop('checked')) {
      radio.removeClass("check");
      $("#label2").addClass("check");
    }
    if ($('[value="70%2C000%E5%86%86%E3%83%97%E3%83%A9%E3%83%B3"]').prop('checked')) {
      radio.removeClass("check");
      $("#label3").addClass("check");
    }
    if ($('[value="100%2C000%E5%86%86%E3%83%97%E3%83%A9%E3%83%B3"]').prop('checked')) {
      radio.removeClass("check");
      $("#label4").addClass("check");
    }
  });

});
/*

TAB MENU

-------------------------------------*/

jQuery('.tab__list').click(function () {
  //セレクタ設定
  var thisElm = $(this);
  var thisTabWrap = thisElm.parents('.use__flow');
  var thisTabBtn = thisTabWrap.find('.tab__list');
  var thisTabContents = thisTabWrap.find('.tab__content');

  //current class
  var currentClass = 'is-active';

  //js-tab-btn current 切り替え
  thisTabBtn.removeClass(currentClass);
  thisElm.addClass(currentClass);

  //クリックされた tabが何番目か取得
  var thisElmIndex = thisTabBtn.index(this);

  //js-tab-contents 切り替え
  thisTabContents.removeClass(currentClass);
  thisTabContents.eq(thisElmIndex).addClass(currentClass);
});

jQuery('.js-link').on('click', function (e) {
  e.stopPropagation();
  e.preventDefault();
  location.href = $(this).attr('data-url');
})


//ドロワーメニュー切り替え設定

jQuery("#js-menu").click(function () {
  $(this).toggleClass("active");
  $("#js-nav").toggleClass("active");
});


//フリガナ自動入力

//フリガナ自動入力
jQuery(function () {
  jQuery.fn.autoKana('#name1', '#name3', {
    katakana: true  //true：カタカナ、false：ひらがな（デフォルト）
  });
  jQuery.fn.autoKana('#name2', '#name4', {
    katakana: true  //true：カタカナ、false：ひらがな（デフォルト）
  });
});


//カートないの『会員登録して次への文字鉄変更』

jQuery("#customer-info .to_reganddeliveryinfo_button").val("会員登録して進む");



/*

ANCHOR LIN PC and SP

-------------------------------------*/


jQuery('a[href^="#"]').click(function () {
  // 移動先を0px調整する。0を30にすると30px下にずらすことができる。
  if (window.matchMedia("(max-width: 768px)").matches) {
    /* ウィンドウサイズが 768px以下の場合のコードをここに */
    var adjust = -50;
    // スクロールの速度（ミリ秒）
    var speed = 400;
    // アンカーの値取得 リンク先（href）を取得して、hrefという変数に代入
    var href = $(this).attr("href");
    // 移動先を取得 リンク先(href）のidがある要素を探して、targetに代入
    var target = $(href == "#" || href == "" ? 'html' : href);
    // 移動先を調整 idの要素の位置をoffset()で取得して、positionに代入
    var position = target.offset().top + adjust;
    // スムーススクロール linear（等速） or swing（変速）
    $('body,html').animate({ scrollTop: position }, speed, 'swing');
    return false;
  } else {
    /* ウィンドウサイズが 768px以上の場合のコードをここに */

    var adjust = 0;
    // スクロールの速度（ミリ秒）
    var speed = 400;
    // アンカーの値取得 リンク先（href）を取得して、hrefという変数に代入
    var href = $(this).attr("href");
    // 移動先を取得 リンク先(href）のidがある要素を探して、targetに代入
    var target = $(href == "#" || href == "" ? 'html' : href);
    // 移動先を調整 idの要素の位置をoffset()で取得して、positionに代入
    var position = target.offset().top + adjust;
    // スムーススクロール linear（等速） or swing（変速）
    $('body,html').animate({ scrollTop: position }, speed, 'swing');
    return false;
  }

});
