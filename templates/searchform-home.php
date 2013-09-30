<form role="search" method="get" class="search-form form-inline" action="<?php echo home_url('/'); ?>">
  <!-- <div class="input-group">
    <input type="search" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s" class="search-field form-control" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>">
    <label class="hide"><?php _e('Search for:', 'roots'); ?></label>
    <span class="input-group-btn">
      <button type="submit" class="search-submit btn btn-default"><?php _e('Search', 'roots'); ?></button>
    </span>
  </div> -->
  <div id="searchform" class="input-group">
    <span class="input-group-addon">
    	<i class="icon-search"></i>
    </span>
    <input type="search" class="form-control input-lg" placeholder="Er der noget bestemt du søger?" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s">
  </div>
</form>
