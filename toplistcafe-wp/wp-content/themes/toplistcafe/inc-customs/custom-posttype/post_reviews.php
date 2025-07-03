<?php
add_action( 'init', 'post_reviews_register_post_type' );
function post_reviews_register_post_type() {
    $labels = [
        'name'                     => esc_html__( 'Bài viết review', 'your-textdomain-post_reviews' ),
        'singular_name'            => esc_html__( 'Bài viết review', 'your-textdomain-post_reviews' ),
        'add_new'                  => esc_html__( 'Thêm mới', 'your-textdomain-post_reviews' ),
        'add_new_item'             => esc_html__( 'Thêm mới bài viết review', 'your-textdomain-post_reviews' ),
        'edit_item'                => esc_html__( 'Chỉnh sửa bài viết review', 'your-textdomain-post_reviews' ),
        'new_item'                 => esc_html__( 'Bài viết review mới', 'your-textdomain-post_reviews' ),
        'view_item'                => esc_html__( 'Xem bài viết review', 'your-textdomain-post_reviews' ),
        'view_items'               => esc_html__( 'Xem bài viết review', 'your-textdomain-post_reviews' ),
        'search_items'             => esc_html__( 'Tìm kiếm bài viết review', 'your-textdomain-post_reviews' ),
        'not_found'                => esc_html__( 'No Bài viết review found.', 'your-textdomain-post_reviews' ),
        'not_found_in_trash'       => esc_html__( 'No Bài viết review found in Trash.', 'your-textdomain-post_reviews' ),
        'parent_item_colon'        => esc_html__( 'Parent Bài viết review:', 'your-textdomain-post_reviews' ),
        'all_items'                => esc_html__( 'Tất cả bài viết review', 'your-textdomain-post_reviews' ),
        'archives'                 => esc_html__( 'Bài viết review Archives', 'your-textdomain-post_reviews' ),
        'attributes'               => esc_html__( 'Bài viết review Attributes', 'your-textdomain-post_reviews' ),
        'insert_into_item'         => esc_html__( 'Insert into Bài viết review', 'your-textdomain-post_reviews' ),
        'uploaded_to_this_item'    => esc_html__( 'Uploaded to this Bài viết review', 'your-textdomain-post_reviews' ),
        'featured_image'           => esc_html__( 'Featured image', 'your-textdomain-post_reviews' ),
        'set_featured_image'       => esc_html__( 'Set featured image', 'your-textdomain-post_reviews' ),
        'remove_featured_image'    => esc_html__( 'Remove featured image', 'your-textdomain-post_reviews' ),
        'use_featured_image'       => esc_html__( 'Use as featured image', 'your-textdomain-post_reviews' ),
        'menu_name'                => esc_html__( 'Bài viết review', 'your-textdomain-post_reviews' ),
        'filter_items_list'        => esc_html__( 'Filter Bài viết review list', 'your-textdomain-post_reviews' ),
        'filter_by_date'           => esc_html__( '', 'your-textdomain-post_reviews' ),
        'items_list_navigation'    => esc_html__( 'Bài viết review list navigation', 'your-textdomain-post_reviews' ),
        'items_list'               => esc_html__( 'Bài viết review list', 'your-textdomain-post_reviews' ),
        'item_published'           => esc_html__( 'Bài viết review published.', 'your-textdomain-post_reviews' ),
        'item_published_privately' => esc_html__( 'Bài viết review published privately.', 'your-textdomain-post_reviews' ),
        'item_reverted_to_draft'   => esc_html__( 'Bài viết review reverted to draft.', 'your-textdomain-post_reviews' ),
        'item_scheduled'           => esc_html__( 'Bài viết review scheduled.', 'your-textdomain-post_reviews' ),
        'item_updated'             => esc_html__( 'Bài viết review updated.', 'your-textdomain-post_reviews' ),
    ];
    $args = [
        'label'               => esc_html__( 'Bài viết review', 'your-textdomain-post_reviews' ),
        'labels'              => $labels,
        'description'         => '',
        'public'              => true,
        'hierarchical'        => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'show_in_rest'        => true,
        'query_var'           => true,
        'can_export'          => true,
        'delete_with_user'    => true,
        'has_archive'         => true,
        'rest_base'           => '',
        'show_in_menu'        => true,
        'menu_position'       => '',
        'menu_icon'           => 'dashicons-book',
        'capability_type'     => 'post',
        'supports'            => ['title', 'editor', 'excerpt', 'thumbnail', 'comments'],
        'taxonomies'          => ['post_reviews-category'],
        'rewrite'             => [
            'slug'       => 'bai-viet-review',
            'with_front' => false,
        ],
    ];

    register_post_type( 'post_reviews', $args );
}

