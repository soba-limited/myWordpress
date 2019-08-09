<!--アーカイブループ-->

<main class="content-wrap">
  <section class="news-list">
    <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $number = 0;
      $args = array(
        'post_type' => 'news', // カスタム投稿タイプ Products
        'posts_per_page' => 10,
        'paged' => $paged,
        'post_status' => 'publish',
      );
      if(is_month()){
        $setMonth=get_the_date('m');
        $setYear=get_the_date('Y');
        $args['monthnum']=$setMonth;
        $args['year']=$setYear;
      }
      $the_query = new WP_Query($args); if($the_query->have_posts()):
    ?>
    <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
        <?php
        $terms = wp_get_object_terms($post->ID,'news_cat');
        foreach($terms as $term){
          $cat = $term->name;
          $slug = $term->slug;
        }
        ?>
        <article class="single">
          <a href="<?php echo get_permalink();?>">
            <div class="img-wrap">
              <p class="date">
                <span class="year"><?php echo get_the_date('Y');?></span>
                <span class="md"><?php echo get_the_date('m.d');?></span>
              </p>
              <p class="cat"><?php echo $cat;?></p>
              <p class="img"><img src="<?php the_field('thumbs');?>" alt=""></p>
            </div>
            <p class="title"><?php echo get_the_title();?></p>
          </a>
        </article>
        <?php $number++;?>
      <?php endwhile;?>
      <?php if(($number % 2 - 1) == 0):?>
        <article class="single dummy"></article>
      <?php endif;?>
    <?php endif;?>
    </section>
    <?php
    if(function_exists('wp_pagenavi')) { wp_pagenavi(array('query'=>$the_query)); }
    wp_reset_query();
    ?>
</main>

<!--カスタムタクソノミーループ-->

<main class="content-wrap">
  <section class="news-list">
    <?php
      $terms = wp_get_object_terms($post->ID,'news_cat');
      foreach($terms as $term){
        $cat = $term->name;
        $slug = $term->slug;
      }
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $number = 0;
      $args = array(
        'post_type' => 'news', // カスタム投稿タイプ Products
        'posts_per_page' => 10,
        'paged' => $paged,
        'post_status' => 'publish',
        'tax_query' => array(
          array(
            'taxonomy' => 'news_cat', // カスタム分類 Products-cat
            'field' => 'slug',
            'terms' => $slug, // ターム item1 で絞り込む
          )
        )
      );
      if(is_month()){
        $setMonth=get_the_date('m');
        $setYear=get_the_date('Y');
        $args['monthnum']=$setMonth;
        $args['year']=$setYear;
      }
      $the_query = new WP_Query($args); if($the_query->have_posts()):
    ?>
    <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
        <?php
        $terms = wp_get_object_terms($post->ID,'news_cat');
        foreach($terms as $term){
          $cat = $term->name;
          $slug = $term->slug;
        }
        ?>
        <article class="single">
          <a href="<?php echo get_permalink();?>">
            <div class="img-wrap">
              <p class="date">
                <span class="year"><?php echo get_the_date('Y');?></span>
                <span class="md"><?php echo get_the_date('m.d');?></span>
              </p>
              <p class="cat"><?php echo $cat;?></p>
              <p class="img"><img src="<?php the_field('thumbs');?>" alt=""></p>
            </div>
            <p class="title"><?php echo get_the_title();?></p>
          </a>
        </article>
        <?php $number++;?>
      <?php endwhile;?>
      <?php if(($number % 2 - 1) == 0):?>
        <article class="single dummy"></article>
      <?php endif;?>
    <?php endif;?>
    </section>
    <?php
    if(function_exists('wp_pagenavi')) { wp_pagenavi(array('query'=>$the_query)); }
    wp_reset_query();
    ?>
</main>
