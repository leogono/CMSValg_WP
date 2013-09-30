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
      <div id="breadcrumbs">
        <ul class="clearfix">
          <li><a href="#" class="bcrumbs url">Forside</a></li>
          <li class="cms-drop current">
            <i class="icon-caret-right"></i>
            <a href="#" class="bcrumbs url dropdown-toggle" data-toggle="dropdown">Umbraco<i class="icon-caret-down"></i></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <?php
  } ?>
  
  <main id="main">
    <?php include roots_template_path(); ?>
  </main>
  <?php /*
  <div class="wrap container" role="document">
    <div class="content row">
      <div class="main <?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </div><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->
  */ ?>

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
