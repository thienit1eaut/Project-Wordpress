<div class="sidebar-page">
    <?php if ( is_home() ) { ?>
    <div class="item-sidebar box-hotline-suppost">
        <p class="title-sidebar">HỖ TRỢ KHÁCH HÀNG</p>
        <div class="image-sidebar">
            <?php the_option_image_html('image-hotline-suppost','thumbnail','option_setting_page_home'); ?>
        </div>
        <div class="content-sidebar">
            <div class="box-text-hotline s-content">
                <?php the_option_text_html('hotline-suppost-cutomer', 'option_setting_page_home'); ?>
            </div>
        </div>
    </div>

    <div class="item-sidebar box-blog-post">
        <p class="title-sidebar">TIN TỨC</p>
        <div class="content-blog-post">
        <?php
            global $post;
            $myposts = get_posts( array(
                'post_type'  => 'post',
                'numberposts' => 6,
            ) );

            if ( $myposts ) {
            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
            <div class="item-post">
                <div class="image-post">
                    <a href="<?php the_permalink(); ?>" class="" title="<?php the_title(); ?>">
                        <?php the_image_post( 'medium' ); ?>
                    </a>
                </div>
                <div class="title-post">
                    <h3><a href="<?php the_permalink(); ?>" class="smooth" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                </div>
            </div>
        <?php
            endforeach;
            wp_reset_postdata();
         } ?>
        </div>
    </div>
    <?php
    
        } else {

            if ( is_active_sidebar( 'knv-sidebar-page' ) ) {

                dynamic_sidebar( 'knv-sidebar-page' );

            }

        }
    ?>
</div>
