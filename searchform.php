<form class="seach" id="searchform" method="get" action="<?php echo esc_url(home_url('/')); ?>">
  <div class="seach__icon">
    <input class="seach__box" type="search" name="s" id="s" placeholder="<?php if (!is_search()) {
                                                                            echo 'バーガー';
                                                                          } ?>" value="<?php if (is_search()) {
                                  echo get_search_query();
                                } ?>">
  </div>
  <input class="seach__submit" id="searchsubmit" type="submit" value="検索">
</form>