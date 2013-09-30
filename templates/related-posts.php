<h2 class="float-title">Relaterede Umbraco artikler</h2>
<div class="content-lists">
	<div class="row">
		<?php
			$orig_post = $post;
			global $post;
			// $tags = wp_get_post_tags($post->ID);
			
			// if ($tags) {
			// $tag_ids = array();
			// foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;

			$categories = get_the_category($post->ID);
			if ($categories) {
			$category_ids = array();
			foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

			$args=array(
			// 'tag__in' => $tag_ids,
			'category__in' => $category_ids,
			'post__not_in' => array($post->ID),
			'posts_per_page'=>3, // Number of related posts to display.
			'ignore_sticky_posts'=>1,
			'orderby' => 'rand'
			);
			
			$rel_query = new WP_Query( $args );

			while( $rel_query->have_posts() ) {
			$rel_query->the_post();
			?>
			
			<article class="related-post col-sm-4 w-thumbnails">
	      <a href="<?php the_permalink(); ?>" class="post-thumbnail">
	        <?php 
	        if ( has_post_thumbnail() ) {
	          the_post_thumbnail('featured-thumb', array('class' => 'img-responsive'));
	        }
	        else {
	          echo '<img src="http://placehold.it/300x320&text=No+featured+image" class="img-responsive">';
	        }
	        ?>
	      </a>
	      <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	      <div class="comment-count-wrap">
	        <a href="#" class="comment-count"><i class="icon-comment"></i> </i> <?php comments_number( '0', '1', '%' ); ?></a>
	      </div>
	    </article>
			
			<? }
			}
			$post = $orig_post;
			wp_reset_query();
		?>
	</div>
</div>