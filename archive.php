<?php
global $wp_query;
$post_obj = $wp_query->get_queried_object();
$slug = $post_obj->post_name;  //投稿や固定ページのスラッグ
$cat_slug = $post_obj->category_nicename;  //カテゴリーアーカイブページのスラッグ
$tag_slug = $post_obj->slug;  //タグアーカイブページスラッグ
?>
<?php get_header(); ?>

<?php get_sidebar(); ?>

<!--メインビジュアル-->
<div class="hero hero--search ">
  <div class="hero--search__background Flexbox--column">
    <h1 class="hero--search__heading Heading--bold">Menu:</h1>
    <h2 class="hero--search__subtitle Heading--m1bold"><?php echo $cat_slug = $post_obj->category_nicename; ?></h2>
  </div>
</div>

<!--ここからメインコンテンツ-->
<main class="l-main u-padding">

  <!--ここからセクション-->
  <section class="introduction">
    <h2 class="introduction__heading Heading--m1bold">小見出しが入ります</h2>
    <p class="introduction__text Content">
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
    </p>
    </p>
  </section>

  <!--ここからカード-->
  <div class="article--archive">
    <?php // ブログの一覧を表示する start 
    ?>
    <?php
    if (have_posts()) : //1.投稿データがあるかの条件分岐。
      while (have_posts()) : // 2.表示する投稿データがあれば繰り返し処理開始
        the_post(); //3.ループ処理に必要なカウント処理等
    ?>

        <!--4.↓ここに出力したい処理などを記述-->

        <dl>
          <article class="card--archive Card Background Grid">
            <div class="card__header">
              <div class="card__figure">
                <?php // アイキャッチを表示させる start 
                ?>
                <div class="card__image Image">
                  <?php (the_post_thumbnail()); ?>
                </div>
              </div>
              <?php // アイキャッチを表示させる end 
              ?>
            </div>
            <div class="card__body">
              <?php // タイトルを表示させる start 
              ?>
              <h3 class="card__heading Heading--m1bold"><?php the_title(); ?></h3>
              <?php // タイトルを表示させる end 
              ?>
              <?php the_content(''); ?>
            </div>
            <div class="card__footer">
              <div class="card__actions">
                <a href="<?php the_permalink($post); ?>" class="card__link Link">詳しく見る</a>
              </div>
            </div>
          </article>
        </dl>

        <?php wp_link_pages(); //エラー処理?>  
      <?php endwhile;
    //5.繰り返し処理ここまで。投稿データがまだあればwhileに戻る。なければ終了
    else :  //6.投稿データがなければ
      ?>
      <p>表示する記事がありません</p>
    <?php //7.ない時の処理
    endif;   //8.条件分岐終了
    ?>
    <?php // ブログの一覧を表示する end 
    ?>

    <?php
    if (function_exists('pagenation')) { // 関数が定義されていたらtrueになる
      pagenation();
    } ?>
  </div>
</main>
<?php get_footer(); ?>