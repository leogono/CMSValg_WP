<?php 
$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;

$cms_facts = get_field('cms_facts', $taxonomy . '_' . $term_id);
$cms_res = get_field('cms_resources', $taxonomy . '_' . $term_id);


?>
<div id="cms-ref">
  <div class="row">
    <div class="col-sm-6">

      <?php if(get_field('cms_facts', $taxonomy . '_' . $term_id)): ?>
        <div id="ref-box">
          <h1>Godt at vide om Umbraco</h1>
          <ul class="cms-facts">
         
          <?php while(has_sub_field('cms_facts', $taxonomy . '_' . $term_id)): ?>
            <li><i class="icon-circle-arrow-right"></i> <?php the_sub_field('facts'); ?></li>
         
          <?php endwhile; ?>
         
          </ul>
         </div>
      <?php endif; ?>
      
    </div>
    <div class="col-sm-6">

      <?php if(get_field('cms_resources', $taxonomy . '_' . $term_id)): ?>
        <div id="ref-box">
          <h1>Godt at vide om Umbraco</h1>
          <ul class="cms-facts">
         
          <?php while(has_sub_field('cms_resources', $taxonomy . '_' . $term_id)): ?>

            <li><i class="icon-circle-arrow-right"></i> <a href="<?php the_sub_field('resource_url'); ?>" target="_blank"><?php the_sub_field('resource_title'); ?></a></li>
         
          <?php endwhile; ?>
         
          </ul>
         </div>
      <?php endif; ?>

    </div>
  </div>
</div>