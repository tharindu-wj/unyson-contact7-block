<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => __( 'Contact7 Block', 'fw' ),
	'description' => __( 'Add a contact7 form from this block.', 'fw' ),
	'tab'         => __( 'Version2 Elements', 'fw' ),
	'title_template' => '{{-title}}{{ if (o.text_box_title) { }} : <strong>{{= o.text_box_title}}</strong>{{ } }}',
    'popup_size' 	=> 'large'
);
