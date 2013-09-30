<h4 class="widget-header">De kloge hoveder</h4>
<?php
$authorList = get_users('orderby=post_count&number=3&order=DESC');
$authors = array();
foreach($authorList as $currentUser)
{
  if(!in_array( 'subscriber', $currentUser->roles ))
  {
    $authors[] = $currentUser;
  }
}

?>
<ul class="most-contributor">
  <?php
  foreach($authorList as $author) {
    $author_desc = get_field('author_designation', 'user_'.$author->ID);
    ?>
    <li class="clearfix">
      <a href="<?php echo get_author_posts_url($author->ID); ?>">
        <?php echo get_avatar( $author->user_email, '40' ); ?>
        <span class="author-name"><?php echo $author->display_name; ?></span> <br>
        <span class="author-desc"><?php echo $author_desc; ?></span>
      </a>
    </li>
    <?php
  }
  ?>
</ul>