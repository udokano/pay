// 共用スクリプトスタイル記述

/*
いらないラベル削除
*/

$(".iopt_label").remove();


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


  //ラジオボタンクリックスタイリング
  $("#radio__out").on("change", function () {
    const radio = $(".iopt_radio_label")
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




  $('.js-link').on('click', function (e) {
    e.stopPropagation();
    e.preventDefault();
    location.href = $(this).attr('data-url');
  })


  //ドロワーメニュー切り替え設定

  $("#js-menu").click(function () {
    $(this).toggleClass("active");
    $("#js-nav").toggleClass("active");
  });
});