add_action( 'init', 'post_reviews_category_register_taxonomy' );
function post_reviews_category_register_taxonomy() {
    $labels = [
        'name'                       => esc_html__( 'Danh mục bài viết review', 'your-textdomain-post_reviews-category' ),
        'singular_name'              => esc_html__( 'Danh mục bài viết review', 'your-textdomain-post_reviews-category' ),
        'menu_name'                  => esc_html__( 'Danh mục bài viết review', 'your-textdomain-post_reviews-category' ),
        'search_items'               => esc_html__( 'Tìm kiếm danh mục bài viết review', 'your-textdomain-post_reviews-category' ),
        'popular_items'              => esc_html__( 'Popular Danh mục bài viết review', 'your-textdomain-post_reviews-category' ),
        'all_items'                  => esc_html__( 'Tất cả danh mục bài viết review', 'your-textdomain-post_reviews-category' ),
        'parent_item'                => esc_html__( 'Danh mục cha', 'your-textdomain-post_reviews-category' ),
        'parent_item_colon'          => esc_html__( 'Danh mục bài viết review:', 'your-textdomain-post_reviews-category' ),
        'edit_item'                  => esc_html__( 'Chỉnh sửa danh mục bài viết review', 'your-textdomain-post_reviews-category' ),
        'view_item'                  => esc_html__( 'Hiển thị danh mục bài viết review', 'your-textdomain-post_reviews-category' ),
        'update_item'                => esc_html__( 'Cập nhật danh mục bài viết review', 'your-textdomain-post_reviews-category' ),
        'add_new_item'               => esc_html__( 'Thêm mới danh mục bài viết review', 'your-textdomain-post_reviews-category' ),
        'new_item_name'              => esc_html__( 'New Danh mục bài viết review Name', 'your-textdomain-post_reviews-category' ),
        'separate_items_with_commas' => esc_html__( 'Separate danh mục bài viết review with commas', 'your-textdomain-post_reviews-category' ),
        'add_or_remove_items'        => esc_html__( 'Add or remove danh mục bài viết review', 'your-textdomain-post_reviews-category' ),
        'choose_from_most_used'      => esc_html__( 'Choose most used danh mục bài viết review', 'your-textdomain-post_reviews-category' ),
        'not_found'                  => esc_html__( 'No danh mục bài viết review found.', 'your-textdomain-post_reviews-category' ),
        'no_terms'                   => esc_html__( 'No danh mục bài viết review', 'your-textdomain-post_reviews-category' ),
        'filter_by_item'             => esc_html__( 'Filter by danh mục bài viết review', 'your-textdomain-post_reviews-category' ),
        'items_list_navigation'      => esc_html__( 'Danh mục bài viết review list pagination', 'your-textdomain-post_reviews-category' ),
        'items_list'                 => esc_html__( 'Danh mục bài viết review list', 'your-textdomain-post_reviews-category' ),
        'most_used'                  => esc_html__( 'Phổ biến', 'your-textdomain-post_reviews-category' ),
        'back_to_items'              => esc_html__( '&larr; Go to Danh mục bài viết review', 'your-textdomain-post_reviews-category' ),
    ];
    $args = [
        'label'              => esc_html__( 'Danh mục bài viết review', 'your-textdomain-post_reviews-category' ),
        'labels'             => $labels,
        'description'        => '',
        'public'             => true,
        'publicly_queryable' => true,
        'hierarchical'       => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_rest'       => true,
        'show_tagcloud'      => true,
        'show_in_quick_edit' => true,
        'show_admin_column'  => true,
        'query_var'          => true,
        'sort'               => false,
        'meta_box_cb'        => 'post_categories_meta_box',
        'rest_base'          => '',
        'rewrite'            => [
            'slug'         => 'danh-muc-bai-viet-review',
            'with_front'   => false,
            'hierarchical' => false,
        ],
    ];
    register_taxonomy( 'post_reviews-category', ['post_reviews'], $args );
}

/* Setting general information custom page product */
add_filter( 'rwmb_meta_boxes', function ( $meta_boxes ) {
    $meta_boxes[] = [
        'id'             => 'post-reviews-info-option-setting-page',
        'title'          => 'Cấu hình thông tin',
        'post_types' => ['post_reviews'],
        'fields'         => [
            [
                'name' => 'Thời gian',
                'id'   => 'date-post-review',
                'type' => 'text',
                'std'  => '',
            ],
            [
                'name' => 'Địa điểm',
                'id'   => 'address-post-review',
                'type' => 'text',
                'std'  => '',
            ],
            [
                'name' => 'Không gian',
                'id'   => 'space-post-review',
                'type' => 'text',
                'std'  => '',
            ],
            [
                'name' => 'Giá tiền',
                'id'   => 'price-post-review',
                'type' => 'text',
                'std'  => '',
            ],
            [
                'name' => 'Wifi Password',
                'id'   => 'wifi-pass-post-review',
                'type' => 'text',
                'std'  => '',
            ],
        ],
    ];

    $meta_boxes[] = [
        'id'             => 'post-reviews-sidebar-option-setting-page',
        'title'          => 'Cấu hình thông tin',
        'post_types' => ['post_reviews'],
        'fields'         => [
            [
                'name'       => 'Danh mục bài viết',
                'id'         => 'cates-post-sidebar',
                'type'       => 'taxonomy_advanced',
                'taxonomy'   => 'category',
                'field_type' => 'checkbox_list',
            ],
        ],
    ];

    $meta_boxes[] = [
        'id'             => 'post-reviews-display-option-setting-page',
        'title'          => 'Cấu hình hiển thị',
        'post_types' => ['post_reviews'],
        'fields'         => [
            [
                'name' => 'Slide trang chủ',
                'id'   => 'home-post-review',
                'type' => 'checkbox',
                'std'  => 1,
            ],
            [
                'name' => 'Kích hoạt',
                'id'   => 'act-post-review',
                'type' => 'checkbox',
                'std'  => 1,
            ],
            [
                'name' => 'Sắp xếp',
                'id'   => 'ord-post-review',
                'type' => 'number',
                'min'     => 0,
                'max'     => 1000000,
                'columns' => 4,
            ],
        ],
    ];

    return $meta_boxes;
} );
