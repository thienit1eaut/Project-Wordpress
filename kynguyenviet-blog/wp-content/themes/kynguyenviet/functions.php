<?php
require_once('inc-customs/custom-setting-page/setting-page.php');
require_once('inc-customs/custom-posttype/post-type.php');
require_once('inc-customs/widgets/widget.php');
require_once('inc-customs/helpers/option-setting.php');

// Add theme support for featured images
add_theme_support( 'post-thumbnails' );

//Tạo menu wordpress
function my_custom_menu() {
    register_nav_menus(
        array(
            'menu-header' => __( 'Menu Header' )
        )
    );
}
add_action( 'init', 'my_custom_menu' );