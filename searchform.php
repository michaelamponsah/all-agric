<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>" class="search-form">
  <span  class="material-symbols-outlined bg-toggle-btn search-icon" data-search-icon>
    search
  </span>
  <input type="search" name="s" id="s" placeholder="Search All Agric" value="<?php get_search_query(); ?>" />
</form>