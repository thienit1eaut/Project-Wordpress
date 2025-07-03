<?php get_header(); ?>

<section class="content-banner">
    <div class="banner-page-top">
        <?php
            $img_banner = rwmb_meta( 'image-banner-project', ['object_type' => 'setting'], 'option_setting_page_project' );
            if ( $img_banner ) {
                echo wp_get_attachment_image( $img_banner['ID'], 'full' );
            }
        ?>
    </div>
</section>

<section class="content-single-page">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1 class="title-post-page"><?php the_title(); ?></h1>
                <p class="title-post-page"><?php the_date(); ?></p>

                <div class="s-content">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-md-3">

                <?php get_sidebar(); ?>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>