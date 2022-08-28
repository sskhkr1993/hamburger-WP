<?php get_header(); ?>

<?php get_sidebar(); ?> 

  <!--メインビジュアル-->
  <div class="hero hero--search ">
    <div class="hero--search__background Flexbox--column">
      <h1 class="hero--search__heading Heading--bold">Menu:</h1>
      <h2 class="hero--search__subtitle Heading--m1bold">チーズバーガー</h2>
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

    <?php
  if( have_posts() ) : //1.投稿データがあるかの条件分岐。
    while( have_posts() ) : // 2.表示する投稿データがあれば繰り返し処理開始
      the_post(); //3.ループ処理に必要なカウント処理等
        //4.「ここに出力したい処理などを記述」
        ?>
        <div class="article--archive">
        <dl>
          <article class="card--archive Card Background Grid">
            <div class="card__header">
              <div class="card__figure">
                <div class="card__image Image">
                </div>
              </div>
            </div>
            <div class="card__body">
              <h3 class="card__heading Heading--m1bold"><?php the_title(); ?>//チーズバーガー</h3>
              <h4 class="card__subtitle Heading--m1bold">小見出しが入ります</h4>
              <p class="card__content Content">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </div>
            <div class="card__footer">
              <div class="card__actions">
                <?php the_content( '詳しく見る' ); //<a href="#" class="card__link Link">詳しく見る</a> 
                ?>
              </div>
            </div>
          </article>
        </dl>

      <?php 
        endwhile; 
        // 5.繰り返し処理ここまで。投稿データがまだあればwhileに戻る。なければ終了
else :      //6.投稿データがなければ
      ?><p>表示する記事がありません</p>
    <?php     //7.ない時の処理
