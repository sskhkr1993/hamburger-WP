<?php get_header(); ?>

<?php get_sidebar(); ?>

<?php
  if( have_posts() ) : //1.投稿データがあるかの条件分岐。
    while( have_posts() ) : // 2.表示する投稿データがあれば繰り返し処理開始
      the_post(); //3.ループ処理に必要なカウント処理等
        //4.「ここに出力したい処理などを記述」
        ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h2 class="post__ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <ul class="post__meta">
            <li class="post__meta__item">
              <date class="post__meta__date"><?php echo get_the_date(); ?></date>
            </li>
            <li class="post__meta__item"><i class="fa fa-folder" aria-hidden="true"><?php the_category( ', ' ); ?></i></li>
            <li class="post__meta__item"><i class="fa fa-tag" aria-hidden="true"><?php the_tags( '' ); ?></i></li>
          </ul>
          <?php the_post_thumbnail(); ?>
          <?php the_content( '続きを読む' ); ?>
        </div>
      <?php endwhile; // 5.繰り返し処理ここまで。投稿データがまだあればwhileに戻る。なければ終了
else :      //6.投稿データがなければ
      ?><p>表示する記事がありません</p>
    <?php     //7.ない時の処理
endif;   //8.条件分岐終了
?>
            
  <!--メインビジュアル-->
  <div class="hero">
    <h2 class="hero__heading">ダミーサイト</h2>
  </div>

  <!--ここからTAKEOUT＆EATIN-->
  <main class="l-main">

    <article class="article">
      <article class="card">
        <h3 class="card__title">Take Out</h3>
        <div class="card__separator"></div>
        <ul class="card-list">
          <li class="card-list__item">
            <h4 class="card-list__subtitle">Take OUT</h4>
            <p class="card-list__content">
              当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています
            </p>
          </li>
          <li class="card-list__item">
            <h4 class="card-list__subtitle">Take OUT</h4>
            <p class="card-list__content">
              当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています</p>
          </li>
        </ul>
      </article>

      <article class="card card--second">
        <h3 class="card__title card__title--second">Eat In</h3>
        <div class="card__separator"></div>
        <ul class="card-list">
          <li class="card-list__item">
            <h4 class="card-list__subtitle">Eat In</h4>
            <p class="card-list__content">
              当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています
            </p>
          </li>
          <li class="card-list__item">
            <h4 class="card-list__subtitle">Eat In</h4>
            <p class="card-list__content">
              当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています</p>
          </li>
        </ul>
      </article>
    </article>


    <!--map-->
    <section id="location" class="map">
      <div class="map__location">
        <div class="map__background"></div>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.747975468369!2d139.7432442151108!3d35.65858048019959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1649423073692!5m2!1sja!2sjp&ll=35.658301528208476, 139.74445120913217&z=20"
          style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="map-body">
          <h3 class="map-body__heading">見出しが入ります</h3>
          <div class="map-body__separator"></div>
          <p class="map-body__content">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
        </div>
      </div>

    </section>

  </main>

  <!--footer-->
  <?php get_footer(); ?>
