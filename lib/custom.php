<?php
/**
 * Custom functions
 */
//custom taxonomies
register_taxonomy('cms_system',array (
  0 => 'post',
),array( 'hierarchical' => true, 'label' => 'CMS Systems','show_ui' => true,'query_var' => true,'rewrite' => array('slug' => 'cms'),'singular_label' => 'CMS') );

register_taxonomy('knowledge',array (
  0 => 'post',
),array( 'hierarchical' => true, 'label' => 'Knowledge','show_ui' => true,'query_var' => true,'rewrite' => array('slug' => 'knowledge'),'singular_label' => 'Knowledge') );

// remove category & tags
function wpse60590_remove_metaboxes() {
    remove_meta_box( 'categorydiv' , 'post' , 'normal' ); 
    remove_meta_box( 'tagsdiv-post_tag' , 'post' , 'normal' ); 

}
add_action( 'admin_menu' , 'wpse60590_remove_metaboxes' );

// Breadcrumbs
function the_breadcrumb() {
		echo '<ul id="crumbs">';
	if (!is_home()) {
		echo '<li><a href="';
		echo get_option('home');
		echo '">';
		echo 'Home';
		echo "</a></li>";
		if (is_category() || is_single()) {
			echo ' <i class="icon-caret-right pull-left"></i><li>';
			the_category(' </li><li> ');
			if (is_single()) {
				echo '</li> <i class="icon-caret-right pull-left"></i><li>';
				the_title();
				echo '</li>';
			}
		} elseif (is_page()) {
			echo '<li>';
			echo the_title();
			echo '</li>';
		}
	}
	elseif (is_tag()) {single_tag_title();}
	elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
	elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
	elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
	elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
	elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
	elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
	echo '</ul>';
}