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

//Activate advance Custom fields
// define( 'ACF_LITE', true );
include_once('acf/acf-activate.php');