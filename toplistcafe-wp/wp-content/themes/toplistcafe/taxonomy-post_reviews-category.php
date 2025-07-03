<?php get_header(); ?>

<section class="content-banner-page">
    <div class="container">
        <div class="wrap-content-title-category">
            <h1 class="archive-title category-title"><?php single_term_title() ?></h1>
        </div>
    </div>
</section>

<section class="page-category-main">
    <div class="container">
        <div class="row">
        <?php 
            if( have_posts() ) :
            while( have_posts() ) : the_post(); ?>
            <div class="col-md-4 col-sm-6">
                <div class="item-post-category">
                    <div class="img-post">
                        <a href="<?php the_permalink(); ?>" class="c-img" title="<?php the_title(); ?>"><?php the_title(); ?>
                            <?php the_image_post( 'medium_large' ); ?>
                        </a>
                        <?php 
                            $terms = get_the_terms( get_the_ID(), 'post_reviews-category');
                            if ( $terms && ! is_wp_error( $terms ) ) : 
                                $terms = array_slice($terms, 0, 2); ?>
                        <div class="p-cat-info">
                        <?php
                            foreach ( $terms as $term ) :
                                if ($term->term_id != get_queried_object_id()) : ?>
                                <h2><a href="<?php echo get_term_link($term->slug, $term->taxonomy); ?>" class="item-cat smooth" title="<?php echo $term->name; ?>"><?php echo $term->name; ?></a></h2>
                        <?php
                                endif;
                            endforeach; ?>
                        </div>
                        <?php
                            endif; ?>
                    </div>
                    <div class="info-post-content">
                        <h3><a href="" class="title-post smooth" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                    </div>
                </div>
            </div>
        <?php 
            endwhile;
            endif;
            wp_reset_postdata();
        ?>        
        </div>
    </div>
</section>

<?php get_footer(); ?>