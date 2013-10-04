<?php 
$taxonomy = 'knowledge';
$tax_terms = get_terms($taxonomy);

?>
<ul class="dropdown-menu">
<?php
foreach ($tax_terms as $tax_term) {
  ?>
    <li class="knowledge-lst"><a href="<?php echo esc_attr(get_term_link($tax_term, $taxonomy)); ?>"><?php echo $tax_term->name; ?></a></li>
  <?php
  }
?>
</ul>