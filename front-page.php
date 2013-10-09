<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-4">
      <div id="sidebar-widget">

        <div id="cms-sidelist">
          <?php get_template_part('templates/list-cmssystem'); ?>
        </div>
        
        <div id="most-contributor" class="hidden-xs">
          <?php get_template_part('templates/list-author'); ?>
        </div>

      </div>
    </div>

    <div class="col-md-9 col-sm-8">
    	<!-- Feature Content -->
      <div id="feat-content">
        <?php

        // The Query
        $the_query = new WP_Query( 'posts_per_page=1&ignore_sticky_posts=1' );

        // The Loop
        if ( $the_query->have_posts() ) {
          while ( $the_query->have_posts() ) {
            $the_query->the_post();
            ?>
            <article class="post feature-post w-thumbnails">
              <a href="<?php the_permalink(); ?>" class="post-thumbnail">
                <?php
                $attachment_id = get_field('promotion_image');
                $size = "featured-thumb";
                 
                $image = wp_get_attachment_image_src( $attachment_id, $size );

                if ( $image ) {
                  echo '<img src="' . $image[0] . '" alt="" class="img-responsive">';
                }
                else {
                  echo '<img src="http://placehold.it/850x400&amp;text=No+promotion+image" class="img-responsive" alt="">';
                }
                ?>
              </a>
              <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <div class="comment-count-wrap">
                <a href="<?php the_permalink(); ?>#comments-tag" class="comment-count icon-comment"> <?php comments_number( '0', '1', '%' ); ?></a>
              </div>
            </article>

            <?php
          }
        } else {
          // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();

        ?>
        
      </div>

      <!-- content lists -->
      <div id="content-lists" class="front-page">
        <div class="row">
          <?php

          // The Query
          $query2 = new WP_Query( 'posts_per_page=3&offset=1&ignore_sticky_posts=1' );

          // The Loop
          if ( $query2->have_posts() ) {
            while ( $query2->have_posts() ) {
              $query2->the_post();
              ?>
              <article class="post col-sm-4 w-thumbnails">
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
                  <a href="<?php the_permalink(); ?>#comments-tag" class="comment-count icon-comment"><?php comments_number( '0', '1', '%' ); ?></a>
                </div>
              </article>

              <?php
            }
          } else {
            // no posts found
          }
          /* Restore original Post Data */
          wp_reset_postdata();

          ?>
        </div>
      </div>

      <div id="knowledge-lists">
        <h2 class="section-title">Videnscenter</h2>
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <a href="<?php echo home_url(); ?>/knowledge/integration" class="knowledge-icon"><span class="spr spr-integ"></span> Integration</a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a href="<?php echo home_url(); ?>/knowledge/e-handel" class="knowledge-icon"><span class="spr spr-ehandel"></span> E-handel</a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a href="<?php echo home_url(); ?>/knowledge/international" class="knowledge-icon"><span class="spr spr-internl"></span> Internationalisering</a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a href="<?php echo home_url(); ?>/knowledge/ppc" class="knowledge-icon"><span class="spr spr-ppc"></span> Valg af udbyder</a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a href="<?php echo home_url(); ?>/knowledge/seo" class="knowledge-icon"><span class="spr spr-seo"></span> SEO</a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a href="<?php echo home_url(); ?>/knowledge/marketing" class="knowledge-icon"><span class="spr spr-marktng"></span> Marketing</a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a href="<?php echo home_url(); ?>/knowledge/backup" class="knowledge-icon"><span class="spr spr-backup"></span> Backup</a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a href="<?php echo home_url(); ?>/knowledge/okonomi" class="knowledge-icon"><span class="spr spr-roi"></span> Økonomi</a>
          </div>
        </div>
      </div>
      
    </div>
	</div>
</div>