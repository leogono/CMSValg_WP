<?php 
$taxonomy = 'knowledge';
$tax_terms = get_terms($taxonomy);

?>
<ul class="dropdown-menu" role="menu">
<?php
foreach ($tax_terms as $tax_term) {
  ?>
    <li><a href="<?php echo esc_attr(get_term_link($tax_term, $taxonomy)); ?>"><?php echo $tax_term->name; ?></a></li>
  <?php
  }
?>
</ul>