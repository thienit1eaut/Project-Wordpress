<?php 
/**
 * Adds New_Widget widget.
 */
class Wg_List_Post_Category_Slide extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'wg_list_post_category_slide', // Base ID
            __( 'Slide bài viết danh mục', 'title_wg_list_post_category_slide' ), // Name
            array( 'description' => __( 'Hiển thị Slide bài viết danh mục', 'des_wg_list_post_category_slide' ), ) // Args
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
        
        $terms = get_terms( array(
            'taxonomy'   => 'category',
            'hide_empty' => true,
            'meta_query' => array(
                array(
                    'key'   => 'home-post-category',
                    'value' => 1,
                ),
            )
        ) );

        if( !empty( $terms ) && !is_wp_error( $terms ) ) {

            global $post;
            foreach ( $terms as $term ) {
    ?>
    <section class="section_all st-post-category">
        <div class="container">
            <p class="st-title-wrap"><?php echo $term->name; ?></p>
            <?php 
                $my_postss = get_posts( array(
                    'post_type'   => 'post',
                    'category'       => $term->term_id,
                    'numberposts' => 20,
                    'meta_query' => array(
                        array(
                            'key'   => 'act-post',
                            'value' => 1,
                        ),
                    )
                ) );

                if( $my_postss ) { 
            ?>
            <div class="list-product-hot">
                <div class="my-slide-post-cate swiper swiper-container">
                    <div class="swiper-wrapper">
                    <?php foreach ( $my_postss as $post ) : setup_postdata( $post ); ?>
                        <div class="swiper-slide">
                            <div class="item-product-hot">
                                <a href="<?php the_permalink(); ?>" class="img-produt c-img" title="<?php the_title(); ?>">
                                    <?php the_image_post( 'large' ); ?>
                                </a>
                                <h3 class="title-pro">
                                    <a href="<?php the_permalink(); ?>" class="smooth" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                </h3>
                            </div>
                        </div>
                        <?php
                        endforeach;
                        wp_reset_postdata();
                    ?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>

<?php
            }
        }
        echo $args['after_widget'];
    }
}

?>