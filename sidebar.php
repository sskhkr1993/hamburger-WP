
  <!--メニューの背景-->
  <div class="menu-background"></div>
  <!--サイドメニューpc-->
  <nav class="menu-wrapper--pc">
    <div class="menu">
      <div class="menu__heading">
        Menu
      </div>

      <?php wp_nav_menu( array( 
        'theme_location' => 'hamburger_menu',
        'container' => 'div',  
        //コンテナのデフォルト <div> を <nav> に変更
        'container_id' => 'hamburger_menu_container',  
        //コンテナの ID を指定
        'menu_id' => 'hamburger_menu',  
        //デフォルトの menu-{メニュー名} を変更
        'menu_class' => 'menu-list'
      )); ?>
  </nav>

  <!--サイドメニューsp-->
  <nav class="menu-wrapper">
    <div class="menu">
      <div class="menu__heading">
        Menu
      </div>
      <button type="button" class="menu-button">
        <span class="menu-button__close js-button">×ボタン</span>
      </button>
      <?php wp_nav_menu( array( 
        'theme_location' => 'hamburger_menu',
        'container' => 'div',  
        //コンテナのデフォルト <div> を <nav> に変更
        'container_id' => 'hamburger_menu_container',  
        //コンテナの ID を指定
        'menu_id' => 'hamburger_menu',  
        //デフォルトの menu-{メニュー名} を変更
        'menu_class' => 'menu-list--second'
      )); ?>
    </div>
  </nav>
