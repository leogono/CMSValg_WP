<?php
	$terms = get_the_terms( $post->ID, 'cms_system' );

	$countCMS = count($terms);

	foreach ( $terms as $term ) {
		echo '<li class="category"><i class="icon-tags"></i> <a href="' . get_term_link( $term->slug, "cms_system" ) . '">' . $term->name . '</a></li>';
	}
?>