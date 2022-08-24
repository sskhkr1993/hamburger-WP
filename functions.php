
<?php
    //テーマサポート
    function custom_theme_support() {
        add_theme_support( 'html5', array( 
            'serch-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )); //吐き出されるコード/タグをデフォルトのXHTMLからHTML5(Livin Standard)に
        add_theme_support('post-thumbnails'); //アイキャッチ機能の有効化
        add_theme_support( 'title-tag' );     //管理画面からタイトルタグ登録可能に
        add_theme_support( 'menus' );         //カスタムメニューの有効化
        add_theme_support( 'post-thumbnails' ); //アイキャッチ
        register_nav_menus(array(
            'hamburger_menu'=>esc_html__('hamburger menu','hamburger'),
            'footer_nav'=>esc_html__('footer navigation','hamburger'),
        ));
        add_theme_support('editor-styles');   //エディタスタイルの有効化
        add_editor_style();
    }
    add_action('after_setup_theme','custom_theme_support');


//CSS,JavaScriptの呼び出し
function hamburger_script() {
    $locale = get_locale(); //言語情報取得
    $locale = apply_filters( 'theme_locale', $locale, 'hamburger' );
    wp_enqueue_style( 'font-awesome',  '"https://kit.fontawesome.com/30bd9b4b55.js" crossorigin="anonymous"' , array(), '6.1.1' ); //FontAwesome読み込み
    if( $locale == 'ja' ) {
        wp_enqueue_style( 'wpbeg-mplus1p', '//fonts.googleapis.com/earlyaccess/mplus1p.css', array() );    
    }
    wp_enqueue_style( 'Roboto', '"https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;500;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"', array() ); //Webフォントの読み込み
    wp_enqueue_style( 'hamburger-hamburger', get_theme_file_uri ( 'css/style.css' ), array(),'1.0.0' ); //テーマ用CSS、ファイル読み込み
    wp_enqueue_style( 'hamburger-style', get_theme_file_uri ( '/style.css' ), array(), '1.0.0' ); //テーマデフォルトstyle.css読み込み
    wp_enqueue_script( 'myjquery', get_theme_file_uri ('/js/jquery-3.6.0.min.js' ), '', '3.4.1', true ); //jQyery本体読み込み
    wp_enqueue_script( 'humbargerjs', get_theme_file_uri ('/js/humbarger.js' ), array( 'myjquery' ), '1.0.0', true ); //javaScriptファイル読み込み
}
add_action( 'wp_enqueue_scripts', 'hamburger_script' );

    //タイトル出力
    function hamburger_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'hamburger_title' );