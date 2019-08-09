<?php
  $page_slug = get_post(get_the_ID())->post_name; $single = get_post_type();$td = get_template_directory_uri();$hm = get_home_url();
?>
<footer>
  <div class="wrap10">
    <section class="flex">
      <article class="left">
        <h2 class="logo"><a href="<?php echo $hm;?>"><img src="<?php echo $td;?>/images/common/footer-logo.png" alt=""></a></h2>
        <p class="address">〒454-0024 愛知県名古屋市中川区柳島町1-3-1</p>
        <p class="map-link"><a href="https://goo.gl/maps/ybQBv8QcW63wteS96" target="_blank">googleマップへ→</a></p>
        <p class="tell-text">お電話でお問い合わせ</p>
        <p class="tell"><a href="tel:052-352-3055"><img src="<?php echo $td;?>/images/common/footer-tell.png" alt=""></a></p>
        <p class="contact-link">オンラインでお問い合わせ</p>
        <div class="flex2">
          <a href="<?php echo $hm;?>/contact/">お問い合わせはこちら</a>
          <a href="https://reserva.be/nonohana489" target="_blank">WEB予約はこちら</a>
        </div>
        <p class="banner"><a href="http://nakagawa-ns.com/" target="_blank"><img src="<?php echo $td;?>/images/common/footer-banner.png" alt=""></a></p>
      </article>
      <article class="right">
        <a href="https://goo.gl/maps/ybQBv8QcW63wteS96" target="_blank"><img src="<?php echo $td;?>/images/common/map.png" alt=""></a>
      </article>
      <p class="sp-copy sp">&copy; yanagisima nonohana<br>PRODUCED BY <a href="http://yohaku-bunka.com/" target="_blank">YOHAKU BUNKA</a></p>
    </section>
  </div>
  <section class="copy">
    <p class="pagetop">
      <a href="#pagetop"><img src="<?php echo $td;?>/images/common/pagetop.png" alt=""></a>
    </p>
    <p class="pc copy">Copyright &copy; 2019 柳島ののはな保育園　All Rights Reserved.<br>PRODUCED BY <a href="http://yohaku-bunka.com/" target="_blank">YOHAKU BUNKA</a></p>
  </section>
</footer>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJpemFHuPD1rHbHhbd59Nbd-BdnQszLR8"></script>
<script src="<?php echo $td;?>/js/slick.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/common.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/vue-list.js"></script>
<script></script>
<?php wp_footer(); ?>
</body>
</html>
