
<div class="meta post-meta">
  <div class="post-author">
    Skrevet af <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a>
  </div>
  <ul class="additional-meta clearfix">
    <li class="date"><i class="icon-calendar"></i> <?php echo get_the_date('j. F, Y'); ?></li>
			
		<?php get_template_part('templates/extra-meta'); ?>

    <li class="comments"><i class="icon-comments"></i> <a href="#comments-tag"><?php comments_number( '0', '1', '%' ); ?> kommentarer</a></li>
  </ul>
</div>
