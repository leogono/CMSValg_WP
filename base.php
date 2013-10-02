<?php get_template_part('templates/head'); ?>
<body <?php body_class('cmsvalg'); ?>>

  <!--[if lt IE 8]><div class="alert alert-warning"><?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?></div><![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } elseif (is_front_page()) {
      get_template_part('templates/header');
    } else {
      get_template_part('templates/header-inner');
    }
  ?>
  
  <?php if(!is_front_page()) {
    ?>
    <div class="container">
      <div id="breadcrumbs" class="clearfix">
        <?php if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb();
        } ?>
        <?php if(is_tax('cms_system')) {
          ?>
          <div class="cms-drop">
            <a href="#" class="bcrumbs url dropdown-toggle" data-toggle="dropdown"><i class="icon-caret-down"></i></a>
            <?php get_template_part('templates/list-cmssimple'); ?>
          </div>
          
          <?php
        } ?>

      </div>
    </div>
    <?php
  } ?>
  
  <main id="main">
    <?php include roots_template_path(); ?>
  </main>

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
