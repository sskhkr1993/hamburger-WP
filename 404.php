<!--404 
1.ユーザーに対して、探しているページが見つからないことを明確に伝える。
2.404 ページを、サイトのその他の部分と同じデザイン（ナビゲーションを含む）にする。
3.最も人気のある記事や投稿へのリンクの他、ホームページへのリンクなどを追加する。
4.404 ページが検索エンジンのインデックスに登録されないようにするため、存在しないページがリクエストされたときにウェブサーバーが実際の 404 HTTP ステータス コードを返すことを確認する。-->

<?php get_header(); ?>

<?php get_sidebar(); ?>

<!--メインビジュアル-->
<div class="hero">
  <h2 class="hero__heading">404 Not Found</h2>
</div>

<!--404-->
<main class="l-main u-padding">
  <section class="not-found">
    <h2 class="not-found__heading Heading--m1bold">お探しのページが見つかりませんでした</h2>
    <p class="not-found__text Content">
      指定された以下のページは存在しないか、または移動した可能性があります。
    </p>

    <p class="not-found__error_url Heading--m1bold">≪URL：<span><?php echo get_pagenum_link(); ?></span>≫</p>

    <p class="not-found__text Content">お手数ですが、検索ボックスにお探しのコンテンツに該当するキーワードを入力して下さい。</p>

    <!-- 検索フォームを表示 -->
    <div class="not-found__search">
      <?php get_search_form(); ?>
    </div>

    <div class="not-found__text Content">
      <a class="not-found__home_url" href="<?php echo esc_url(home_url('/')) ; ?>">⇒トップページへ戻る</a>
    </div>
  </section>

</main>

<?php get_footer(); ?>