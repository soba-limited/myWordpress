<?php get_header(); ?>
<?php $td = get_template_directory_uri(); $hm = get_home_url();?>
<div class="recruit-form form under">
  <main class="sv"></main>
  <main class="page-title">
    <div class="wrap10">
      <h2 class="type1">
        <p class="img"><img src="<?php echo $td;?>/images/common/h2-icon.png" alt=""></p>
        <p class="jp">求人情報</p>
        <p class="en">recruit</p>
      </h2>
    </div>
  </main>
  <main class="cont1" id="cont1">
    <div class="wrap75">
      <p class="text1">
        ご送信頂きましたメールを確認後、当園担当者よりご連絡させていただきます。<br>
        万が一ご連絡がない場合はお手数ですが、電話<a href="tel:0523523055">052-352-3055</a>までご連絡ください。
      </p>
      <p class="hide"><?php echo $_GET['_rec'];?></p>
      <article class="form-wrap">
        <?php echo do_shortcode('[contact-form-7 id="5" title="recruit"]');?>
      </article>
    </div>
  </main>
</div>
<script>
  $(document).ready(function(){
    var entry = $("p.hide").text();
    $("input[name='r-entry']").attr('value',entry);
  });
</script>
<?php get_footer(); ?>
