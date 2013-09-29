<article <?php post_class('post col-xs-6 col-sm-6 col-md-3 w-thumbnails'); ?>>
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
    <a href="#" class="comment-count"><i class="icon-comment"></i> 5</a>
  </div>
</article>
