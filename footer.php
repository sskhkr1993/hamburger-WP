    <footer class="l-footer">
    <?php wp_nav_menu( array( 
        'theme_location' => 'footer_nav',
        'container' => 'nav',  
        //コンテナのデフォルト <div> を <nav> に変更
        'container_id' => 'footer_nav_container',  
        //コンテナの ID を指定
        'menu_id' => 'footer_nav'  ,
        //デフォルトの menu-{メニュー名} を変更
        'menu_class' => 'footer_nav'
      )); ?>
      <p class="copyright">Copyright: RaiseTech</p>
    </footer>

    <script type="text/javascript" src="./js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="./js/humbarger.js"></script>

    <?php wp_footer(); ?>
    
  </body>
</html>