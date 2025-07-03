<?php get_header(); ?>

<section class="content-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-9 slide-banner-home ngt_control_slide">
                <div class="swiper swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                            $slide_banners = rwmb_meta( 'slide-banner-main', ['object_type' => 'setting'], 'options_settings_slides' );
                            if ( !empty($slide_banners) ) :
                                foreach ( $slide_banners as $item_banner ) : 
                                    if ( isset($item_banner['image-slide']) ) {
                                        echo '<div class="swiper-slide">';
                                        echo '<a href="'.$item_banner['link-slide'].'" class="item-slide" title="'.$item_banner['title-slide'].'">';
                                            echo wp_get_attachment_image( $item_banner['image-slide'], 'large' );
                                        echo '</a>';
                                        echo '</div>';
                                    } else {
                                        echo '<div class="swiper-slide">';
                                        echo '<a href="'.$item_banner['link-slide'].'" class="item-slide" title="'.$item_banner['title-slide'].'">';
                                            echo get_default_image();
                                        echo '</a>';
                                        echo '</div>';
                                    }
                                endforeach;
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content-main-home">
    <div class="container">
        <div class="row">
            <div class="col-md-3">

                <?php get_sidebar(); ?>

            </div>
            <div class="col-md-9">
                <div class="title-header-section">
                    <h2 class="title"><?php the_option_text_html('title-section-project-home', 'option_setting_page_home'); ?></h2>
                </div>
                <div class="row mb-2 box-projects">
                    <?php
                        global $post;

                        $post_projects = get_posts( array(
                            'post_type'  => 'projects',
                            'numberposts' => 9,
                        ) );

                        if ( $post_projects ) {
                            foreach ( $post_projects as $post ) : 
                                setup_postdata( $post ); ?>
                                <div class="col-sm-4">
                                    <div class="item-box-project">
                                        <div class="image-project">
                                            <a href="<?php the_permalink(); ?>" class="c-img" title="<?php the_title(); ?>">
                                                <?php the_image_post( 'large' ); ?>
                                            </a>
                                        </div>
                                        <div class="info-project">
                                            <h3><a href="<?php the_permalink(); ?>" class="title-project smooth" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endforeach;
                            wp_reset_postdata();
                        }
                    ?>
                </div>
                <p class="text-center">
                    <a href="<?php echo get_post_type_archive_link('projects'); ?>" class="link-readmore smooth" title="Xem tất cả">Xem tất cả</a>
                </p>

                <div class="title-header-section mt-md-5 mt-3">
                    <h2 class="title"><?php the_option_text_html('title-section-product-home', 'option_setting_page_home'); ?></h2>
                </div>
                <div class="row box-products">
                    <?php
                        global $post;

                        $post_products = get_posts( array(
                            'post_type'  => 'products',
                            'numberposts' => 9,
                        ) );

                        if ( $post_products ) {
                            foreach ( $post_products as $post ) : 
                                setup_postdata( $post ); ?>
                                <div class="col-sm-4">
                                    <div class="item-box-product">
                                        <div class="image-product">
                                            <a href="<?php the_permalink(); ?>" class="c-img" title="<?php the_title(); ?>">
                                                <?php the_image_post( 'large' ); ?>
                                            </a>
                                        </div>
                                        <div class="info-product text-center">
                                            <h3><a href="<?php the_permalink(); ?>" class="title-product smooth" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endforeach;
                            wp_reset_postdata();
                        }
                    ?>

                </div>
                <p class="text-center">
                    <a href="<?php echo get_post_type_archive_link('products'); ?>" class="link-readmore smooth" title="Xem tất cả">Xem tất cả</a>
                </p>

                <div class="title-header-section mt-md-5 mt-3">
                    <h2 class="title"><?php the_option_text_html('title-section-partner-home', 'option_setting_page_home'); ?></h2>
                </div>
                <div class="row my-3 box-partners justify-content-center">
                <?php
                    $partners = rwmb_meta( 'partner-home', ['object_type' => 'setting'], 'option_setting_page_home' );
                    if ( !empty($partners) ) :
                        foreach ( $partners as $item_partner ) : ?>
                        <div class="col-md-2 col-sm-3 d-flex align-items-center justify-content-center">
                            <a href="<?php echo $item_partner['link-partner']; ?>" class="item-partner" title="<?php echo $item_partner['title-partner']; ?>">
                                <?php
                                    if ( isset($item_partner['image-partner']) ) {
                                        echo wp_get_attachment_image( $item_partner['image-partner'], 'thumbnail' );
                                    } else {
                                        echo get_default_image();
                                    }
                                ?>
                            </a>
                        </div>
                        <?php
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>