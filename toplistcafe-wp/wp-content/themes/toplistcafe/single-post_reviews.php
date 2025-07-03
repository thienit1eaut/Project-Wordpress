<?php get_header(); ?>

<section class="single-content-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="single-header">
                    <?php
                        $terms = get_the_terms( get_the_ID(), 'post_reviews-category');
                        if ( $terms && ! is_wp_error( $terms ) ) :
                    ?>
                    <div class="p-cat-info d-flex align-items-center justify-content-start">
                        <?php
                            foreach ( $terms as $term ) : ?>
                                <a href="<?php echo get_term_link($term->slug, $term->taxonomy); ?>" class="item-cat smooth" title="<?php echo $term->name; ?>"><?php echo $term->name; ?></a>
                        <?php 
                            endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <h1 class="title-post-single"><?php the_title(); ?></h1>
                    <p class="date-post-single"><?php echo get_the_date( 'F j, Y', get_the_ID() ); ?></p>
                </div>
                <div class="entry-content">
                    <figure class="wp-block-table is-style-stripes">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="has-text-align-center" data-align="center"><strong>Địa điểm</strong></td>
                                    <td class="has-text-align-center" data-align="center"><?php rwmb_the_value( 'address-post-review' ) ?></td>
                                </tr>
                                <tr>
                                    <td class="has-text-align-center" data-align="center"><strong>Không gian</strong></td>
                                    <td class="has-text-align-center" data-align="center"><?php rwmb_the_value( 'space-post-review' ) ?></td>
                                </tr>
                                <tr>
                                    <td class="has-text-align-center" data-align="center"><strong>Giá tiền</strong></td>
                                    <td class="has-text-align-center" data-align="center"><?php rwmb_the_value( 'price-post-review' ) ?></td>
                                </tr>
                                <tr>
                                    <td class="has-text-align-center" data-align="center"><strong>Wi-Fi Password</strong></td>
                                    <td class="has-text-align-center" data-align="center"><?php rwmb_the_value( 'wifi-pass-post-review' ) ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                </div>
                <div class="s-content pt-md-5 pb-md-4 pt-4 pb-3">
                    <?php the_content(); ?>
                </div>
                <div class="single-post-tag tags d-flex align-items-center">
                    <span class="tag-label">Tags:</span>
                    <a rel="tag" href="#" title="barista collective">barista collective</a>
                    <a rel="tag" href="#" title="cafe sài gòn">cafe sài gòn</a>
                    <a rel="tag" href="#" title="specialty coffee">specialty coffee</a>
                </div>
                <div class="single-post-comment">
                    <?php /* if (is_single ()) comment_form(); */ ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sidebar-page">
                    <h2 class="widget-title h4">Có Thể Bạn Chưa Biết</h2>
                    <div class="row widget-post-content">
                        <?php 
                            $terms = rwmb_meta( 'cates-post-sidebar' );
                            if ( !empty($terms) ) :
                                global $post;
                                foreach ( $terms as $term ) :
                                    $my_postss = get_posts( array(
                                        'post_type'   => 'post',
                                        'category'       => $term->term_id,
                                        'numberposts' => 10,
                                        'meta_query' => array(
                                            array(
                                                'key'   => 'act-post',
                                                'value' => 1,
                                            ),
                                        )
                                    ) );
                    
                                    if( $my_postss ) {
                                        foreach ( $my_postss as $post ) : setup_postdata( $post );  ?>
                                    <div class="col-md-12">
                                        <div class="item-post-sidebar-right d-flex align-items-center">
                                            <a href="<?php the_permalink(); ?>" class="img-post" title="<?php the_title(); ?>">
                                                <?php the_image_post( 'medium' ); ?>
                                            </a>
                                            <div class="info-post">
                                                <h4><a href="<?php the_permalink(); ?>" class="title-post smooth" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                                            </div>
                                        </div>
                                    </div>
                    <?php 
                                        endforeach;
                                    }
                                endforeach;
                                wp_reset_postdata();
                            endif;
                    ?>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section_all st-post-category">
    <div class="container">
        <p class="st-title-wrap">Bạn cũng có thể thích</p>
        <?php
            $arrTermId = array();
            $terms = get_the_terms( get_the_ID(), 'post_reviews-category');
            if ( $terms && ! is_wp_error( $terms ) ) {
                foreach ( $terms as $term ) {
                    array_push($arrTermId, $term->term_id);
                }
            }
            if (!empty($arrTermId)) :
                global $post;
                $my_postss = get_posts( array(
                    'post_type'   => 'post_reviews',
                    'numberposts' => 4,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'post_reviews-category',
                            'field'    => 'ID',
                            'terms'    => $arrTermId
                        )
                    ),
                    'meta_query' => array(
                        array(
                            'key'   => 'act-post-review',
                            'value' => 1,
                        ),
                    )
                ) );

                if( $my_postss ) {
        ?>
        <div class="row list-product-lienquan">
            <?php foreach ( $my_postss as $post ) : setup_postdata( $post ); ?>
            <div class="col-lg-3 col-md-4">
                <div class="item-product-hot-2">
                    <div class="img-produt">
                        <a href="<?php the_permalink(); ?>" class="c-img" title="<?php the_title(); ?>">
                            <?php the_image_post( 'large' ); ?>
                        </a>
                        <?php
                            $terms2 = get_the_terms( get_the_ID(), 'post_reviews-category');
                            if ( $terms2 && ! is_wp_error( $terms2 ) ) : 
                                $terms2 = array_slice($terms2, 0, 2); 
                        ?>
                        <div class="p-cat-info">
                        <?php foreach ( $terms2 as $term2 ) { ?>
                            <a href="<?php echo get_term_link($term2->slug, $term2->taxonomy); ?>" class="item-cat smooth" title="<?php echo $term2->name; ?>"><?php echo $term2->name; ?></a>
                        <?php } ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <h3 class="title-pro">
                        <a href="<?php the_permalink(); ?>" class="smooth" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </h3>
                </div>
            </div>
            <?php
                endforeach;
            ?>   
        </div>
        <?php 
                }
                wp_reset_postdata();
            endif;
        ?>

    </div>
</section>

<?php get_footer(); ?>