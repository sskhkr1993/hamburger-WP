<?php get_header(); ?>

<?php get_sidebar(); ?> 

  <!--メインビジュアル-->
  <div class="hero hero--search ">
    <div class="hero--search__background Flexbox--column">
      <h1 class="hero--search__heading Heading--bold">Search:</h1>
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
<?php // ブログの一覧を表示する start ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="blog-list__list-item">
        <a href="<?php the_permalink(); ?>" class="blog-item">
            <?php // アイキャッチを表示させる start ?>    
            <div class="blog-item__thumbnail">
                <?php if(has_post_thumbnail()): ?>
                <img class="blog-item__thumbnail-image" src="<?php the_post_thumbnail_url('large'); ?>">
                <?php endif; ?>
            </div>
            <?php // アイキャッチを表示させる end ?>
            <div class="blog-item__content">
                <?php // タイトルを表示させる start ?>
                <h3 class="blog-item__title"><?php the_title(); ?></h3>
                <?php // タイトルを表示させる end ?>
                <?php // 抜粋を表示させる start ?>
                <h3 class="blog-item__read"><?php the_excerpt(); ?></h3>
                <?php // 抜粋を表示させる end ?>
                <div class="blog-item__button">
                    <span class="blog-item__button-more">記事を読む</span>
                </div>
            </div>
        </a>
    </article>
<?php endwhile; endif; ?>
<?php // ブログの一覧を表示する end ?>


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
          <h3 class="card__heading Heading--m1bold">1見出しが入ります</h3>
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
          <h3 class="card__heading Heading--m1bold">2見出しが入ります</h3>
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
          <h3 class="card__heading Heading--m1bold">3見出しが入ります</h3>
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

<?php get_footer(); ?>