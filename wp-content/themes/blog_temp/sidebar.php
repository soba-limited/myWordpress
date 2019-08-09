<article class="cat">
  <h2>カテゴリー</h2>
  <div class="border"></div>
  <ul>
    <?php wp_list_categories('title_li=&number=5&taxonomy=news_cat'); ?>
  </ul>
</article>
<article class="archive">
  <h2>アーカイブ</h2>
  <div class="border"></div>
  <ul>
    <?php wp_get_archives('title_li=&numver=5&post_type=news&type=monthly'); ?>
  </ul>
</article>
