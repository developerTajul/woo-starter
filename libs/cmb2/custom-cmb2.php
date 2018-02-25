<?php 


require_once('init.php');


add_action('cmb2_admin_init', 'comet_custom_metabox');

function comet_custom_metabox(){

	$post = new_cmb2_box(array(
		'id'	=> 'comet-posts',
		'title'	=> 'Extra Post Info ',
		'object_types'	=> array('post')
	));


	// video
	$post->add_field(array(
		'name'	=> 'Youtube Video Link',
		'desc'	=> 'You can add any youtube video here',
		'id'	=> 'video-link',
		'type'	=> 'oembed'
	));

	// audio
	$post->add_field(array(
		'name'	=> 'Audio Link',
		'desc'	=> 'You can add any audio here',
		'id'	=> 'audio-link',
		'type'	=> 'oembed'
	));

	// quote
	$post->add_field( array(
		'name'	=> 'Quote Text',
		'desc'	=> 'Add you quote here',
		'id'	=> 'quote-text',
		'type'	=> 'textarea'
	));

	// gallery
	$post->add_field( array(
		'name'	=> 'Gallery Images',
		'desc'	=> 'Add gallery images here',
		'id'	=> 'gallery_images',
		'type'	=> 'file_list'
	));






}