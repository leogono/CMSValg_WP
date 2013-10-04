<?php
/**
 *  Install Add-ons
 *  
 *  The following code will include all 4 premium Add-Ons in your theme.
 *  Please do not attempt to include a file which does not exist. This will produce an error.
 *  
 *  The following code assumes you have a folder 'add-ons' inside your theme.
 *
 *  IMPORTANT
 *  Add-ons may be included in a premium theme/plugin as outlined in the terms and conditions.
 *  For more information, please read:
 *  - http://www.advancedcustomfields.com/terms-conditions/
 *  - http://www.advancedcustomfields.com/resources/getting-started/including-lite-mode-in-a-plugin-theme/
 */ 

include_once('advanced-custom-fields/acf.php');

// Add-ons 
include_once('add-ons/acf-repeater/acf-repeater.php');
// include_once('add-ons/acf-gallery/acf-gallery.php');
// include_once('add-ons/acf-flexible-content/acf-flexible-content.php');
include_once( 'add-ons/acf-options-page/acf-options-page.php' );


/**
 *  Register Field Groups
 *
 *  The register_field_group function accepts 1 array which holds the relevant data to register a field group
 *  You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 */

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_artikel',
		'title' => 'Artikel',
		'fields' => array (
			array (
				'key' => 'field_52491a67bdf84',
				'label' => 'Referencer',
				'name' => 'referencer',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_52491a8fbdf86',
						'label' => 'Referencer Title',
						'name' => 'referencer_title',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_52491a80bdf85',
						'label' => 'Referencer URL',
						'name' => 'referencer_url',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_52491a9bbdf87',
						'label' => 'Referencer Description',
						'name' => 'referencer_description',
						'type' => 'textarea',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => '',
						'formatting' => 'br',
					),
				),
				'row_min' => 0,
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add New Referencer',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_author-information',
		'title' => 'Author Information',
		'fields' => array (
			array (
				'key' => 'field_5248573f243c0',
				'label' => 'Author Designation',
				'name' => 'author_designation',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'ef_user',
					'operator' => '!=',
					'value' => 'subscriber',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_cms-additional-information',
		'title' => 'CMS Additional Information',
		'fields' => array (
			array (
				'key' => 'field_524f021c5b4b0',
				'label' => 'CMS Description',
				'name' => 'cms_description',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_5247ce3397f95',
				'label' => 'CMS Icon',
				'name' => 'cms_icon',
				'type' => 'image',
				'instructions' => 'Please upload 40x40px png file.',
				'save_format' => 'url',
				'preview_size' => 'full',
				'library' => 'uploadedTo',
			),
			array (
				'key' => 'field_524f02705b4b3',
				'label' => 'CMS Image',
				'name' => 'cms_image',
				'type' => 'image',
				'instructions' => 'Upload CMS Image. Only use either CMS Image or CMS Video',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'uploadedTo',
			),
			array (
				'key' => 'field_5247cdf597f94',
				'label' => 'CMS Video',
				'name' => 'cms_video',
				'type' => 'text',
				'instructions' => 'Add video ID code. Upload CMS Image. Only use either CMS Image or CMS Video',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_524932aa71a5c',
				'label' => 'CMS Facts',
				'name' => 'cms_facts',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_524932c071a5d',
						'label' => 'Facts',
						'name' => 'facts',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => 0,
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add New Fact',
			),
			array (
				'key' => 'field_5249331671a5e',
				'label' => 'CMS Resources',
				'name' => 'cms_resources',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_5249332871a5f',
						'label' => 'Resource URL',
						'name' => 'resource_url',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_5249333471a60',
						'label' => 'Resource Title',
						'name' => 'resource_title',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => 0,
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'ef_taxonomy',
					'operator' => '==',
					'value' => 'cms_system',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_knowledge-information',
		'title' => 'Knowledge Information',
		'fields' => array (
			array (
				'key' => 'field_524f08aa9d3a2',
				'label' => 'Option',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_524f072fd0c22',
				'label' => 'Knowledge Description',
				'name' => 'knowledge_description',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_5248288e6ba9f',
				'label' => 'Knowledge Icon',
				'name' => 'knowledge_icon',
				'type' => 'image',
				'instructions' => 'Please upload 40x40px image.',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_524828dd6baa1',
				'label' => 'Knowledge Video',
				'name' => 'knowledge_video',
				'type' => 'text',
				'instructions' => 'Please insert Wistia video ID code here. Only choose between Video or Image.',
				'default_value' => '',
				'placeholder' => 'Wistia video ID like fte0mnjeyq',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_524f067ad0c21',
				'label' => 'Knowledge Image',
				'name' => 'knowledge_image',
				'type' => 'image',
				'instructions' => 'Add image here. Only choose between Video or Image.',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'uploadedTo',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'ef_taxonomy',
					'operator' => '==',
					'value' => 'knowledge',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_site-option',
		'title' => 'Site Option',
		'fields' => array (
			array (
				'key' => 'field_524f08ecf8d99',
				'label' => 'Site URL',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_52498693bd01f',
				'label' => 'Instruction',
				'name' => '',
				'type' => 'message',
				'message' => 'Add URLs here to update certain link in the front end like the call to action button.',
			),
			array (
				'key' => 'field_52498662bd01c',
				'label' => 'LinkedIn URL',
				'name' => 'linkedin_url',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_52498670bd01d',
				'label' => 'About Us URL',
				'name' => 'about_us_url',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_52498685bd01e',
				'label' => 'Contact Us URL',
				'name' => 'contact_us_url',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_524f0902f8d9a',
				'label' => 'Footer',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_524f080825816',
				'label' => 'Footer Text',
				'name' => 'footer_text',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
