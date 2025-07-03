<?php
add_filter( 'rwmb_meta_boxes', function ( $meta_boxes ) {

    /* Setting general information custom page product */ 
    $meta_boxes[] = [
        'id'             => 'product-option-setting-page',
        'title'          => 'Hình ảnh banner',
        'settings_pages' => ['option-setting-page-product'],
        'fields'         => [
            [
                'id'   => 'image-banner-product',
                'name' => 'Banner sản phẩm',
                'type' => 'single_image',
            ],
        ],
    ];

    return $meta_boxes;
});