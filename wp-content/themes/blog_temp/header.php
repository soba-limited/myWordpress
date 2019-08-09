<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="format-detection" content="telephone=no">
  <title>ののはな保育園</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/ress.css">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/slick.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/slick-theme.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/common.min.css">
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-3.3.1.min.js"></script>
  <?php wp_head(); ?>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.min.js"></script>
  <script src="https://use.typekit.net/shk3ebq.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>
<body id="pagetop">
  <?php $td = get_template_directory_uri(); $hm = get_home_url();?>
  <header>
    <h1><a href="<?php echo $hm;?>"><img src="<?php echo get_template_directory_uri();?>/images/common/logo.png" alt=""></a></h1>
    <nav class="global">
      <ul>
        <li v-for="(navs,index) in nav"><a :href="'<?php echo $hm;?>/' + navs.en"><span class="jp">{{navs.jp}}</span><span class="en">{{navs.en}}</span></a></li>
      </ul>
    </nav>
  </header>
  <section class="toggle-button sp">
    <button class="nav-toggle">
      <article class="bar-wrap">
        <p class="bar"></p>
        <p class="bar"></p>
        <p class="bar"></p>
      </article>
      <p class="text"><span></span></p>
    </button>
  </section>
