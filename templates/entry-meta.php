
<div class="meta post-meta">
  <div class="post-author">
    Skrevet af <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a>
  </div>
  <ul class="additional-meta clearfix">
    <li class="date"><i class="icon-calendar"></i> <?php echo get_the_date('j. F, Y'); ?></li>
<?php
	$terms = get_the_terms( $post->ID, 'cms_system' );
	if ( $terms && ! is_wp_error( $terms ) ) : 

	$cms_names = array();

	foreach ( $terms as $term ) {
		$cms_names[] = $term->name; break;
	}
						
	$cms_name = join( ", ", $cms_names );
?>
    <li class="category"><i class="icon-tags"></i> <?php echo $cms_name; ?></li>
<?php endif; ?>

    <li class="comments"><i class="icon-comments"></i> <a href="#comments-tag"><?php comments_number( '0', '1', '%' ); ?> kommentarer</a></li>
  </ul>
</div>
