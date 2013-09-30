<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-4">
      <div id="sidebar-widget">
        <h4 class="widget-header">CMS-systemer</h4>
        <?php 
        $taxonomy = 'cms_system';
        $tax_terms = get_terms($taxonomy);

        ?>
        <ul id="cms-cat" class="list-group">
        <?php
        foreach ($tax_terms as $tax_term) {
          $cms_icon = get_field('cms_icon', 'cms_system_'.$tax_term->term_id);
          ?>
            <li class="list-group-item"><a href="<?php echo esc_attr(get_term_link($tax_term, $taxonomy)); ?>"><img src="<?php echo $cms_icon; ?>" alt=""> <?php echo $tax_term->name; ?></a></li>
          <?php
          }
        ?>
        </ul>

        <h4 class="widget-header">De kloge hoveder</h4>
        <?php
        $authorList = get_users('orderby=post_count&number=3&order=DESC');
        $authors = array();
        foreach($authorList as $currentUser)
        {
          if(!in_array( 'subscriber', $currentUser->roles ))
          {
            $authors[] = $currentUser;
          }
        }

        ?>
        <ul class="most-contributor">
          <?php
          foreach($authorList as $author) {
            $author_desc = get_field('author_designation', 'user_'.$author->ID);
            ?>
            <li class="clearfix">
              <a href="<?php echo get_author_posts_url($author->ID); ?>">
                <?php echo get_avatar( $author->user_email, '40' ); ?>
                <span class="author-name"><?php echo $author->display_name; ?></span> <br>
                <span class="author-desc"><?php echo $author_desc; ?></span>
              </a>
            </li>
            <?php
          }
          ?>
          <!-- <li class="clearfix">
            <a href="#">
              <img src="assets/img/sample-avatar.jpg" alt="Emil Rasmussen" class="author avatar pull-left">
              <span class="author-name">Emil Rasmussen</span> <br>
              <span class="author-desc">CMS Ekspert</span>
            </a>
          </li>
          <li class="clearfix">
            <a href="#">
              <img src="assets/img/sample-avatar.jpg" alt="Emil Rasmussen" class="author avatar pull-left">
              <span class="author-name">Emil Rasmussen</span> <br>
              <span class="author-desc">CMS Ekspert</span>
            </a>
          </li>
          <li class="clearfix">
            <a href="#">
              <img src="assets/img/sample-avatar.jpg" alt="Emil Rasmussen" class="author avatar pull-left">
              <span class="author-name">Emil Rasmussen</span> <br>
              <span class="author-desc">CMS Ekspert</span>
            </a>
          </li> -->
        </ul>
      </div>
    </div>

    <div class="col-md-9 col-sm-8">
    	<!-- Feature Content -->
      <div id="feat-content">
        <?php

        // The Query
        $the_query = new WP_Query( 'posts_per_page=1' );

        // The Loop
        if ( $the_query->have_posts() ) {
          while ( $the_query->have_posts() ) {
            $the_query->the_post();
            ?>
            <article class="post feature-post w-thumbnails">
              <a href="<?php the_permalink(); ?>" class="post-thumbnail">
                <?php 
                if ( has_post_thumbnail() ) {
                  the_post_thumbnail('featured-thumb', array('class' => 'img-responsive'));
                }
                else {
                  echo '<img src="http://placehold.it/850x388&text=No+featured+image" class="img-responsive">';
                }
                ?>
              </a>
              <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <div class="comment-count-wrap">
                <a href="<?php the_permalink(); ?>#comments-tag" class="comment-count"><i class="icon-comment"></i> </i> <?php comments_number( '0', '1', '%' ); ?></a>
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
      <div id="content-lists">
        <div class="row">
          <?php

          // The Query
          $query2 = new WP_Query( 'posts_per_page=3&offset=1' );

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
                    echo '<img src="http://placehold.it/300x320&text=No+featured+image" class="img-responsive">';
                  }
                  ?>
                </a>
                <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <div class="comment-count-wrap">
                  <a href="<?php the_permalink(); ?>#comments-tag" class="comment-count"><i class="icon-comment"></i> </i> <?php comments_number( '0', '1', '%' ); ?></a>
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
            <a href="#" class="knowledge-icon"><span class="spr spr-integ"></span> Integration</a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a href="#" class="knowledge-icon"><span class="spr spr-ehandel"></span> E-handel</a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a href="#" class="knowledge-icon"><span class="spr spr-internl"></span> Internationalisering</a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a href="#" class="knowledge-icon"><span class="spr spr-ppc"></span> Valg af udbyder</a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a href="#" class="knowledge-icon"><span class="spr spr-seo"></span> SEO</a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a href="#" class="knowledge-icon"><span class="spr spr-marktng"></span> Marketing</a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a href="#" class="knowledge-icon"><span class="spr spr-backup"></span> Backup</a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a href="#" class="knowledge-icon"><span class="spr spr-roi"></span> Økonomi</a>
          </div>
        </div>
      </div>
      
    </div>
	</div>
</div>