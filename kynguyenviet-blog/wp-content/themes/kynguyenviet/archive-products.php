<?php get_header(); ?>

<section class="content-banner">
    <div class="banner-page-top">
        <?php
            $img_banner = rwmb_meta( 'image-banner-product', ['object_type' => 'setting'], 'option_setting_page_product' );
            if ( $img_banner ) {
                echo wp_get_attachment_image( $img_banner['ID'], 'full' );
            }
        ?>
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
                    <h1 class="title"><?php the_option_text_html('title-section-product-home'); ?></h1>
                </div>
                <div class="row box-products">
                    <?php
                        $args = array(
                            'post_type' => 'products',
                            'posts_per_archive_page' => 9,
                            'paged' => get_query_var('paged'),
                        );

                        $the_query = new WP_Query( $args );

                        if ( $the_query->have_posts() ) :
                            while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

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
                            endwhile;
                        endif;
                        // Reset Post Data
                        wp_reset_postdata();
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>