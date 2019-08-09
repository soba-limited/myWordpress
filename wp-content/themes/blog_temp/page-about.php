<?php get_header(); ?>
<?php $td = get_template_directory_uri(); $hm = get_home_url();?>
<div class="about under">
  <main class="sv"></main>
  <main class="page-title">
    <div class="wrap10">
      <h2 class="type1">
        <p class="img"><img src="<?php echo $td;?>/images/common/h2-icon.png" alt=""></p>
        <p class="jp">当園について</p>
        <p class="en">about</p>
      </h2>
    </div>
  </main>
  <nav class="page-nav">
    <div class="wrap10">
      <ul>
        <li><a href="#cont1">園長のごあいさつ</a></li>
        <li><a href="#cont2">保育方針</a></li>
        <li><a href="#cont3">園の概要</a></li>
        <li><a href="#cont4">アクセス</a></li>
      </ul>
    </div>
  </nav>
  <main class="cont1" id="cont1">
    <div class="wrap10">
      <h2 class="type2">
        <p class="jp">園長のごあいさつ</p>
        <p class="en">greeting</p>
      </h2>
      <section class="flex">
        <article class="left">
          <p class="img"><img src="<?php echo $td;?>/images/about/about1.png" alt=""></p>
          <p class="text">園長先生　泉谷 幸</p>
        </article>
        <article class="right">
          <p class="text">
            柳島ののはな保育園は2018年4月1日開園の保育園です。まだ新しい園ですが、自慢できることが・・・<br>
            <span>1.何と言っても保護者の方が協力的。そして保護者同士の仲がよく雰囲気がとても素晴らしいこと。</span>
            <span>2.地域の方に優しく見守られていること。</span>
            <span>3.職員のステキな笑顔と職員間の仲の良さ。</span>
            の３点です。<br>
            子ども達が生まれて初めて経験する集団生活。その生活の場を取り巻く人的環境・雰囲気が良くなければ魅力的な保育はできません。保護者・地域・職員、この連携が何より大切です。<br>
            また、子ども達を保育していく中で、気持ちに寄り添うこと、認め合うことはとても大切なことですが、それだけで良いのでしょうか？苦手な事・嫌な事からも目をそむけず、少し頑張ってみるということを経験していくことが、次の成長につながっていきます。我慢できずすぐキレてしまったり、頑張ろうとせずできないことをすぐ他人のせいにしてしまう等、子ども達が将来そういう大人にならないよう、私達大人が小さい時からしっかりと子どもに向き合うことが必要です。<br>
            子ども達の人生の中で、保育園に通う時期はわずかですが、このわずかな時間が何より大切な時間です。保護者の方とこの大切な時間を共有させていただける喜び。そして、その責任の重さを感じつつ保育園の主役である子ども達が何よりも生き生きと輝いてくれる事が職員の保育に対する心の輝きです。
          </p>
        </article>
      </section>
    </div>
  </main>
  <main class="cont2" id="cont2">
    <div class="wrap10">
      <p class="big-img"><img src="<?php echo $td;?>/images/about/about2.png" alt=""></p>
      <section class="flex">
        <article class="left">
          <h2 class="type2">
            <p class="jp">保育方針</p>
            <p class="en">policy</p>
          </h2>
          <p class="text">
            心やすらぐ環境の中で、一人ひとりの個性が活かされるよう、また様々な経験を通して社会性・自主性及び自分で考える力、人を思いやる心が伸びていけるよう子どもたちに寄り添い、見守りながら支援していきます。<br>
            子どもたちが家族以外の人と初めて生活する集団の場として、心和む笑顔、言葉がけ、だっこ等、保育士が子どもたちの心に働きかける保育。そして、保護者の皆様に信頼され、子どもたちが健やかに成長していく姿に喜びを感じ、その気持ちを共有できる保育を目標にしています。
          </p>
          <ul>
            <li>保育士間の連携によるきめ細かい保育</li>
            <li>子どもたち・保育士の笑顔、笑い声があふれる保育</li>
            <li>保護者の方と連携しながら、信頼していただける保育</li>
            <li>欲求が満たされ、愛されていることを感じる保育</li>
            <li>子ども同士が向き合う中で得られることを見守る保育</li>
            <li>年齢に応じた精神面・思考面を育む保育</li>
          </ul>
        </article>
        <article class="right">
          <p class="img"><img src="<?php echo $td;?>/images/about/about3.png" alt=""></p>
          <p class="img"><img src="<?php echo $td;?>/images/about/about4.png" alt=""></p>
        </article>
      </section>
    </div>
  </main>
  <main class="cont3" id="cont3">
    <div class="wrap10">
      <h2 class="type2">
        <p class="jp">園の概要</p>
        <p class="en">facility summary</p>
      </h2>
      <section class="flex">
        <article class="left">
          <dl v-for="(summarys,index) in summary">
            <dt>{{summarys.left}}</dt>
            <dd v-html="summarys.right"></dd>
          </dl>
        </article>
        <article class="right">
          <img src="<?php echo $td;?>/images/about/about5.png" alt="">
        </article>
      </section>
    </div>
  </main>
  <main class="cont4" id="cont4">
    <div class="wrap10">
      <h2 class="type3">
        <p class="jp">アクセス</p>
        <p class="en">access</p>
      </h2>
      <section class="map">
        <a href="https://goo.gl/maps/ybQBv8QcW63wteS96" target="_blank"><img src="<?php echo $td;?>/images/about/map.png" alt=""></a>
      </section>
      <section class="access">
        <dl>
          <dt>公共交通機関でお越しの方</dt>
          <dd>市営バス駅　露橋スポーツセンターより   徒歩で約5分；市営バス駅　二女子より  徒歩で約5分</dd>
        </dl>
        <dl>
          <dt>自動車でお越しの方</dt>
          <dd>園駐車場は短時間の送迎用となっておりますので、長時間の駐車はご遠慮ください</dd>
        </dl>
      </section>
      <p class="link"><a href="https://goo.gl/maps/ybQBv8QcW63wteS96" target="_blank"><img src="<?php echo $td;?>/images/common/map-icon.png" alt="">GoogleMapで見る</a></p>
    </div>
  </main>
</div>
<?php get_footer(); ?>
