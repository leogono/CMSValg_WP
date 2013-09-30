<?php
$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;

$cms_icon = get_field('cms_icon', $taxonomy . '_' . $term_id);
$cms_video_code = get_field('cms_video', $taxonomy . '_' . $term_id);
$cms_video_thumb = get_field('cms_video_thumbnail', $taxonomy . '_' . $term_id);

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
        <p><?php echo $term->description; ?></p>
      </div>
    </div>
    <div class="col-sm-6 col-md-5">
      <div class="cms-video">
        <a data-toggle="modal" href="#videoModal"><img src="<?php echo $cms_video_thumb; ?>" alt="" class="img-responsive cms-video-thumb"></a>
      </div>
      <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <?php echo $cms_video_code; ?>
            </div>
          </div>
        </div>
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