<?php
// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

/* Better way to add multiple widgets areas */
function widget_registration($name, $id, $description,$beforeWidget, $afterWidget, $beforeTitle, $afterTitle){
    register_sidebar( array(
        'id' => $id,
        'name' => __( $name, 'textdomain-'.$id ),
        'description' => __( $description ),
        'before_widget' => $beforeWidget,
        'after_widget' => $afterWidget,
        'before_title' => $beforeTitle,
        'after_title' => $afterTitle,
    ));
}

add_action('widgets_init', 'multiple_widget_init');
function multiple_widget_init(){

    widget_registration('Main Home Page', 'knv-main-home-page', 'Main Home Page', '', '', '', '');
    widget_registration('Sidebar page', 'knv-sidebar-page', 'Sidebar page', '', '', '', '');
    
}


include_once('wg_post_page_first.php');
include_once('wg_post_review_slide.php');
include_once('wg_list_post_category_slide.php');
include_once('wg_list_new_home.php');
include_once('wg_list_post_sidebar.php');


add_action( 'widgets_init', 'create_widget_custom_site' );
function create_widget_custom_site() {

    register_widget( 'Wg_Post_Page_First' );
    register_widget( 'Wg_Post_Review_Slide' );
    register_widget( 'Wg_List_Post_Category_Slide' );
    register_widget( 'Wg_List_New_Home' );
    register_widget( 'Wg_List_Post_Sidebar' );

}
