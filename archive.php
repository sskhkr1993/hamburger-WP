<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hamburger</title>
  <meta name="discription" content="ハンバーガーショップのサイト">

  <!--CSS関係-->
  <link
    href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;500;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <!--google font-->
  <link rel="stylesheet" ="style.css">
  <!--CSS-->
  <link rel="stylesheet" ="css/style.css">
</head>


<body class="Wrapper">
  <!--header-->
  <header class="l-header">
    <button type="button" class="button js-button">
      Menu
    </button>
    <p class="logo logo--small">Hamburger</p>
    <div class="seach">
      <div class="seach__icon">
        <input type="search" class="seach__box">
      </div>
      <input type="submit" value="検索" class="seach__submit">
    </div>

  </header>
  
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

  <!--メニューの背景-->
  <div class="menu-background"></div>
  <!--サイドメニューpc-->
  <nav class="menu-wrapper--pc">
    <div class="menu">
      <div class="menu__heading">
        Menu
      </div>

      <ul class="menu-list">
        <li class="menu-list__item">バーガー
          <ul class="menu-list--second">
            <li class="menu-list__item--second">ハンバーガー</li>
            <li class="menu-list__item--second">チーズバーガー</li>
            <li class="menu-list__item--second">テリヤキバーガー</li>
            <li class="menu-list__item--second">アボカドバーガー</li>
            <li class="menu-list__item--second">フィッシュバーガー</li>
            <li class="menu-list__item--second">ベーコンバーガー</li>
            <li class="menu-list__item--second">チキンバーガー</li>
          </ul>
        </li>
        <li class="menu-list__item">サイド
          <ul class="menu-list--second">
            <li class="menu-list__item--second">ポテト</li>
            <li class="menu-list__item--second">サラダ</li>
            <li class="menu-list__item--second">ナゲット</li>
            <li class="menu-list__item--second">コーン</li>
          </ul>
        </li>
        <li class="menu-list__item">ドリンク
          <ul class="menu-list--second">
            <li class="menu-list__item--second">コーラ</li>
            <li class="menu-list__item--second">ファンタ</li>
            <li class="menu-list__item--second">オレンジ</li>
            <li class="menu-list__item--second">アップル</li>
            <li class="menu-list__item--second">紅茶（Ice/Hot）</li>
            <li class="menu-list__item--second">コーヒー（Ice/Hot）</li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  <!--サイドメニュー-->
  <nav class="menu-wrapper">
    <div class="menu">
      <div class="menu__heading">
        Menu
      </div>
      <button type="button" class="menu-button">
        <span class="menu-button__close js-button">×ボタン</span>
      </button>
      <ul class="menu-list">
        <li class="menu-list__item">バーガー
          <ul class="menu-list--second">
            <li class="menu-list__item--second">ハンバーガー</li>
            <li class="menu-list__item--second">チーズバーガー</li>
            <li class="menu-list__item--second">テリヤキバーガー</li>
            <li class="menu-list__item--second">アボカドバーガー</li>
            <li class="menu-list__item--second">フィッシュバーガー</li>
            <li class="menu-list__item--second">ベーコンバーガー</li>
            <li class="menu-list__item--second">チキンバーガー</li>
          </ul>
        </li>
        <li class="menu-list__item">サイド
          <ul class="menu-list--second">
            <li class="menu-list__item--second">ポテト</li>
            <li class="menu-list__item--second">サラダ</li>
            <li class="menu-list__item--second">ナゲット</li>
            <li class="menu-list__item--second">コーン</li>
          </ul>
        </li>
        <li class="menu-list__item">ドリンク
          <ul class="menu-list--second">
            <li class="menu-list__item--second">コーラ</li>
            <li class="menu-list__item--second">ファンタ</li>
            <li class="menu-list__item--second">オレンジ</li>
            <li class="menu-list__item--second">アップル</li>
            <li class="menu-list__item--second">紅茶（Ice/Hot）</li>
            <li class="menu-list__item--second">コーヒー（Ice/Hot）</li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

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

  <!--footer-->
  <footer class="l-footer">
    <div class="footer">
      <a href="#" class="footer__list">ショップ情報 |</a>
      <a href="#" class="footer__list">ヒストリー</a>
    </div>
    <p class="copyright">Copyright: RaiseTech</p>
  </footer>

  <script type="text/javascript" src="./js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="/js/humbarger.js"></script>
  <script type="text/javascript" src="/js/paginathing.js"></script>
  <script type="text/javascript" src="/js/paginathing.min.js"></script>
  <script type="text/javascript" src="/js/pagination__archive.js"></script>
</body>

</html>