<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo( 'name' ); ?> - <?php echo get_bloginfo( 'description' ); ?></title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/frontend/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/frontend/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/frontend/css/reset-style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/frontend/scss/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/frontend/scss/style-mobile.css">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if ( is_home() ) : ?>
<h1 style="display: none;"><?php echo get_bloginfo( 'name' ); ?> - <?php echo get_bloginfo( 'description' ); ?></h1>
<?php endif; ?>

<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="<?php echo get_home_url(); ?>" class="logo-header d-flex align-items-center" title="<?php echo get_bloginfo( 'name' ); ?>">
                    <?php the_option_image_html('logo-header','','options_settings_pages'); ?>
                </a>
            </div>
            <div class="col-md-10 d-flex align-items-center justify-content-end">
                <div class="main-menu">
                    <?php 
                        wp_nav_menu( 
                            array( 
                                'theme_location' => 'menu-header'
                            ) 
                        ); 
                    ?>
                </div>
                <div class="main-search d-flex align-items-center justify-content-end">
                    <button type="button" class="btn-search text-center smooth" title="Tìm kiếm"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
    </div>
</header>
