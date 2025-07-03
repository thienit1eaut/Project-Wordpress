<?php
add_filter( 'mb_settings_pages', function ( $settings_pages ) {

    $settings_pages[] = [
        'id'          => 'options-settings-pages',
        'option_name' => 'options_settings_pages',
        'menu_title'  => 'Cấu hình',
        'page_title'  => 'Cấu hình thông tin',
        'icon_url'    => 'dashicons-welcome-widgets-menus',
        'position'    => 60,
    ];

    $settings_pages[] = [
        'id'          => 'option-setting-page-home',
        'option_name' => 'option_setting_page_home',
        'menu_title'  => 'Trang chủ',
        'parent'      => 'options-settings-pages',
        'page_title'  => 'Trang chủ',
    ];

    $settings_pages[] = [
        'id'          => 'option-setting-page-project',
        'option_name' => 'option_setting_page_project',
        'menu_title'  => 'Dự án',
        'parent'      => 'options-settings-pages',
        'page_title'  => 'Cấu hình dự án',
    ];

    $settings_pages[] = [
        'id'          => 'option-setting-page-product',
        'option_name' => 'option_setting_page_product',
        'menu_title'  => 'Sản phẩm',
        'parent'      => 'options-settings-pages',
        'page_title'  => 'Cấu hình sản phẩm',
    ];

    $settings_pages[] = [
        'id'          => 'options-settings-slides',
        'option_name' => 'options_settings_slides',
        'menu_title'  => 'Slider',
        'parent'      => 'options-settings-pages',
        'page_title'  => 'Cấu hình slide',
    ];

    return $settings_pages;
} );

/* Setting general information custom page */ 
add_filter( 'rwmb_meta_boxes', function ( $meta_boxes ) {

    $meta_boxes[] = [
        'id'             => 'general-option-setting-page-2',
        'title'          => 'Thông tin chung',
        'settings_pages' => ['options-settings-pages'],
        'fields'         => [
            [
                'id'     => 'logo-header',
                'name'   => 'Logo',
                'type'   => 'single_image',
            ],
            [
                'name' => 'Tên công ty',
                'id'   => 'name-company',
                'type' => 'text',
            ],
            [
                'name' => 'Mô tả công ty',
                'id'   => 'desc-company',
                'type' => 'textarea',
            ],
            [
                'name' => 'Văn phòng',
                'id'   => 'vp-address-company',
                'type' => 'text',
            ],
            [
                'name' => 'Nhà máy',
                'id'   => 'nm-address-company',
                'type' => 'text',
            ],
            [
                'name' => 'Hotline',
                'id'   => 'hotline-company',
                'type' => 'text',
            ],
            [
                'name' => 'Hotline 2',
                'id'   => 'tel-company',
                'type' => 'text',
            ],
            [
                'name' => 'Email',
                'id'   => 'email-company',
                'type' => 'text',
            ],
            [
                'name' => 'Website',
                'id'   => 'web-company',
                'type' => 'text',
            ],
            [
                'name' => 'Google map',
                'id'   => 'map-company',
                'type' => 'textarea',
            ],
            [
                'name' => 'Facebook Page',
                'id'   => 'facebook-company',
                'type' => 'textarea',
            ],
        ],
    ];

    /* Setting general information custom page home */ 
    $meta_boxes[] = [
        'id'             => 'home-option-setting-title',
        'title'          => 'Tiêu đề',
        'settings_pages' => ['option-setting-page-home'],
        'fields'         => [
            [
                'name' => 'Tiêu đề mục dự án',
                'id'   => 'title-section-project-home',
                'type' => 'text',
            ],
            [
                'name' => 'Tiêu đề mục sản phẩm',
                'id'   => 'title-section-product-home',
                'type' => 'text',
            ],
            [
                'name' => 'Tiêu đề mục hợp tác',
                'id'   => 'title-section-partner-home',
                'type' => 'text',
            ],
        ],
    ];

    $meta_boxes[] = [
        'id'             => 'home-option-setting-suppost',
        'title'          => 'Thông tin hỗ trợ',
        'settings_pages' => ['option-setting-page-home'],
        'fields'         => [
            [
                'id'     => 'image-hotline-suppost',
                'name'   => 'Hình ảnh',
                'type'   => 'single_image',
            ],
            [
                'name'    => 'Hotline',
                'id'      => 'hotline-suppost-cutomer',
                'type'    => 'wysiwyg',
                'raw'     => false,
                'options' => [
                    'media_buttons' => false,
                    'textarea_rows' => 4,
                    'teeny'         => true,
                ],
            ],
        ],
    ];

    /* Setting general information custom page partner*/
    $meta_boxes[] = [
        'id'             => 'partner-option-setting',
        'title'          => 'Đối tác',
        'settings_pages' => ['option-setting-page-home'],
        'fields'         => [
            [
                'id'         => 'partner-home',
                'type'       => 'group',
                'clone'      => true,
                'sort_clone' => true,
                'fields'     => [
                    [
                        'id'   => 'image-partner',
                        'name' => 'Hình ảnh',
                        'type' => 'single_image',
                    ],
                    [
                        'name' => 'Tiêu đề',
                        'id'   => 'title-partner',
                        'type' => 'text',
                    ],
                    [
                        'name' => 'Link',
                        'id'   => 'link-partner',
                        'type' => 'text',
                    ],
                ]
            ]
        ],
    ];

    /* Setting information slide custom page */
    $meta_boxes[] = [
        'id'             => 'group-slide-banner-main',
        'title'          => 'Slide banner',
        'settings_pages' => ['options-settings-slides'],
        'fields'         => [
            [
                'id'         => 'slide-banner-main',
                'type'       => 'group',
                'clone'      => true,
                'sort_clone' => true,
                'fields'     => [
                    [
                        'id'   => 'image-slide',
                        'name' => 'Hình ảnh',
                        'type' => 'single_image',
                    ],
                    [
                        'name' => 'Tiêu đề',
                        'id'   => 'title-slide',
                        'type' => 'text',
                    ],
                    [
                        'name' => 'Link',
                        'id'   => 'link-slide',
                        'type' => 'text',
                    ],
                ]
            ]
        ],
    ];

    return $meta_boxes;
} );

include_once('project-setting-page.php');
include_once('product-setting-page.php');