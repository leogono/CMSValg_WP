<div class="container">
  <?php get_template_part('templates/tax', 'cmsheader'); ?>

  <?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
      <?php _e('Sorry, no results were found.', 'roots'); ?>
    </div>
    <?php get_search_form(); ?>
  <?php endif; ?>

  <?php
  $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
  ?>

  <div id="cms-rel-posts-1">
    <div class="row">
      <?php

      // The Query
      $args1 = array(
        'posts_per_page' => 4,
        'paged'          => $page,
        
        'orderby'   => 'date',
          'order'     => 'DESC',
        'post_status' => 'publish',
        'cms_system' => $term->slug,
      );
      $the_query = new WP_Query( $args1 );
      $features = array();

      // The Loop
      while ( $the_query->have_posts() ) {
        $the_query->the_post(); $features[] = $post->ID; ?>

        <article <?php post_class('post col-xs-6 col-sm-6 col-md-3 w-thumbnails'); ?>>
          <a href="<?php the_permalink(); ?>" class="post-thumbnail">
            <?php 
              if ( has_post_thumbnail() ) {
                the_post_thumbnail('posts-thumb', array('class' => 'img-responsive'));
              }
              else {
                echo '<img src="http://placehold.it/300x320&amp;text=No+featured+image" class="img-responsive" alt="">';
              }
              ?>
          </a>
          <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <div class="comment-count-wrap">
            <a href="<?php the_permalink(); ?>#comments-tag" class="comment-count"><i class="icon-comment"></i> <?php comments_number( '0', '1', '%' ); ?></a>
          </div>
        </article>

        <?php
      }

      /* Restore original Post Data 
       * NB: Because we are using new WP_Query we aren't stomping on the 
       * original $wp_query and it does not need to be reset.
      */
      wp_reset_postdata();
      if($features){      
         $postsNotIn = implode(",", $features);
       }

      ?>
    </div>

    <div id="cms-rel-posts">
      <div class="row" data-path="<?php echo get_stylesheet_directory_uri(); ?>" data-post-type="post" data-category="" data-taxonomy="cms_system" data-tag="<?php echo $term->slug; ?>" data-display-posts="-1" data-post-not-in="<?php echo $postsNotIn; ?>" data-button-text="Se alle artikler om <?php echo $term->name; ?>">
        <!-- Load Ajax Posts Here -->
      </div>
    </div>

    <p id="load-more" class="more"><span class="loader"></span><span class="text">Se alle artikler om <?php echo $term->name; ?></span></p>
  </div>
  

  <?php get_template_part('templates/cms', 'reference'); ?>

  <div id="cta-bottom">

      <a href="<?php the_field('contact_us_url', 'option'); ?>" class="btn btn-primary btn-lg">Jeg vil gerne kontaktes vedr. en Umbraco løsning</a>

  </div>
  
</div>