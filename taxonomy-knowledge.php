<div class="container">
  <?php get_template_part('templates/tax', 'knowledgeheader'); ?>

  <?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
      <?php _e('Sorry, no results were found.', 'roots'); ?>
    </div>
    <?php get_search_form(); ?>
  <?php endif; ?>

  <!-- <div id="cms-rel-posts">
    <div class="row">
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/content', 'taxonomy'); ?>
      <?php endwhile; ?>
    </div>
  </div> -->
  
  <?php
  $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
  ?>

  <div id="cms-rel-posts">
      <div class="row" data-path="<?php echo get_stylesheet_directory_uri(); ?>" data-post-type="post" data-category="" data-taxonomy="knowledge" data-tag="<?php echo $term->slug; ?>" data-display-posts="-1" data-button-text="Se alle artikler om <?php echo $term->name; ?>">
      <!-- Load Ajax Posts Here -->
      </div>
  </div>

</div>

