<?php
// Sets the default image.
if (!function_exists('get_default_image')) {
    function get_default_image() {
        $imgdf = '<img src="'.get_template_directory_uri().'/assets/admin/images/no-image.svg" class="img-fluid" alt="" title="">';
        return $imgdf;
    }
}

if (!function_exists('the_option_image_html')) {
    function the_option_image_html($key, $size, $option_name) {
        $image_options = rwmb_meta( $key, ['object_type' => 'setting'], $option_name );

        if ( $image_options ) {
            echo wp_get_attachment_image( $image_options['ID'], $size );   
        } else {
            echo get_default_image();
        }
    }
}

if (!function_exists('the_option_text_html')) {
    function the_option_text_html($key, $option_name) {
        $text_options = rwmb_meta( $key, ['object_type' => 'setting'], $option_name );
        if ( $text_options ) {
            echo $text_options;
        }
    }
}

if (!function_exists('the_image_post')) {
    function the_image_post($size) {
        if ( has_post_thumbnail() ) {
            the_post_thumbnail($size);
        } else {
            echo get_default_image();
        }
    }
}

