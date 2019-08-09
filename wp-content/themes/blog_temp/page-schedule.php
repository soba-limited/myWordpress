<?php get_header(); ?>
<?php $td = get_template_directory_uri(); $hm = get_home_url();?>
<div class="schedule under">
  <main class="sv"></main>
  <main class="page-title">
    <div class="wrap10">
      <h2 class="type1">
        <p class="img"><img src="<?php echo $td;?>/images/common/h2-icon.png" alt=""></p>
        <p class="jp">園の生活</p>
        <p class="en">schedule</p>
      </h2>
    </div>
  </main>
  <nav class="page-nav">
    <div class="wrap10">
      <ul>
        <li><a href="#cont1">１日の流れ</a></li>
        <li><a href="#cont2">年間行事</a></li>
        <li><a href="#cont3">食育への取り組み</a></li>
        <li><a href="#cont4">クラスの構成</a></li>
      </ul>
    </div>
  </nav>
  <main class="cont1" id="cont1">
    <div class="wrap10">
      <h2 class="type2">
        <p class="jp">一日の流れ</p>
        <p class="en">one day</p>
      </h2>
      <section class="flex">
        <article class="list">
          <h3>0~2歳児</h3>
          <p class="img"><img src="<?php echo $td;?>/images/schedule/schedule1.png" alt=""></p>
          <div class="list-wrap">
            <dl v-for="(lists,index) in list1">
              <dt>{{lists.left}}</dt>
              <dd v-html="lists.right"></dd>
            </dl>
          </div>
        </article>
        <article class="list">
          <h3>3~5歳児</h3>
          <p class="img"><p class="img"><img src="<?php echo $td;?>/images/schedule/schedule2.png" alt=""></p></p>
          <div class="list-wrap">
            <dl v-for="(lists,index) in list2">
              <dt>{{lists.left}}</dt>
              <dd v-html="lists.right"></dd>
            </dl>
          </div>
        </article>
      </section>
      <p class="sub-text">※その日の状況や年齢によって変更することがあります。<br class="tab">※3歳児は7月中旬から8月末、4,5歳児は8月午睡があります。</p>
    </div>
  </main>
  <main class="cont2" id="cont2">
    <div class="wrap10">
      <h2 class="type3">
        <p class="jp">年間行事</p>
        <p class="en">event</p>
      </h2>
      <section class="flex">
        <article class="left">
          <div class="text spring">
            <h3>
              <p class="jp">春 3月ー5月</p>
              <p class="en">SPRING</p>
            </h3>
            <ul>
              <li>入園式</li>
              <li>園外保育</li>
            </ul>
          </div>
          <p class="img"><img src="<?php echo $td;?>/images/schedule/event1.png" alt=""></p>
        </article>
        <article class="right">
          <img src="<?php echo $td;?>/images/schedule/event2.png" alt="">
        </article>
      </section>
      <section class="flex">
        <article class="left">
          <div class="text summer">
            <h3>
              <p class="jp">夏 6月ー8月</p>
              <p class="en">SUMMER</p>
            </h3>
            <ul>
              <li>七夕会</li>
              <li>プール開き</li>
            </ul>
          </div>
          <p class="img"><img src="<?php echo $td;?>/images/schedule/event3.png" alt=""></p>
        </article>
        <article class="right">
          <img src="<?php echo $td;?>/images/schedule/event4.png" alt="">
        </article>
      </section>
      <section class="flex">
        <article class="left">
          <div class="text autumn">
            <h3>
              <p class="jp">秋 9月ー11月</p>
              <p class="en">AUTUMN</p>
            </h3>
            <ul>
              <li>園外保育</li>
              <li>ミニ運動会</li>
            </ul>
          </div>
          <p class="img"><img src="<?php echo $td;?>/images/schedule/event5.png" alt=""></p>
        </article>
        <article class="right">
          <img src="<?php echo $td;?>/images/schedule/event6.png" alt="">
        </article>
      </section>
      <section class="flex">
        <article class="left">
          <div class="text winter">
            <h3>
              <p class="jp">冬 12月ー2月</p>
              <p class="en">WINTER</p>
            </h3>
            <ul>
              <li>餅つき</li>
              <li>クリスマス会</li>
              <li>節分会</li>
              <li>生活発表会</li>
            </ul>
          </div>
          <p class="img"><img src="<?php echo $td;?>/images/schedule/event7.png" alt=""></p>
        </article>
        <article class="right">
          <img src="<?php echo $td;?>/images/schedule/event8.png" alt="">
        </article>
      </section>
    </div>
  </main>
  <main class="cont3" id="cont3">
    <div class="wrap10">
      <p class="b-img"><img src="<?php echo $td;?>/images/schedule/schedule3.png" alt=""></p>
      <section class="flex">
        <article class="left">
          <h2 class="type2">
            <p class="jp">食育への取り組み</p>
            <p class="en">lunch</p>
          </h2>
          <p class="text">
            「食育」って難しいこと？何か特別なことするの？いえいえ、難しくなんてないよ。食べることの楽しさを味わいながら食について子ども達といっしょにこんなことをしたら楽しいよねと思うこと。そうすれば「食育」は魔法のことばになりますよ。<br>
            苦手なトマト・ピーマンを栽培してのミニピザ作り。「これがまたおいしい!!」暑〜い夏スイカ割りをしてベタベタになりながらみんなでむしゃぶりついたスイカの味。かつお節を削り、だし昆布を切って自分だけのだし作り。フルーツを切ってヨーグルであえた手作りおやつ。恵方を向きみんなでいっしょに食べた自分だけの恵方巻き。もち米を蒸す香り、杵の音を耳で楽しみながらの餅つき。練った米粉を木型にはめ込んで作ったおひな様のおこしもの。どんなことをしていっしょに楽しもうかと考えるだけで楽しいね。柳島ののはな保育園は経験してみよう、味わってみよう、楽しんでみようが「食育」の原点。ワクワクな食の経験をしながら食に興味を持ち、食べることで自分たちの身体ができていくなんてとってもステキなこと。<br>
            ワクワクな経験をこれからもみつけていくことが私達保育士のワクワクです!
          </p>
        </article>
        <article class="right"><img src="<?php echo $td;?>/images/schedule/schedule4.png" alt=""></article>
      </section>
      <section class="flex2">
        <p class="img"><img src="<?php echo $td;?>/images/schedule/lunch1.png" alt=""></p>
        <p class="img"><img src="<?php echo $td;?>/images/schedule/lunch2.png" alt=""></p>
        <p class="img"><img src="<?php echo $td;?>/images/schedule/lunch3.png" alt=""></p>
        <p class="img"><img src="<?php echo $td;?>/images/schedule/lunch4.png" alt=""></p>
      </section>
    </div>
  </main>
  <main class="cont4" id="cont4">
    <div class="wrap10">
      <h2 class="type3">
        <p class="jp">クラスの構成</p>
        <p class="en">class</p>
      </h2>
      <section class="flex">
        <?php for($i=1;$i<=6;$i++):?>
          <article class="img"><img src="<?php echo $td;?>/images/schedule/class<?php echo $i;?>.png" alt=""></article>
        <?php endfor;?>
      </section>
    </div>
  </main>
</div>
<?php get_footer(); ?>
