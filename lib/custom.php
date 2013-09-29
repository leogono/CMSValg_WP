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
