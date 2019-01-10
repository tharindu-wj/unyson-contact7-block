<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$contact_forms = FW_Shortcode_Contact7_Block::getContactForms();
$options = array(
    'contact_forms' => array(
        'label' => __('Contact Forms', '{domain}'),
        'type' => 'select', // or 'short-select'
        'choices' => $contact_forms,
        'desc' => __('Select contact7 form.', '{domain}'),
    ),
    'css_class' => array(
        'type' => 'text',
        'label' => __('CSS Class', 'fw'),
        'desc' => __('Add class to block wrapper.', 'fw')
    ),
);
