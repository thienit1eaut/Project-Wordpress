<?php get_header(); ?>

<section class="content-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <div class="slide-banner-home">
                    <?php
                        $img_banner = rwmb_meta( 'image-banner-product', ['object_type' => 'setting'], 'options_settings_pages' );
                        echo "<pre>";
                        print_r($img_banner);
                        echo "</pre>";
                    ?>
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
                    <h2 class="title"><?php the_option_text_html('title-section-project-home'); ?></h2>
                </div>
                <div class="row box-projects">
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
                                            <p class="excerpt d-none"><?php the_excerpt(); ?></p>
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

                <div class="title-header-section">
                    <h2 class="title"><?php the_option_text_html('title-section-product-home'); ?></h2>
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
                                        <div class="info-product">
                                            <h3><a href="<?php the_permalink(); ?>" class="title-product smooth" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                                            <p class="excerpt-product d-none"><?php the_excerpt(); ?></p>
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

                <div class="title-header-section">
                    <h2 class="title"><?php the_option_text_html('title-section-product-home'); ?></h2>
                </div>
                <div class="row box-partners">
                    <div class="col-md-2 col-sm-3">
                        <p class="item-partner"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>