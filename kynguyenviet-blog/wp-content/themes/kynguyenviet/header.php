<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo( 'name' ); ?> - <?php echo get_bloginfo( 'description' ); ?></title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/frontend/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/frontend/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/frontend/css/reset-style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/frontend/css/style-media.css">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if ( is_home() ) : ?>
<h1 style="display: none;"><?php echo get_bloginfo( 'name' ); ?> - <?php echo get_bloginfo( 'description' ); ?></h1>
<?php endif; ?>

<header>
    <div class="header-top">
        <div class="container">
            <div class="top-slogan-site">
                <marquee behavior="scroll" direction="left" class="bold">CÔNG TY TNHH ĐẦU TƯ VÀ PHÁT TRIỂN KỶ NGUYÊN VIỆT - KHÔNG THỎA HIỆP VỚI CHẤT LƯỢNG</marquee>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <a href="#" class="logo-header" title="Logo">
                        <?php the_option_image_html('logo-header','thumbnail','options_settings_pages'); ?>
                    </a>
                </div>
                <div class="col-sm-9 top-info-company">
                    <p class="name_company text-end mb-1"><?php the_option_text_html('name-company', 'options_settings_pages'); ?></p>
                    <p class="address_vp text-end mb-1">Văn phòng: <?php the_option_text_html('vp-address-company', 'options_settings_pages'); ?></p>
                    <p class="address_nm text-end mb-1">Nhà máy: <?php the_option_text_html('nm-address-company', 'options_settings_pages'); ?></p>
                    <p class="hotline text-end">
                        <span>Hotline:</span> 
                        <a href="tel:<?php the_option_text_html('hotline-company', 'options_settings_pages'); ?>" class="hv-text smooth"><?php the_option_text_html('hotline-company', 'options_settings_pages'); ?></a>
                        <span class="mx-1">-</span>
                        <a href="mailto:<?php the_option_text_html('tel-company', 'options_settings_pages'); ?>" class="hv-text smooth"><?php the_option_text_html('tel-company', 'options_settings_pages'); ?></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div id="mega-menu-wrap" class="menu-category h-100">
                        <p class="mega-menu-title h-100 d-flex align-items-center"><i class="fa fa-bars me-2" aria-hidden="true"></i> Danh mục sản phẩm</p>
                        <div id="mega_menu" class="box_mega_menu">
                            <ul class="nav_bg menu-cate">
                                <li class="item-menu-cate has-cate-child">
                                    <a href="#" class="menu_link_cate">Hệ cửa sổ</a>
                                </li>
                                <li class="item-menu-cate has-cate-child">
                                    <a href="#" class="menu_link_cate">Hệ cửa đi</a>
                                    <ul>
                                        <li class="item-menu-cate">
                                            <a href="#" class="menu_link_cate">Hệ cửa thủy lực</a>
                                        </li>
                                        <li class="item-menu-cate">
                                            <a href="#" class="menu_link_cate">Vách kính cường lực</a>
                                        </li>
                                        <li class="item-menu-cate">
                                            <a href="#" class="menu_link_cate">Hệ mặt dựng</a>
                                        </li>
                                        <li class="item-menu-cate">
                                            <a href="#" class="menu_link_cate">Cabin</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="item-menu-cate">
                                    <a href="#" class="menu_link_cate">Hệ cửa thủy lực</a>
                                </li>
                                <li class="item-menu-cate">
                                    <a href="#" class="menu_link_cate">Vách kính cường lực</a>
                                </li>
                                <li class="item-menu-cate">
                                    <a href="#" class="menu_link_cate">Hệ mặt dựng</a>
                                </li>
                                <li class="item-menu-cate">
                                    <a href="#" class="menu_link_cate">Cabin</a>
                                </li>
                                <li class="item-menu-cate">
                                    <a href="#" class="menu_link_cate">Lan can kính</a>
                                </li>
                                <li class="item-menu-cate">
                                    <a href="#" class="menu_link_cate">Tủ cánh kính</a>
                                </li>
                                <li class="item-menu-cate">
                                    <a href="#" class="menu_link_cate">Mái kính</a>
                                </li>
                                <li class="item-menu-cate">
                                    <a href="#" class="menu_link_cate">Hệ cửa phòng</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 d-flex align-items-center justify-content-end">
                    <div class="menu-header">
                        <?php 
                            wp_nav_menu( 
                                array( 
                                    'theme_location' => 'menu-header'
                                ) 
                            ); 
                        ?>
                    </div>
                    <div class="search-header">
                        <p class="title-frm-search"><i class="fa fa-search" aria-hidden="true"></i></p>
                        <form action="#" method="get" class="form-search d-none" accept-charset="utf8">
                            <input type="text" name="s" class="input-search" value="" placeholder="Nhập từ khóa tìm kiếm...">
                            <button type="submit" title="Tìm kiếm"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</header>
