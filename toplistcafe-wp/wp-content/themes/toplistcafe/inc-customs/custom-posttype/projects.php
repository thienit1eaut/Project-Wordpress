<?php
add_action( 'init', 'projects_register_post_type' );
function projects_register_post_type() {
    $labels = [
        'name'                     => esc_html__( 'Dự án', 'your-textdomain-projects' ),
        'singular_name'            => esc_html__( 'Dự án', 'your-textdomain-projects' ),
        'add_new'                  => esc_html__( 'Thêm mới', 'your-textdomain-projects' ),
        'add_new_item'             => esc_html__( 'Thêm mới dự án', 'your-textdomain-projects' ),
        'edit_item'                => esc_html__( 'Chỉnh sửa dự án', 'your-textdomain-projects' ),
        'new_item'                 => esc_html__( 'Dự án mới', 'your-textdomain-projects' ),
        'view_item'                => esc_html__( 'Xem dự án', 'your-textdomain-projects' ),
        'view_items'               => esc_html__( 'Xem dự án', 'your-textdomain-projects' ),
        'search_items'             => esc_html__( 'Tìm kiếm dự án', 'your-textdomain-projects' ),
        'not_found'                => esc_html__( 'No Dự án found.', 'your-textdomain-projects' ),
        'not_found_in_trash'       => esc_html__( 'No Dự án found in Trash.', 'your-textdomain-projects' ),
        'parent_item_colon'        => esc_html__( 'Parent Dự án:', 'your-textdomain-projects' ),
        'all_items'                => esc_html__( 'Tất cả dự án', 'your-textdomain-projects' ),
        'archives'                 => esc_html__( 'Dự án Archives', 'your-textdomain-projects' ),
        'attributes'               => esc_html__( 'Dự án Attributes', 'your-textdomain-projects' ),
        'insert_into_item'         => esc_html__( 'Insert into Dự án', 'your-textdomain-projects' ),
        'uploaded_to_this_item'    => esc_html__( 'Uploaded to this Dự án', 'your-textdomain-projects' ),
        'featured_image'           => esc_html__( 'Featured image', 'your-textdomain-projects' ),
        'set_featured_image'       => esc_html__( 'Set featured image', 'your-textdomain-projects' ),
        'remove_featured_image'    => esc_html__( 'Remove featured image', 'your-textdomain-projects' ),
        'use_featured_image'       => esc_html__( 'Use as featured image', 'your-textdomain-projects' ),
        'menu_name'                => esc_html__( 'Dự án', 'your-textdomain-projects' ),
        'filter_items_list'        => esc_html__( 'Filter Dự án list', 'your-textdomain-projects' ),
        'filter_by_date'           => esc_html__( '', 'your-textdomain-projects' ),
        'items_list_navigation'    => esc_html__( 'Dự án list navigation', 'your-textdomain-projects' ),
        'items_list'               => esc_html__( 'Dự án list', 'your-textdomain-projects' ),
        'item_published'           => esc_html__( 'Dự án published.', 'your-textdomain-projects' ),
        'item_published_privately' => esc_html__( 'Dự án published privately.', 'your-textdomain-projects' ),
        'item_reverted_to_draft'   => esc_html__( 'Dự án reverted to draft.', 'your-textdomain-projects' ),
        'item_scheduled'           => esc_html__( 'Dự án scheduled.', 'your-textdomain-projects' ),
        'item_updated'             => esc_html__( 'Dự án updated.', 'your-textdomain-projects' ),
    ];
    $args = [
        'label'               => esc_html__( 'Dự án', 'your-textdomain-projects' ),
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
        'supports'            => ['title', 'editor', 'excerpt', 'thumbnail'],
        'taxonomies'          => ['projects-category'],
        'rewrite'             => [
            'slug'       => 'du-an',
            'with_front' => false,
        ],
    ];

    register_post_type( 'projects', $args );
}

