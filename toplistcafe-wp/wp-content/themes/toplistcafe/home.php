<?php get_header(); ?>

<?php
    if ( is_active_sidebar( 'knv-main-home-page' ) ) {
        dynamic_sidebar( 'knv-main-home-page' );
    }
?>

<?php get_footer(); ?>