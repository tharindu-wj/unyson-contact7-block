<?php

/*
 * @company name : Eight25Media
 * @authers : Tharindu Wickramasinghe
 * @date : 10/04/2018
 * @description : main class configurations for logo slider shortcode
 */

class FW_Shortcode_Contact7_Block extends FW_Shortcode
{
    /**
     * @var array
     */
    private static $post_type = 'wpcf7_contact_form';
    /**
     * @return array
     */
    public static function getContactForms()
    {
        $args = array(
            'post_type' => self::$post_type,
            'orderby' => 'title',
            'order' => 'ASC',
        );

        $the_query = new WP_Query($args);
        wp_reset_query();
        $forms = $the_query->posts;
        $option_arr = [];
        foreach ($forms as $form) {
            $option_arr[$form->ID] = $form->post_title;
        }
        wp_reset_postdata();
        return $option_arr;
    }

}