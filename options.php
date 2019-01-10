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
    'form_class' => array(
        'type' => 'text',
        'label' => __('Form Class', 'fw'),
        'desc' => __('Add class to form element.', 'fw')
    ),
    'form_id' => array(
        'type' => 'text',
        'label' => __('Form ID', 'fw'),
        'desc' => __('Add id to form element.', 'fw')
    ),
    'css_class' => array(
        'type' => 'text',
        'label' => __('CSS Class', 'fw'),
        'desc' => __('Add class to block wrapper.', 'fw')
    ),
);