endif;   //8.条件分岐終了
?>

    <div class="article--archive">
      <dl>
        <article class="card--archive Card Background Grid">
          <div class="card__header">
            <div class="card__figure">
              <div class="card__image Image">
              </div>
            </div>
          </div>
          <div class="card__body">
            <h3 class="card__heading Heading--m1bold">チーズバーガー</h3>
            <h4 class="card__subtitle Heading--m1bold">小見出しが入ります</h4>
            <p class="card__content Content">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </div>
          <div class="card__footer">
            <div class="card__actions">
              <a href="#" class="card__link Link">詳しく見る</a>
            </div>
          </div>
        </article>
      </dl>

      <dl>
        <article class="card--archive Card Background Grid">
          <div class="card__header">
            <div class="card__figure">
              <div class="card__image Image">
              </div>
            </div>
          </div>

          <div class="card__body">
            <h3 class="card__heading Heading--m1bold">ダブルチーズバーガー</h3>
            <h4 class="card__subtitle Heading--m1bold">小見出しが入ります</h4>
            <p class="card__content Content">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </div>

          <div class="card__footer">
            <div class="card__actions">
              <a href="#" class="card__link Link">詳しく見る</a>
            </div>
          </div>
        </article>
      </dl>

      <dl>
        <article class="card--archive Card Background Grid">
          <div class="card__header">
            <div class="card__figure">
              <div class="card__image Image">
              </div>
            </div>
          </div>
          <div class="card__body">
            <h3 class="card__heading Heading--m1bold">スペシャルチーズバーガー</h3>
            <h4 class="card__subtitle Heading--m1bold">小見出しが入ります</h4>
            <p class="card__content Content">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </div>
          <div class="card__footer">
            <div class="card__actions">
              <a href="#" class="card__link Link">詳しく見る</a>
            </div>
          </div>
        </article>
      </dl>

      <dl>
        <article class="card--archive Card Background Grid">
          <div class="card__header">
            <div class="card__figure">
              <div class="card__image Image">
              </div>
            </div>
          </div>
          <div class="card__body">
            <h3 class="card__heading Heading--m1bold">4見出しが入ります</h3>
            <h4 class="card__subtitle Heading--m1bold">小見出しが入ります</h4>
            <p class="card__content Content">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </div>
          <div class="card__footer">
            <div class="card__actions">
              <a href="#" class="card__link Link">詳しく見る</a>
            </div>
          </div>
        </article>
      </dl>

      <dl>
        <article class="card--archive Card Background Grid">
          <div class="card__header">
            <div class="card__figure">
              <div class="card__image Image">
              </div>
            </div>
          </div>
          <div class="card__body">
            <h3 class="card__heading Heading--m1bold">5見出しが入ります</h3>
            <h4 class="card__subtitle Heading--m1bold">小見出しが入ります</h4>
            <p class="card__content Content">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </div>
          <div class="card__footer">
            <div class="card__actions">
              <a href="#" class="card__link Link">詳しく見る</a>
            </div>
          </div>
        </article>
      </dl>

      <dl>
        <article class="card--archive Card Background Grid">
          <div class="card__header">
            <div class="card__figure">
              <div class="card__image Image">
              </div>
            </div>
          </div>
          <div class="card__body">
            <h3 class="card__heading Heading--m1bold">6見出しが入ります</h3>
            <h4 class="card__subtitle Heading--m1bold">小見出しが入ります</h4>
            <p class="card__content Content">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </div>
          <div class="card__footer">
            <div class="card__actions">
              <a href="#" class="card__link Link">詳しく見る</a>
            </div>
          </div>
        </article>
      </dl>

      <dl>
        <article class="card--archive Card Background Grid">
          <div class="card__header">
            <div class="card__figure">
              <div class="card__image Image">
              </div>
            </div>
          </div>
          <div class="card__body">
            <h3 class="card__heading Heading--m1bold">7見出しが入ります</h3>
            <h4 class="card__subtitle Heading--m1bold">小見出しが入ります</h4>
            <p class="card__content Content">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </div>
          <div class="card__footer">
            <div class="card__actions">
              <a href="#" class="card__link Link">詳しく見る</a>
            </div>
          </div>
        </article>
      </dl>

      <dl>
        <article class="card--archive Card Background Grid">
          <div class="card__header">
            <div class="card__figure">
              <div class="card__image Image">
              </div>
            </div>
          </div>
          <div class="card__body">
            <h3 class="card__heading Heading--m1bold">8見出しが入ります</h3>
            <h4 class="card__subtitle Heading--m1bold">小見出しが入ります</h4>
            <p class="card__content Content">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </div>
          <div class="card__footer">
            <div class="card__actions">
              <a href="#" class="card__link Link">詳しく見る</a>
            </div>
          </div>
        </article>
      </dl>

      <dl>
        <article class="card--archive Card Background Grid">
          <div class="card__header">
            <div class="card__figure">
              <div class="card__image Image">
              </div>
            </div>
          </div>
          <div class="card__body">
            <h3 class="card__heading Heading--m1bold">9見出しが入ります</h3>
            <h4 class="card__subtitle Heading--m1bold">小見出しが入ります</h4>
            <p class="card__content Content">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </div>
          <div class="card__footer">
            <div class="card__actions">
              <a href="#" class="card__link Link">詳しく見る</a>
            </div>
          </div>
        </article>
      </dl>

      <dl>
        <article class="card--archive Card Background Grid">
          <div class="card__header">
            <div class="card__figure">
              <div class="card__image Image">
              </div>
            </div>
          </div>
          <div class="card__body">
            <h3 class="card__heading Heading--m1bold">10見出しが入ります</h3>
            <h4 class="card__subtitle Heading--m1bold">小見出しが入ります</h4>
            <p class="card__content Content">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </div>
          <div class="card__footer">
            <div class="card__actions">
              <a href="#" class="card__link Link">詳しく見る</a>
            </div>
          </div>
        </article>
      </dl>

      <dl>
        <article class="card--archive Card Background Grid">
          <div class="card__header">
            <div class="card__figure">
              <div class="card__image Image">
              </div>
            </div>
          </div>
          <div class="card__body">
            <h3 class="card__heading Heading--m1bold">11見出しが入ります</h3>
            <h4 class="card__subtitle Heading--m1bold">小見出しが入ります</h4>
            <p class="card__content Content">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </div>
          <div class="card__footer">
            <div class="card__actions">
              <a href="#" class="card__link Link">詳しく見る</a>
            </div>
          </div>
        </article>
      </dl>

      <dl>
        <article class="card--archive Card Background Grid">
          <div class="card__header">
            <div class="card__figure">
              <div class="card__image Image">
              </div>
            </div>
          </div>
          <div class="card__body">
            <h3 class="card__heading Heading--m1bold">12見出しが入ります</h3>
            <h4 class="card__subtitle Heading--m1bold">小見出しが入ります</h4>
            <p class="card__content Content">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </div>
          <div class="card__footer">
            <div class="card__actions">
              <a href="#" class="card__link Link">詳しく見る</a>
            </div>
          </div>
        </article>
      </dl>

      <dl>
        <article class="card--archive Card Background Grid">
          <div class="card__header">
            <div class="card__figure">
              <div class="card__image Image">
              </div>
            </div>
          </div>
          <div class="card__body">
            <h3 class="card__heading Heading--m1bold">13見出しが入ります</h3>
            <h4 class="card__subtitle Heading--m1bold">小見出しが入ります</h4>
            <p class="card__content Content">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </div>
          <div class="card__footer">
            <div class="card__actions">
              <a href="#" class="card__link Link">詳しく見る</a>
            </div>
          </div>
        </article>
      </dl>

      <dl>
        <article class="card--archive Card Background Grid">
          <div class="card__header">
            <div class="card__figure">
              <div class="card__image Image">
              </div>
            </div>
          </div>

          <div class="card__body">
            <h3 class="card__heading Heading--m1bold">14見出しが入ります</h3>
            <h4 class="card__subtitle Heading--m1bold">小見出しが入ります</h4>
            <p class="card__content Content">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </div>
          <div class="card__footer">
            <div class="card__actions">
              <a href="#" class="card__link Link">詳しく見る</a>
            </div>
          </div>
        </article>
      </dl>
      <dl>
        <article class="card--archive Card Background Grid">
          <div class="card__header">
            <div class="card__figure">
              <div class="card__image Image">
              </div>
            </div>
          </div>

          <div class="card__body">
            <h3 class="card__heading Heading--m1bold">15見出しが入ります</h3>
            <h4 class="card__subtitle Heading--m1bold">小見出しが入ります</h4>
            <p class="card__content Content">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </div>

          <div class="card__footer">
            <div class="card__actions">
              <a href="#" class="card__link Link">詳しく見る</a>
            </div>
          </div>
        </article>
      </dl>

      <dl>
        <article class="card--archive Card Background Grid">
          <div class="card__header">
            <div class="card__figure">
              <div class="card__image Image">
              </div>
            </div>
          </div>
          <div class="card__body">
            <h3 class="card__heading Heading--m1bold">16見出しが入ります</h3>
            <h4 class="card__subtitle Heading--m1bold">小見出しが入ります</h4>
            <p class="card__content Content">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </div>
          <div class="card__footer">
            <div class="card__actions">
              <a href="#" class="card__link Link">詳しく見る</a>
            </div>
          </div>
        </article>
      </dl>

      <dl>
        <article class="card--archive Card Background Grid">
          <div class="card__header">
            <div class="card__figure">
              <div class="card__image Image">
              </div>
            </div>
          </div>
          <div class="card__body">
            <h3 class="card__heading Heading--m1bold">17見出しが入ります</h3>
            <h4 class="card__subtitle Heading--m1bold">小見出しが入ります</h4>
            <p class="card__content Content">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </div>
          <div class="card__footer">
            <div class="card__actions">
              <a href="#" class="card__link Link">詳しく見る</a>
            </div>
          </div>
        </article>
      </dl>

      <dl>
        <article class="card--archive Card Background Grid">
          <div class="card__header">
            <div class="card__figure">
              <div class="card__image Image">
              </div>
            </div>
          </div>
          <div class="card__body">
            <h3 class="card__heading Heading--m1bold">18見出しが入ります</h3>
            <h4 class="card__subtitle Heading--m1bold">小見出しが入ります</h4>
            <p class="card__content Content">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </div>
          <div class="card__footer">
            <div class="card__actions">
              <a href="#" class="card__link Link">詳しく見る</a>
            </div>
          </div>
        </article>
      </dl>

    </div>
  </main>

  <script type="text/javascript" src="./js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="/js/humbarger.js"></script>
  <script type="text/javascript" src="/js/paginathing.js"></script>
  <script type="text/javascript" src="/js/paginathing.min.js"></script>
  <script type="text/javascript" src="/js/pagination__archive.js"></script>

  <?php get_footer(); ?>
