
<?php
//テーマサポート
function custom_theme_support()
{
    add_theme_support('html5', array(
        'serch-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    )); //吐き出されるコード/タグをデフォルトのXHTMLからHTML5(Livin Standard)に
    add_theme_support('post-thumbnails'); //アイキャッチ機能の有効化
    add_theme_support('title-tag');     //管理画面からタイトルタグ登録可能に
    add_theme_support('menus');         //カスタムメニューの有効化
    add_theme_support('post-thumbnails'); //アイキャッチ
    register_nav_menus(array(
        'hamburger_menu' => esc_html__('hamburger menu', 'hamburger'),
        'footer_nav' => esc_html__('footer navigation', 'hamburger'),
    ));
    add_theme_support('editor-styles');   //エディタスタイルの有効化
    add_editor_style();
}
add_action('after_setup_theme', 'custom_theme_support');


//CSS,JavaScriptの呼び出し
function hamburger_script()
{
    $locale = get_locale(); //言語情報取得
    $locale = apply_filters('theme_locale', $locale, 'hamburger');
    wp_enqueue_style('font-awesome',  '"https://kit.fontawesome.com/30bd9b4b55.js" crossorigin="anonymous"', array(), '6.1.1'); //FontAwesome読み込み
    if ($locale == 'ja') {
        wp_enqueue_style('wpbeg-mplus1p', '//fonts.googleapis.com/earlyaccess/mplus1p.css', array());
    }
    wp_enqueue_style('Roboto', '"https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;500;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"', array()); //Webフォントの読み込み
    wp_enqueue_style('hamburger-hamburger', get_theme_file_uri('css/style.css'), array(), '1.0.0'); //テーマ用CSS、ファイル読み込み
    wp_enqueue_style('hamburger-style', get_theme_file_uri('/style.css'), array(), '1.0.0'); //テーマデフォルトstyle.css読み込み
    wp_enqueue_script('myjquery', get_theme_file_uri('/js/jquery-3.6.0.min.js'), '', '3.4.1', true); //jQyery本体読み込み
    wp_enqueue_script('humbargerjs', get_theme_file_uri('/js/humbarger.js'), array('myjquery'), '1.0.0', true); //javaScriptファイル読み込み
}
add_action('wp_enqueue_scripts', 'hamburger_script');

//タイトル出力
function hamburger_title($title)
{
    if (is_front_page() && is_home()) { //トップページなら
        $title = get_bloginfo('name', 'display');
    } elseif (is_singular()) { //シングルページなら
        $title = single_post_title('', false);
    }
    return $title;
}
add_filter('pre_get_document_title', 'hamburger_title');

// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'archive'; //記事一覧ページのスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

//searchpageのタイトル
function wp_search_title($search_title)
{
    if (is_search()) {
        $search_title = '「' . get_search_query() . '」の検索結果';
    }
    return $search_title;
}
add_filter('wp_title', 'wp_search_title');

//何も記入せずに検索をすると、TOPページにリダイレクトされる設定
function empty_search_redirect($wp_query)
{
    if ($wp_query->is_main_query() && $wp_query->is_search && !$wp_query->is_admin) {
        $s = $wp_query->get('s');
        $s = trim($s);
        if (empty($s)) {
            wp_safe_redirect(home_url('/'));
            exit;
        }
    }
}
add_action('parse_query', 'empty_search_redirect');


//pagination
function pagenation($pages = '', $range = 2)
{
    $showitems = ($range * 1) + 1;
    global $paged;
    if (empty($paged)) $paged = 1;
    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }
    if (1 != $pages) {
        // 画像を使う時用に、テーマのパスを取得
        $img_pass = get_template_directory_uri();
        echo "<nav class=\"m-pagenation\">";
        // ページ番号を出力
        echo "<ul class=\"m-pagenation__body\">\n";
        // 「1/2」表示 現在のページ数 / 総ページ数
        echo "<li class=\"m-pagenation__result\">Page" . $paged . "/" . $pages . "</li>";

        // 「前へ」を表示
        if ($paged > 1) echo
        "<li class=\"m-pagenation__prev\">
                <a href='" . get_pagenum_link($paged - 1) . "'>
                    <img class=\"m-pagenation__prev--icon\" src='$img_pass/image\archive_search\pagination-pre.jpg'>
                    <span class=\"m-pagenation__prev--text\">前へ</span>
                </a>
            </li>";
        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                echo ($paged == $i) ? "<li class=\"page-current\">" . $i . "</li>" : // 現在のページの数字はリンク無し
                    "<li class=\"page\"><a href='" . get_pagenum_link($i) . "'>" . $i . "</a></li>";
            }
        }
        // [...] 表示
        // if(($paged + 4 ) <ul $pages){
        //     echo "<li class=\"notNumbering\">...</li>";
        //     echo "<li><a href='".get_pagenum_link($pages)."'>".$pages."</a></li>";
        // }
        // 「次へ」を表示
        if ($paged < $pages) echo
        "<li class=\"m-pagenation__next\">
                <a href='" . get_pagenum_link($paged + 1) . "'>
                    <span class=\"m-pagenation__next--text\">次へ</span>
                    <img class=\"m-pagenation__next--icon\" src='$img_pass/image\archive_search\pagination-next.jpg'>
                </a>
            </li>";
        echo "</ul>\n";
        echo "</nav>\n";
    }
}
