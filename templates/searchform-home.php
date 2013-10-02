<form role="search" method="get" class="search-form form-inline" action="<?php echo home_url('/'); ?>">
  <div id="searchform" class="input-group">
    <span class="input-group-addon">
    	<i class="icon-search"></i>
    </span>
    <input type="search" class="form-control input-lg" placeholder="Er der noget bestemt du søger?" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s">
  </div>
</form>
