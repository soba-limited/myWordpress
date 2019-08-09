<?php get_header(); ?>
<?php $td = get_template_directory_uri(); $hm = get_home_url();?>
<div class="recruit under">
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
  <nav class="page-nav">
    <div class="wrap10">
      <ul>
        <li><a href="#cont1">メッセージ</a></li>
        <li><a href="#cont2">先輩の声</a></li>
        <li><a href="#cont3">求人要項</a></li>
      </ul>
    </div>
  </nav>
  <main class="cont1" id="cont1">
    <div class="wrap10">
      <h2 class="type3">
        <p class="jp">メッセージ</p>
        <p class="en">message</p>
      </h2>
      <p class="text">
        平成30年4月に中川区露橋学区に開園した０歳〜就学前のお子さんの保育園です。<br>
        地域に根ざした心和む保育園をと考えています。<br>
        <span class="gr">新しい保育園で、私たちと一緒にお仕事しませんか！！</span><br>
        若い人のパワー・経験者の即戦力を求めていますので、興味を持っていただいた方、<br class="pc">是非ご連絡を。<br>
        <span class="br">あなたの笑顔、お待ちしています。</span>
      </p>
    </div>
  </main>
  <main class="cont2" id="cont2">
    <div class="wrap10">
      <h2 class="type2">
        <p class="jp">先輩の声</p>
        <p class="en">voice</p>
      </h2>
      <section class="flex" v-for="(voices,index) in voice">
        <article class="left"><img :src="'<?php echo $td?>/images/recruit/rec' + (index + 1) + '.png'" alt=""></article>
        <article class="right">
          <h3>{{voices.name}}</h3>
          <h4 v-html="voices.green"></h4>
          <p class="text" v-html="voices.text"></p>
        </article>
      </section>
    </div>
  </main>
  <main class="cont3" id="cont3">
    <div class="wrap10">
      <h2 class="type3">
        <p class="jp">求人要項</p>
        <p class="en">requirements</p>
      </h2>
      <p class="b-img"><img src="<?php echo $td;?>/images/recruit/rec4.png" alt=""></p>
      <section class="list" v-for="(recruits,index) in recruit">
        <h3 class="rec-toggle">{{recruits.title}}</h3>
        <article class="inner">
          <p class="text" v-html="recruits.text"></p>
          <dl v-for="(lists,index) in recruits.list">
            <dt>{{lists.left}}</dt>
            <dd v-html="lists.right"></dd>
          </dl>
          <p class="link"><a :href="'<?php echo $hm;?>/recruit-form/?_rec=' + recruits.title">この求人を応募する</a></p>
        </article>
      </section>
    </div>
  </main>
</div>
<?php get_footer(); ?>
