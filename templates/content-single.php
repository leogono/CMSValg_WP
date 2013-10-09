<div class="container">
  <div class="row">
    <?php while (have_posts()) : the_post(); ?>
      <article <?php post_class('col-sm-8 col-md-9'); ?>>
        <div id="content">
          <header class="post-header">
            <h1 class="post-title"><?php the_title(); ?></h1>
            <?php get_template_part('templates/entry-meta'); ?>
          </header>

          <div class="entry-content">
            <?php the_content(); ?>
          </div>

          <footer>
            <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
          </footer>

          
          <?php if(get_field('referencer')): ?>
            <div class="referencer">

              <h2 class="box-title">Referencer</h2>
              <ul class="lists referemce-list">
             
              <?php while(has_sub_field('referencer')): ?>

              <li><a href="<?php the_sub_field('referencer_url'); ?>"><?php the_sub_field('referencer_title'); ?></a> - <?php the_sub_field('referencer_description'); ?></li>
             
              <?php endwhile; ?>
             
              </ul>
             </div>
          <?php endif; ?>
          

          <div id="comments-tag">
            <h2 class="box-title">Kommentarer</h2>
            <?php comments_template('/templates/comments.php'); ?>
          </div>
        </div>

        <!-- Related Posts -->
        <div id="related-posts">
          <?php get_template_part('templates/related-posts'); ?>
        </div>
        
      </article>
    <?php endwhile; ?>

    <aside class="col-sm-4 col-md-3">
      <div class="widget author-info">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 250 ); ?>
        <h3 class="author-name"><?php echo get_the_author(); ?></h3>
        <div class="author-bio">
          <?php the_author_meta('description'); ?>
        </div>
        <i class="icon-caret-left"></i>
      </div>
    </aside>
  </div>
</div>