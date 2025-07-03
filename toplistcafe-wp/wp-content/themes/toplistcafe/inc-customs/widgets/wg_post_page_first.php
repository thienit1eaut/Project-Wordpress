<?php 
/**
 * Adds New_Widget widget.
 */
class Wg_Post_Page_First extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'wg_post_page_first', // Base ID
            __( 'Danh sách bài viết nổi bật', 'title_wg_post_page_first' ), // Name
            array( 'description' => __( 'Hiển thị danh sách bài viết nổi bật', 'des_wg_post_page_first' ), ) // Args
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
        // if ( ! empty( $instance['title'] ) ) {
        //     echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        // }
        global $post;
        $myposthot = get_posts( array(
            'post_type'   => 'post',
            'numberposts' => 3,
            'meta_key' => 'ord-post',
            'orderby' => 'meta_value_num', 
            'order' => 'DESC',
            'meta_query' => array(
                array(
                    'key'   => 'act-post',
                    'value' => 1,
                ),
                array(
                    'key'   => 'hot-post',
                    'value' => 1,
                )
            )
        ) );
        if( $myposthot ) {
    ?>
    <section class="section_all st-post-first">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php 
                        $post = array_shift($myposthot);
                        setup_postdata( $post );
                    ?>
                    <div class="item-post-big">
                        <a href="<?php the_permalink(); ?>" class="img-post-big c-img" title="<?php the_title(); ?>">
                            <?php the_image_post( 'large' ); ?>
                        </a>
                        <div class="info-post-big">
                            <?php 
                                $cate_first = get_the_category();
                                if ( ! empty( $cate_first ) ) {
                                    $cate_first = array_slice($cate_first, 0, 1);
                                    echo '<h2 class="mb-1"><a href="' . esc_url( get_category_link( $cate_first[0]->term_id ) ) . '" class="cate-post smooth" title="'.esc_html( $cate_first[0]->name ).'">' . esc_html( $cate_first[0]->name ) . '</a></h2>';
                                }
                            ?>
                            <h3><a href="<?php the_permalink(); ?>" class="title-post smooth" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                        </div>
                    </div>
                    <?php wp_reset_postdata(); ?>
                </div>
                <div class="col-lg-4">
                    <div class="list-post-small">
                    <?php foreach ( $myposthot as $post ) : setup_postdata( $post ); ?>
                        <div class="item-post-big">
                            <a href="<?php the_permalink(); ?>" class="img-post-big c-img" title="<?php the_title(); ?>">
                                <?php the_image_post( 'medium_large' ); ?>
                            </a>
                            <div class="info-post-big">
                                <?php 
                                    $cate_small = get_the_category();
                                    if ( ! empty( $cate_small ) ) {
                                        $cate_small = array_slice($cate_small, 0, 1);
                                        echo '<h2 class="mb-1"><a href="' . esc_url( get_category_link( $cate_small[0]->term_id ) ) . '" class="cate-post smooth" title="'.esc_html( $cate_small[0]->name ).'">' . esc_html( $cate_small[0]->name ) . '</a></h2>';
                                    }
                                ?>
                                <h3><a href="<?php the_permalink(); ?>" class="title-post smooth" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
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