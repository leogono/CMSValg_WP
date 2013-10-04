<?php
$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;

$cms_icon = get_field('cms_icon', $taxonomy . '_' . $term_id);
$cms_video_code = get_field('cms_video', $taxonomy . '_' . $term_id);
$cms_desc = get_field('cms_description', $taxonomy . '_' . $term_id);
$cms_img = get_field('cms_image', $taxonomy . '_' . $term_id);



?>
<!-- CMS Intro box -->
<div id="cms-intro-box">
  <div class="row">
    <div class="col-sm-6 col-md-7">
      <header class="cms-header">
        <img src="<?php echo $cms_icon; ?>" alt="" class="cms-icon pull-left">
        <h1><?php echo $term->name; ?></h1>
      </header>
      <div class="cms-desc">
        <p><?php echo $cms_desc; ?></p>
      </div>
    </div>
    <div class="col-sm-6 col-md-5">
      <div class="cms-video">
        <?php if($cms_video_code) {
          ?>
          <iframe src="http://fast.wistia.net/embed/iframe/<?php echo $cms_video_code; ?>?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="714" height="402"></iframe>
          <?php
        }
        else if($cms_img) {
          ?>
          <img src="<?php echo $cms_img; ?>" alt="" class="img-responsive tax-image">
          <?php
        }
        ?>
        
      </div>
    </div>

  </div>
</div>

<!-- CMS Related -->
<div id="cms-rel-top" class="float-title">
  <div class="row">
    <div class="col-sm-12">
      <h3>Seneste Umbraco-relaterede artikler</h3>
    </div>
  </div>
</div>