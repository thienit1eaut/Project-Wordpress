<?php
add_action( 'init', 'products_register_post_type' );
function products_register_post_type() {
    $labels = [
        'name'                     => esc_html__( 'Sản phẩm', 'your-textdomain-products' ),
        'singular_name'            => esc_html__( 'Sản phẩm', 'your-textdomain-products' ),
        'add_new'                  => esc_html__( 'Thêm mới', 'your-textdomain-products' ),
        'add_new_item'             => esc_html__( 'Thêm mới sản phẩm', 'your-textdomain-products' ),
        'edit_item'                => esc_html__( 'Chỉnh sửa sản phẩm', 'your-textdomain-products' ),
        'new_item'                 => esc_html__( 'Sản phẩm mới', 'your-textdomain-products' ),
        'view_item'                => esc_html__( 'Xem sản phẩm', 'your-textdomain-products' ),
        'view_items'               => esc_html__( 'Xem sản phẩm', 'your-textdomain-products' ),
        'search_items'             => esc_html__( 'Tìm kiếm sản phẩm', 'your-textdomain-products' ),
        'not_found'                => esc_html__( 'No Sản phẩm found.', 'your-textdomain-products' ),
        'not_found_in_trash'       => esc_html__( 'No Sản phẩm found in Trash.', 'your-textdomain-products' ),
        'parent_item_colon'        => esc_html__( 'Parent Sản phẩm:', 'your-textdomain-products' ),
        'all_items'                => esc_html__( 'Tất cả sản phẩm', 'your-textdomain-products' ),
        'archives'                 => esc_html__( 'Sản phẩm Archives', 'your-textdomain-products' ),
        'attributes'               => esc_html__( 'Sản phẩm Attributes', 'your-textdomain-products' ),
        'insert_into_item'         => esc_html__( 'Insert into Sản phẩm', 'your-textdomain-products' ),
        'uploaded_to_this_item'    => esc_html__( 'Uploaded to this Sản phẩm', 'your-textdomain-products' ),
        'featured_image'           => esc_html__( 'Featured image', 'your-textdomain-products' ),
        'set_featured_image'       => esc_html__( 'Set featured image', 'your-textdomain-products' ),
        'remove_featured_image'    => esc_html__( 'Remove featured image', 'your-textdomain-products' ),
        'use_featured_image'       => esc_html__( 'Use as featured image', 'your-textdomain-products' ),
        'menu_name'                => esc_html__( 'Sản phẩm', 'your-textdomain-products' ),
        'filter_items_list'        => esc_html__( 'Filter Sản phẩm list', 'your-textdomain-products' ),
        'filter_by_date'           => esc_html__( '', 'your-textdomain-products' ),
        'items_list_navigation'    => esc_html__( 'Sản phẩm list navigation', 'your-textdomain-products' ),
        'items_list'               => esc_html__( 'Sản phẩm list', 'your-textdomain-products' ),
        'item_published'           => esc_html__( 'Sản phẩm published.', 'your-textdomain-products' ),
        'item_published_privately' => esc_html__( 'Sản phẩm published privately.', 'your-textdomain-products' ),
        'item_reverted_to_draft'   => esc_html__( 'Sản phẩm reverted to draft.', 'your-textdomain-products' ),
        'item_scheduled'           => esc_html__( 'Sản phẩm scheduled.', 'your-textdomain-products' ),
        'item_updated'             => esc_html__( 'Sản phẩm updated.', 'your-textdomain-products' ),
    ];
    $args = [
        'label'               => esc_html__( 'Sản phẩm', 'your-textdomain-products' ),
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
        'menu_icon'           => 'dashicons-products',
        'capability_type'     => 'post',
        'supports'            => ['title', 'editor', 'excerpt', 'thumbnail'],
        'taxonomies'          => ['products-category'],
        'rewrite'             => [
            'slug'       => 'san-pham',
            'with_front' => false,
        ],
    ];

    register_post_type( 'products', $args );
}