add_action( 'init', 'projects_category_register_taxonomy' );
function projects_category_register_taxonomy() {
    $labels = [
        'name'                       => esc_html__( 'Danh mục dự án', 'your-textdomain-projects-category' ),
        'singular_name'              => esc_html__( 'Danh mục dự án', 'your-textdomain-projects-category' ),
        'menu_name'                  => esc_html__( 'Danh mục dự án', 'your-textdomain-projects-category' ),
        'search_items'               => esc_html__( 'Tìm kiếm danh mục dự án', 'your-textdomain-projects-category' ),
        'popular_items'              => esc_html__( 'Popular Danh mục dự án', 'your-textdomain-projects-category' ),
        'all_items'                  => esc_html__( 'Tất cả danh mục dự án', 'your-textdomain-projects-category' ),
        'parent_item'                => esc_html__( 'Danh mục cha', 'your-textdomain-projects-category' ),
        'parent_item_colon'          => esc_html__( 'Danh mục dự án:', 'your-textdomain-projects-category' ),
        'edit_item'                  => esc_html__( 'Chỉnh sửa danh mục dự án', 'your-textdomain-projects-category' ),
        'view_item'                  => esc_html__( 'Hiển thị danh mục dự án', 'your-textdomain-projects-category' ),
        'update_item'                => esc_html__( 'Cập nhật danh mục dự án', 'your-textdomain-projects-category' ),
        'add_new_item'               => esc_html__( 'Thêm mới danh mục dự án', 'your-textdomain-projects-category' ),
        'new_item_name'              => esc_html__( 'New Danh mục dự án Name', 'your-textdomain-projects-category' ),
        'separate_items_with_commas' => esc_html__( 'Separate danh mục dự án with commas', 'your-textdomain-projects-category' ),
        'add_or_remove_items'        => esc_html__( 'Add or remove danh mục dự án', 'your-textdomain-projects-category' ),
        'choose_from_most_used'      => esc_html__( 'Choose most used danh mục dự án', 'your-textdomain-projects-category' ),
        'not_found'                  => esc_html__( 'No danh mục dự án found.', 'your-textdomain-projects-category' ),
        'no_terms'                   => esc_html__( 'No danh mục dự án', 'your-textdomain-projects-category' ),
        'filter_by_item'             => esc_html__( 'Filter by danh mục dự án', 'your-textdomain-projects-category' ),
        'items_list_navigation'      => esc_html__( 'Danh mục dự án list pagination', 'your-textdomain-projects-category' ),
        'items_list'                 => esc_html__( 'Danh mục dự án list', 'your-textdomain-projects-category' ),
        'most_used'                  => esc_html__( 'Phổ biến', 'your-textdomain-projects-category' ),
        'back_to_items'              => esc_html__( '&larr; Go to Danh mục dự án', 'your-textdomain-projects-category' ),
    ];
    $args = [
        'label'              => esc_html__( 'Danh mục dự án', 'your-textdomain-projects-category' ),
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
            'slug'         => 'danh-muc-du-an',
            'with_front'   => false,
            // 'hierarchical' => true,
        ],
    ];
    register_taxonomy( 'projects-category', ['projects'], $args );
}

/* Setting general information custom page product */
add_filter( 'rwmb_meta_boxes', function ( $meta_boxes ) {
    $meta_boxes[] = [
        'id'             => 'post-projects-option-setting-page',
        'title'          => 'Cấu hình hiển thị',
        'post_types' => ['projects'],
        'fields'         => [
            [
                'name' => 'Slide trang chủ',
                'id'   => 'home-projects',
                'type' => 'checkbox',
                'std'  => 1,
            ],
            [
                'name' => 'Kích hoạt',
                'id'   => 'act-projects',
                'type' => 'checkbox',
                'std'  => 1,
            ],
            [
                'name' => 'Sắp xếp',
                'id'   => 'ord-projects',
                'type' => 'number',
                'min'     => 0,
                'max'     => 1000000,
                'columns' => 4,
            ],
        ],
    ];

    return $meta_boxes;
} );
