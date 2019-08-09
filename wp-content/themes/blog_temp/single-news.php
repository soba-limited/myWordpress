<?php get_header(); ?>
<?php $td = get_template_directory_uri(); $hm = get_home_url();?>
<div class="single-news under news">
  <main class="sv"></main>
  <main class="page-title">
    <div class="wrap10">
      <h2 class="type1">
        <p class="img"><img src="<?php echo $td;?>/images/common/h2-icon.png" alt=""></p>
        <p class="jp">新着情報</p>
        <p class="en">news</p>
      </h2>
    </div>
  </main>
  <div class="wrap-flex wrap10">
    <main class="content-wrap">
      <?php
      $terms = wp_get_object_terms($post->ID,'news_cat');
      foreach($terms as $term){
        $cat = $term->name;
      }
      ?>
      <p class="data"><span class="date"><?php echo get_the_date('Y.m.d');?></span><span class="tag"><?php echo $cat;?></span></p>
      <h2><?php echo get_the_title();?></h2>
      <article class="main-content">
        <?php
        $this_content= wpautop($post->post_content);
        echo $this_content;
        ?>
      </article>
    </main>
    <main class="sidewrap">
      <?php get_sidebar();?>
    </main>
  </div>
</div>
<?php get_footer(); ?>