add_action( 'init', 'products_category_register_taxonomy' );
function products_category_register_taxonomy() {
    $labels = [
        'name'                       => esc_html__( 'Danh mục sản phẩm', 'your-textdomain-products-category' ),
        'singular_name'              => esc_html__( 'Danh mục sản phẩm', 'your-textdomain-products-category' ),
        'menu_name'                  => esc_html__( 'Danh mục sản phẩm', 'your-textdomain-products-category' ),
        'search_items'               => esc_html__( 'Tìm kiếm danh mục sản phẩm', 'your-textdomain-products-category' ),
        'popular_items'              => esc_html__( 'Popular Danh mục sản phẩm', 'your-textdomain-products-category' ),
        'all_items'                  => esc_html__( 'Tất cả danh mục sản phẩm', 'your-textdomain-products-category' ),
        'parent_item'                => esc_html__( 'Danh mục cha', 'your-textdomain-products-category' ),
        'parent_item_colon'          => esc_html__( 'Danh mục sản phẩm:', 'your-textdomain-products-category' ),
        'edit_item'                  => esc_html__( 'Chỉnh sửa danh mục sản phẩm', 'your-textdomain-products-category' ),
        'view_item'                  => esc_html__( 'Hiển thị danh mục sản phẩm', 'your-textdomain-products-category' ),
        'update_item'                => esc_html__( 'Cập nhật danh mục sản phẩm', 'your-textdomain-products-category' ),
        'add_new_item'               => esc_html__( 'Thêm mới danh mục sản phẩm', 'your-textdomain-products-category' ),
        'new_item_name'              => esc_html__( 'New Danh mục sản phẩm Name', 'your-textdomain-products-category' ),
        'separate_items_with_commas' => esc_html__( 'Separate danh mục sản phẩm with commas', 'your-textdomain-products-category' ),
        'add_or_remove_items'        => esc_html__( 'Add or remove danh mục sản phẩm', 'your-textdomain-products-category' ),
        'choose_from_most_used'      => esc_html__( 'Choose most used danh mục sản phẩm', 'your-textdomain-products-category' ),
        'not_found'                  => esc_html__( 'No danh mục sản phẩm found.', 'your-textdomain-products-category' ),
        'no_terms'                   => esc_html__( 'No danh mục sản phẩm', 'your-textdomain-products-category' ),
        'filter_by_item'             => esc_html__( 'Filter by danh mục sản phẩm', 'your-textdomain-products-category' ),
        'items_list_navigation'      => esc_html__( 'Danh mục sản phẩm list pagination', 'your-textdomain-products-category' ),
        'items_list'                 => esc_html__( 'Danh mục sản phẩm list', 'your-textdomain-products-category' ),
        'most_used'                  => esc_html__( 'Phổ biến', 'your-textdomain-products-category' ),
        'back_to_items'              => esc_html__( '&larr; Go to Danh mục sản phẩm', 'your-textdomain-products-category' ),
    ];
    $args = [
        'label'              => esc_html__( 'Danh mục sản phẩm', 'your-textdomain-products-category' ),
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
            'slug'         => 'danh-muc-san-pham',
            'with_front'   => true,
            'hierarchical' => false,
        ],
    ];
    register_taxonomy( 'products-category', ['products'], $args );
}

/* Setting general information custom page product */
add_filter( 'rwmb_meta_boxes', function ( $meta_boxes ) {
    $meta_boxes[] = [
        'id'             => 'post-products-option-setting-page',
        'title'          => 'Cấu hình hiển thị',
        'post_types' => ['products'],
        'fields'         => [
            [
                'name' => 'Slide trang chủ',
                'id'   => 'home-products',
                'type' => 'checkbox',
                'std'  => 1,
            ],
            [
                'name' => 'Kích hoạt',
                'id'   => 'act-products',
                'type' => 'checkbox',
                'std'  => 1,
            ],
            [
                'name' => 'Sắp xếp',
                'id'   => 'ord-products',
                'type' => 'number',
                'min'     => 0,
                'max'     => 1000000,
                'columns' => 4,
            ],
        ],
    ];

    return $meta_boxes;
} );