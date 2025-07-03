<?php 
/**
 * Adds New_Widget widget.
 */
class Wg_Post_Review_Slide extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'wg_post_review_slide', // Base ID
            __( 'Danh sách bài viết review', 'title_wg_post_review_slide' ), // Name
            array( 'description' => __( 'Hiển thị danh sách bài viết review', 'des_wg_post_review_slide' ), ) // Args
        );
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
        $title = !empty( $instance['title'] ) ? $instance['title'] : __( 'New title', 'text_domain' );
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( esc_attr( 'Title:' ) ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

        return $instance;
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        
        global $post;
        $my_post_reviews = get_posts( array(
            'post_type'   => 'post_reviews',
            'numberposts' => 10,
            'meta_key' => 'ord-post-review',
            'orderby' => 'meta_value_num', 
            'order' => 'DESC',
            'meta_query' => array(
                array(
                    'key'   => 'act-post-review',
                    'value' => 1,
                ),
                array(
                    'key'   => 'home-post-review',
                    'value' => 1,
                )
            )
        ) );
        if( $my_post_reviews ) {
    ?>
    <section class="section_all st-post-category">
        <div class="container">
            <?php 
                if ( ! empty( $instance['title'] ) ) {
                    echo '<p class="title_all">' . $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'] . '</p>';
                }
            ?>
            <div class="list-item-post-review">
                <div class="my-slide-post-review swiper swiper-container">
                    <div class="swiper-wrapper">
                    <?php foreach ( $my_post_reviews as $post ) : setup_postdata( $post ); ?>
                        <div class="swiper-slide">
                            <div class="item-post-review d-flex">
                                <div class="img-post-review">
                                    <a href="<?php the_permalink(); ?>" class="img-post" title="<?php the_title(); ?>">
                                        <?php the_image_post( 'large' ); ?>
                                    </a>
                                    <?php
                                        $terms = get_the_terms( get_the_ID(), 'post_reviews-category');
                                        if ( $terms && ! is_wp_error( $terms ) ) : 
                                            $terms = array_slice($terms, 0, 2); 
                                    ?>
                                    <div class="p-cat-info d-flex align-items-center justify-content-start">
                                        <?php
                                            foreach ( $terms as $term ) : ?>
                                                <a href="<?php echo get_term_link($term->slug, $term->taxonomy); ?>" class="item-cat smooth" title="<?php echo $term->name; ?>"><?php echo $term->name; ?></a>
                                        <?php 
                                            endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="info-post d-flex align-items-center">
                                    <div class="content-post">
                                        <h3 class="mb-2"><a href="<?php the_permalink(); ?>" class="title-post" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                                        <p class="by-date published"><?php rwmb_the_value( 'date-post-review' ) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        endforeach;
                        wp_reset_postdata();
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>       

<?php
        }
        echo $args['after_widget'];
    }
}

?>