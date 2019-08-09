<?php get_header(); ?>
<?php $td = get_template_directory_uri(); $hm = get_home_url();?>
<div class="information under">
  <main class="sv"></main>
  <main class="page-title">
    <div class="wrap10">
      <h2 class="type1">
        <p class="img"><img src="<?php echo $td;?>/images/common/h2-icon.png" alt=""></p>
        <p class="jp">入園案内</p>
        <p class="en">information</p>
      </h2>
    </div>
  </main>
  <nav class="page-nav">
    <div class="wrap10">
      <ul>
        <li><a href="#cont1">園の見学</a></li>
        <li><a href="#cont2">募集要項</a></li>
        <li><a href="#cont3">入園手続き</a></li>
      </ul>
    </div>
  </nav>
  <main class="cont1" id="cont1">
    <div class="wrap10">
      <p class="b-img"><img src="<?php echo $td;?>/images/information/information1.png" alt=""></p>
      <section class="flex">
        <h2 class="type2">
          <p class="jp">園の見学</p>
          <p class="en">visit</p>
        </h2>
        <p class="text">
          週２回程度、入園説明会にて園生活についてのご案内をしています。来年度のご入園をご希望の場合は必ず園見学会にご参加ください。　※質疑応答時間も含めて60分；各回、先着５名様となります。
          2020年度の入園説明会の日程が決まりました。<a href="https://reserva.be/nonohana489" target="_blank">予約サイトに入力の上、ご予約下さい。</a>
        </p>
      </section>
      <h3>日程について</h3>
      <section class="list">
        <ul>
          <li v-for="(days,index) in day">{{days}}</li>
        </ul>
      </section>
      <p class="link"><a href="https://reserva.be/nonohana489" target="_blank">予約サイトはこちら</a></p>
    </div>
  </main>
  <main class="cont2" id="cont2">
    <div class="wrap10">
      <h2 class="type3">
        <p class="jp">募集要項</p>
        <p class="en">requirements</p>
      </h2>
      <section class="flex">
        <article class="left"><img src="<?php echo $td;?>/images/information/information2.png" alt=""></article>
        <article class="right">
          <h3>2020年度の募集人数</h3>
          <p class="text">
            0歳 6名、1歳 6名、2歳 若干名、3歳 若干名、4歳 若干名、5歳 若干名<br>
            (事前にお尋ねください)
          </p>
          <h3>対象年齢</h3>
          <p class="text">6か月～5歳児</p>
          <h3>開所時間</h3>
          <p class="text flex">
            <span class='left'>平常保育時間</span><span class='right'>09：00～15：30</span>
            <span class='left'>月～金</span><span class='right'>07：15～19：15</span>
            <span class='left'>土曜日</span><span class='right'>07：30～18：30</span>
            <span class='left'>休園日</span><span class='right'>日曜日、祝日、年末、年始</span>
          </p>
          <h3>保育費用</h3>
          <p class="text">
            保育料　名古屋市の基準により徴収（月額）<br>
            その他の経費（必要に応じて）<br>
            入園時の購入用品（教材として購入して頂く物があります）
          </p>
        </article>
      </section>
    </div>
  </main>
  <main class="cont3" id="cont3">
    <div class="wrap10">
      <section class="flex">
        <article class="left">
          <h2 class="type2">
            <p class="jp">入園手続き</p>
            <p class="en">follow</p>
          </h2>
          <p class="text1">
            途中入園をご希望の場合、区役所の子ども係までお問い合わせください。園見学は随時受け付けております。
          </p>
          <p class="text2">
            ☆オンライン予約画面よりお申込み　
            <a href="https://reserva.be/nonohana489" target="_blank">WEB予約サイト</a>
            ☆お電話にてご予約
            <a href="tel:052-352-3055"><i class="fas fa-phone"></i>052-352-3055</a>
          </p>
        </article>
        <article class="right">
          <p class="img"><img src="<?php echo $td;?>/images/information/step1.png" alt=""></p>
          <p class="img"><img src="<?php echo $td;?>/images/information/step2.png" alt=""></p>
          <p class="img"><img src="<?php echo $td;?>/images/information/step3.png" alt=""></p>
          <p class="img"><img src="<?php echo $td;?>/images/information/step4.png" alt=""></p>
        </article>
      </section>
    </div>
  </main>
</div>
<?php get_footer(); ?>
