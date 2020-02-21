<?php
/*
Template Name: お問い合わせ-サンクス
*/
?>

<?php get_header();?>



<section class="contact__intro pages">

<div class="section__inner tc">
<h1>送信完了</h1>
<p>この度は、創輝会グループへお問い合わせいただき、<br>誠にありがとうございます。<br>いただいたお問い合わせについては、２〜３診療日以内に返信いたします。<br>
返信まで、今しばらくお待ちください。</p>

<?php echo do_shortcode('[mwform_formkey key="31"]');?>


</div>

</section>




<?php get_footer();?>