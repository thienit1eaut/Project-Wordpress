<?php
add_filter( 'rwmb_meta_boxes', function ( $meta_boxes ) {

    $meta_boxes[] = [
        'id'             => 'post-option-setting-page',
        'title'          => 'Cấu hình hiển thị',
        'post_types' => ['post'],
        'fields'         => [
            [
                'name' => 'Sắp xếp',
                'id'   => 'ord-post',
                'type' => 'number',
                'min'     => 0,
                'max'     => 1000000,
                'columns' => 4,
            ],
            [
                'name' => 'Kích hoạt',
                'id'   => 'act-post',
                'type' => 'checkbox',
                'std'  => 1,
            ],
            [
                'name' => 'Bài viết trang chủ',
                'id'   => 'home-post',
                'type' => 'checkbox',
                'std'  => 0,
            ],
            [
                'name' => 'Bài viết nổi bật',
                'id'   => 'hot-post',
                'type' => 'checkbox',
                'std'  => 0,
            ],
        ],
    ];

    $meta_boxes[] = [
        'id'             => 'post-new-sidebar-option-setting-page',
        'title'          => 'Cấu hình thông tin',
        'post_types' => ['post'],
        'fields'         => [
            [
                'name'       => 'Danh mục bài viết',
                'id'         => 'cates-post-new-sidebar',
                'type'       => 'taxonomy_advanced',
                'taxonomy'   => 'category',
                'field_type' => 'checkbox_list',
            ],
        ],
    ];

    $meta_boxes[] = [
        'id'         => 'post-category-display-option',
        'title'      => 'Cấu hình hiển thị',
        'taxonomies' => ['category'],
        'fields'     => [
            [
                'name' => 'Hiện thị trang chủ',
                'id'   => 'home-post-category',
                'type' => 'checkbox',
                'std'  => 0,
            ],
        ],
    ];

    return $meta_boxes;
} );