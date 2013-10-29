<article class="post feature-post w-thumbnails">
  <a href="<?php the_permalink(); ?>" class="post-thumbnail">
    <?php
    $attachment_id = get_field('promotion_image');
    $size = "featured-thumb";
     
    $image = wp_get_attachment_image_src( $attachment_id, $size );

    if ( $image ) {
      echo '<img src="' . $image[0] . '" alt="Promotion photo of ' . get_the_title() . '" class="img-responsive">';
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