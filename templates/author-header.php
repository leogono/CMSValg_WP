<div class="author-intro">
	
	<div class="row">
		<div class="col-sm-12">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 125 ); ?>
			<h1><?php echo roots_title(); ?></h1>
			<p><?php the_author_meta('description'); ?></p>
		</div>
	</div>
	
</div>