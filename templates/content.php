<?php /*
<article <?php post_class(''); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
*/ ?>
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