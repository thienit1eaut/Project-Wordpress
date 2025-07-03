<?php
add_filter( 'rwmb_meta_boxes', function ( $meta_boxes ) {

    /* Setting general information custom page project */ 
    $meta_boxes[] = [
        'id'             => 'project-option-setting-page',
        'title'          => 'Hình ảnh banner',
        'settings_pages' => ['option-setting-page-project'],
        'fields'         => [
            [
                'id'   => 'image-banner-project',
                'name' => 'Banner dự án',
                'type' => 'single_image',
            ],
        ],
    ];

    return $meta_boxes;
});