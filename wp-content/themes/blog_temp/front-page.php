<?php get_header(); ?>
<?php $td = get_template_directory_uri(); $hm = get_home_url();?>
<main class="reserve-card pc2">
  <section class="left">
    <p class="text"><img src="<?php echo $td;?>/images/index/reserve-text.png" alt=""></p>
    <article class="flex">
      <p class="tell-button"><a href="tel:052-352-3055"><img src="<?php echo $td;?>/images/index/tell-button.png" alt=""></a></p>
      <p class="reserve-button"><a href="https://reserva.be/nonohana489" target="_blank"><img src="<?php echo $td;?>/images/index/reserve-button.png" alt=""></a></p>
    </article>
    <p class="address"><a href="https://goo.gl/maps/ybQBv8QcW63wteS96" target="_blank">〒454-0024 愛知県名古屋市中川区柳島町1-3-1</a></p>
  </section>
  <section class="toggle-img"><img src="<?php echo $td;?>/images/index/reserve-toggle.png" alt=""></section>
</main>
<main class="mv">
  <img src="<?php echo $td;?>/images/index/mv1.png" alt="">
</main>
<div class="index">
  <main class="news">
    <div class="wrap10 fadein">
      <h2 class="type1">
        <p class="icon"><img src="<?php echo $td;?>/images/common/h2-icon.png" alt=""></p>
        <p class="jp">お知らせ</p>
        <p class="en">news</p>
      </h2>
      <article class="news-wrap">
        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'post_type' => 'news', // カスタム投稿タイプ Products
          'posts_per_page' => 3,
          'paged' => $paged,
          'post_status' => 'publish',
        );
        if(is_month()){
          $setMonth=get_the_date('m');
          $args['monthnum']=$setMonth;
        }
        $the_query = new WP_Query($args); if($the_query->have_posts()):?>
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <?php
            $terms = wp_get_object_terms($post->ID,'news_cat');
            foreach($terms as $term){
              $cat = $term->name;
            }
            ?>
            <div class="single">
              <p class="date"><?php echo get_the_date('Y.m.d');?></p>
              <p class="tag"><?php echo $cat;?></p>
              <p class="title"><a href="<?php echo get_permalink();?>"><?php echo get_the_title();?></a></p>
            </div>
          <?php endwhile; endif; wp_reset_query();?>
      </article>
      <p class="link"><a href="<?php echo $hm;?>/news/">全てのお知らせをみる</a></p>
    </div>
  </main>
  <main class="about">
    <div class="wrap10 fadein">
      <section class="flex">
        <article class="left">
          <img src="<?php echo $td;?>/images/index/about1.png" alt="">
        </article>
        <article class="right">
          <h2 class="type2">
            <p class="icon"><img src="<?php echo $td;?>/images/common/h2-icon.png" alt=""></p>
            <p class="jp">当園について</p>
            <p class="en">about</p>
          </h2>
          <p class="text">
            中川区露橋学区に初めて誕生した０歳〜就学前のお子さんの保育園です。地域に根ざした心和む保育園をと考えています。
          </p>
          <p class="link"><a href="<?php echo $hm;?>/about/">詳しくはこちら</a></p>
        </article>
      </section>
    </div>
  </main>
  <main class="schedule">
    <div class="wrap10 fadein">
      <h2 class="type1">
        <p class="icon"><img src="<?php echo $td;?>/images/common/h2-icon.png" alt=""></p>
        <p class="jp">園の生活</p>
        <p class="en">schedule</p>
      </h2>
      <article class="flex">
        <div class="single">
          <p class="img"><img src="<?php echo $td;?>/images/index/schedule1.png" alt=""></p>
          <h3><a href="<?php echo $hm;?>/schedule/#cont1">１日の流れ</a></h3>
          <p class="text">こちらでは「０～２歳児クラス」、「３～５歳児クラス」の２つに分けて、子どもたちの一日をご紹介します。</p>
        </div>
        <div class="single">
          <p class="img"><img src="<?php echo $td;?>/images/index/schedule2.png" alt=""></p>
          <h3><a href="<?php echo $hm;?>/schedule/#cont2">年間行事</a></h3>
          <p class="text">七夕会、運動会、クリスマス会、餅つき、節分、そのほか様々なイベントを季節にあわせて行っています。</p>
        </div>
        <div class="single">
          <p class="img"><img src="<?php echo $td;?>/images/index/schedule3.png" alt=""></p>
          <h3><a href="<?php echo $hm;?>/schedule/#cont3">食育への取り組み</a></h3>
          <p class="text">栄養のバランスを考えた食事内容はもちろんのこと、季節感のあるメニューで、給食と手づくりのおやつを提供します。</p>
        </div>
      </article>
    </div>
  </main>
  <main class="information">
    <div class="wrap10 fadein">
      <section class="flex">
        <article class="left">
          <h2 class="type2">
            <p class="icon"><img src="<?php echo $td;?>/images/common/h2-icon.png" alt=""></p>
            <p class="jp">入園案内</p>
            <p class="en">information</p>
          </h2>
          <p class="b-text">
            <a href="<?php echo $hm;?>/information/#cont1">園の見学会</a><a href="<?php echo $hm;?>/information/#cont2">募集要項</a><a href="<?php echo $hm;?>/information/#cont3">入園手続き</a>
          </p>
          <p class="text">
            柳島ののはな保育園の募集要項などをこちらでご紹介します。
          </p>
          <p class="link"><a href="<?php echo $hm;?>/information/">詳しくはこちら</a></p>
        </article>
        <article class="right">
          <img src="<?php echo $td;?>/images/index/info1.png" alt="">
        </article>
      </section>
    </div>
  </main>
  <main class="recruit">
    <div class="wrap10 fadein">
      <section class="flex">
        <article class="left">
          <h2 class="type2">
            <p class="icon"><img src="<?php echo $td;?>/images/common/h2-icon.png" alt=""></p>
            <p class="jp">求人情報</p>
            <p class="en">recruit</p>
          </h2>
          <p class="b-text">
            <a href="<?php echo $hm;?>/recruit/#cont1">先輩の声</a><a href="<?php echo $hm;?>/recruit/#cont2">求人要項</a><a href="<?php echo $hm;?>/recruit/#cont3">応募フォーム</a>
          </p>
          <p class="text">
            新しい保育園で、私たちと一緒にお仕事しませんか？
          </p>
          <p class="link"><a href="<?php echo $hm;?>/recruit/">詳しくはこちら</a></p>
        </article>
        <article class="right">
          <img src="<?php echo $td;?>/images/index/rec1.png" alt="">
        </article>
      </section>
    </div>
  </main>
</div>
<?php get_footer(); ?>
