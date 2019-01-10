<?php
$form_id = $atts['contact_forms'];
$form_title = get_the_title($form_id);
$css_class = $atts['css_class'];
$form_shortcode = '[contact-form-7 id='. $form_id .' title='.$form_title.']';
?>

<div class="base-contact7-block<?php if(!empty($css_class)){echo " ".$css_class;} ?>">
    <?php echo do_shortcode( $form_shortcode ); ?>
</div>

