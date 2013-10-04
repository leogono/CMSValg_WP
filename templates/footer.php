<?php $footer_text = get_field('footer_text', 'option'); ?>

<footer id="site-info">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="footer-info">
          <a href="#" class="novicel-logo spr">Novicell</a>
          <?php if($footer_text) {
            echo $footer_text;
          } else {
            echo '<p>CMSValg er tænkt, udviklet og drevet af Novicell. Vi bygger intelligente webløsninger og er 35 udviklere, 4 designere, 5 online marketing eksperter.</p>';
          } ?>
          
        </div>
      </div>
      <div class="col-sm-6">
        <div class="row">
          <div class="col-sm-4">
            <p class="footer-icon">
              <a href="<?php the_field('linkedin_url', 'option'); ?>"><span class="spr spr-linkedin"></span> LinkedIn Gruppe</a>
            </p>
          </div>
          <div class="col-sm-4">

            <p class="footer-icon"><a href="<?php the_field('about_us_url', 'option'); ?>"><span class="spr spr-about-cmsvalg"></span> Om CMSValg.dk</a></p>
          </div>
          <div class="col-sm-4">
            <p class="footer-icon"><a href="<?php the_field('contact_us_url', 'option'); ?>" class=""><span class="spr spr-advice"></span> Rådgivning</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>