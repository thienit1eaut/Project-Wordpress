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

<section class="content-main-home">
    <div class="container">
        <div class="row">
            <div class="col-md-3">

                <?php get_sidebar(); ?>

            </div>
            <div class="col-md-9">
                <div class="title-header-section">
                    <h1 class="title"><?php single_cat_title(); ?></h1>
                </div>
                <div class="row box-projects">
                    <?php
                        if ( have_posts() ) :
                            while ( have_posts() ) : the_post(); ?>

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