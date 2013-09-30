<div class="container">
  <?php get_template_part('templates/tax', 'cmsheader'); ?>

  <?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
      <?php _e('Sorry, no results were found.', 'roots'); ?>
    </div>
    <?php get_search_form(); ?>
  <?php endif; ?>

  <div id="cms-rel-posts">
    <div class="row">
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/content', 'taxonomy'); ?>
      <?php endwhile; ?>
    </div>
  </div>


  <?php if ($wp_query->max_num_pages > 1) : ?>
    <nav class="post-nav">
      <ul class="pager">
        <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
        <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
      </ul>
    </nav>
  <?php endif; ?>

  <?php get_template_part('templates/cms', 'reference'); ?>

  <div id="cta-bottom">

      <a href="<?php the_field('contact_us_url', 'option'); ?>" class="btn btn-primary btn-lg">Jeg vil gerne kontaktes vedr. en Umbraco løsning</a>

  </div>
  
</div>