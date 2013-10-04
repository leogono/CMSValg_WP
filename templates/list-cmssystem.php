<h4 class="widget-header hidden-xs">CMS-systemer</h4>
<h4 class="widget-header visible-xs dropdown-toggle" data-toggle="dropdown">CMS-systemer <i class="icon-caret-down"></i></h4>
<?php 
$taxonomy = 'cms_system';
$tax_terms = get_terms($taxonomy);

?>
<ul id="cms-cat" class="list-group dropdown-menu">
<?php
foreach ($tax_terms as $tax_term) {
  $cms_icon = get_field('cms_icon', 'cms_system_'.$tax_term->term_id);
  ?>
    <li class="list-group-item">
    	<a href="<?php echo esc_attr(get_term_link($tax_term, $taxonomy)); ?>">
    		<?php if($cms_icon) {
    			echo '<img src="' . $cms_icon . '" alt="">';
    		} ?>
    		<?php echo $tax_term->name; ?>
    	</a>
    </li>
  <?php
  }
?>
</ul>