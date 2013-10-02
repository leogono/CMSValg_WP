<?php
$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;

$know_icon = get_field('knowledge_icon', $taxonomy . '_' . $term_id);
$know_video_code = get_field('knowledge_video', $taxonomy . '_' . $term_id);
$know_video_thumb = get_field('knowledge_video_thumbnail', $taxonomy . '_' . $term_id);

?>
<!-- CMS Intro box -->
<div id="cms-intro-box">
  <div class="row">
    <div class="col-sm-6 col-md-7">
      <header class="cms-header">
        <img src="<?php echo $know_icon; ?>" alt="" class="cms-icon pull-left">
        <h1><?php echo $term->name; ?></h1>
      </header>
      <div class="cms-desc">
        <p><?php echo $term->description; ?></p>
      </div>
    </div>
    <div class="col-sm-6 col-md-5">
      <div class="cms-video">
        <iframe src="http://fast.wistia.net/embed/iframe/<?php echo $know_video_code; ?>?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="714" height="402"></iframe>
        
      </div>
    </div>

  </div>
</div>

<!-- CMS Related -->
<div id="cms-rel-top" class="float-title">
  <div class="row">
    <div class="col-sm-7 col-md-9">
      <h3>Seneste artikler og indlæg om integration</h3>
    </div>
    <div class="col-sm-5 col-md-3">
      <a href="<?php the_field('contact_us_url', 'option'); ?>" class="btn btn-primary">Tal med en CMS rådgiver</a>
    </div>
  </div>
</div>