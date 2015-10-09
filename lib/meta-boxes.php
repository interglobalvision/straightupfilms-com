<?php
add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );

function cmb_sample_metaboxes( array $meta_boxes ) {

	$prefix = '_cmb_';

	$meta_boxes[] = array(
		'id'         => 'post_metabox',
		'title'      => 'Post Settings',
		'pages'      => array( 'post', ),
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true,
		'fields'     => array(
			array(
				'name' => 'Source Link',
				'desc' => 'source article url [with http:]',
				'id'   => $prefix . 'source',
				'type' => 'text',
			),
			array(
				'name' => 'Source Text',
				'desc' => 'text for source link',
				'id'   => $prefix . 'source_text',
				'type' => 'text',
			),
			array(
				'name' => 'Author',
				'desc' => 'text for author field',
				'id'   => $prefix . 'author',
				'type' => 'text',
			)
		),
	);

	$meta_boxes[] = array(
		'id'         => 'project_metabox',
		'title'      => 'Project Settings',
		'pages'      => array( 'film', ),
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true,
		'fields'     => array(
			array(
				'name' => 'Year',
				'desc' => '...',
				'id'   => $prefix . 'year',
				'type' => 'text',
			),
			array(
				'name' => 'Details',
				'desc' => '...',
				'id'   => $prefix . 'details',
				'type' => 'wysiwyg',
			),
			array(
				'name' => 'Subtitle / Strapline',
				'desc' => '...',
				'id'   => $prefix . 'subtitle',
				'type' => 'text',
			),
			array(
				'name' => 'Trailer',
				'desc' => 'vimeo id',
				'id'   => $prefix . 'trailer',
				'type' => 'text',
			),
			array(
				'name' => 'Large Image',
				'desc' => 'to display on film page if no trailer is shown',
				'id'   => $prefix . 'large_image',
				'type' => 'file',
			),
			array(
				'name' => 'Carousel Image',
				'desc' => '...',
				'id'   => $prefix . 'carousel_image',
				'type' => 'file',
			),
		),
	);

	$meta_boxes[] = array(
		'id'         => 'people_metabox',
		'title'      => 'People Settings',
		'pages'      => array( 'team', ),
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true,
		'fields'     => array(
			array(
				'name' => 'Role',
				'desc' => '...',
				'id'   => $prefix . 'role',
				'type' => 'text',
			),
			array(
				'name' => 'Large Image',
				'desc' => 'to display on the single person page',
				'id'   => $prefix . 'large_image',
				'type' => 'file',
			),
		),
	);

	$meta_boxes[] = array(
		'id'         => 'about_metabox',
		'title'      => 'About',
		'pages'      => array( 'page', ),
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true,
		'fields'     => array(
			array(
				'name' => 'Long About',
				'desc' => '...',
				'id'   => $prefix . 'long_about',
				'type' => 'wysiwyg',
			)
		),
	);

	$meta_boxes[] = array(
		'id'         => 'postype_metabox',
		'title'      => 'About Settings',
		'pages'      => array( 'page' ),
		'show_on' => array( 'key' => 'page-template', 'value' => 'page-about.php' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true,
		'fields'     => array(
			array(
				'name' => 'Credits',
				'desc' => 'for footer',
				'id'   => $prefix . 'credits',
				'type' => 'wysiwyg',
			),
			array(
				'name' => 'Terms',
				'desc' => 'for footer',
				'id'   => $prefix . 'terms',
				'type' => 'wysiwyg',
			)
		),
	);

	$meta_boxes[] = array(
		'id'         => 'vision_metabox',
		'title'      => 'Vision Settings',
		'pages'      => array( 'page' ),
		'show_on' => array( 'key' => 'page-template', 'value' => 'page-vision.php' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true,
		'fields'     => array(
			array(
				'name' => 'Background',
				'desc' => 'optional background image',
				'id'   => $prefix . 'bg',
				'type' => 'file'
			)
		),
	);

	return $meta_boxes;
}
?>