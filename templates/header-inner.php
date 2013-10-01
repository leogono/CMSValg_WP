<?php /*
<header class="banner container" role="banner">
  <div class="row">
    <div class="col-lg-12">
      <a class="brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
      <nav class="nav-main" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>
*/ ?>
<header id="masthead">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-12">
        <div id="branding">
          <a href="<?php echo home_url(); ?>/" class="site-name"><?php bloginfo('name'); ?></a>
          <p class="site-desc"><?php bloginfo('description'); ?></p>
        </div>
      </div>
      <div class="col-md-6 col-sm-7">
        <?php get_template_part('templates/searchform-home'); ?>
      </div>
      <div class="col-md-3 col-sm-5">
        <div id="knowledge-cat" class="btn-group pull-right">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            Alt vores CMS viden <span class="caret"></span>
          </button>
          <?php get_template_part('templates/list-knowledge'); ?>
        </div>
      </div>
    </div>
  </div>
  
</header>