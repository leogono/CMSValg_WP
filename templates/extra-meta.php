<ul class="additional-meta footer clearfix">
	<?php
		$terms = get_the_terms( $post->ID, 'cms_system' );

		$countCMS = count($terms);

		foreach ( $terms as $term ) {
			echo '<li class="category"><a href="' . get_term_link( $term->slug, "cms_system" ) . '"><i class="icon-tags"></i> ' . $term->name . '</a></li>';
		}

	?>
</ul>