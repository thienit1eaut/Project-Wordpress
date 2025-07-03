<?php 
/**
 * Adds New_Widget widget.
 */
class Wg_List_New_Home extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'wg_list_new_home', // Base ID
            __( 'Danh sách bài viết trang chủ', 'title_wg_list_new_home' ), // Name
            array( 'description' => __( 'Hiển thị Danh sách bài viết trang chủ', 'des_wg_list_new_home' ), ) // Args
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
        $my_post_home = get_posts( array(
            'post_type'   => 'post',
            'numberposts' => 6,
            'meta_query' => array(
                array(
                    'key'   => 'act-post',
                    'value' => 1,
                ),
                array(
                    'key'   => 'home-post',
                    'value' => 1,
                )
            )
        ) );
        if( $my_post_home ) {
    ?>
    <section class="section_all list-new-home">
        <div class="container">
            <?php 
                if ( ! empty( $instance['title'] ) ) {
                    echo '<p class="st-title-wrap">' . $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'] . '</p>';
                }
            ?>
            <div class="row">
            <?php foreach ( $my_post_home as $post ) : setup_postdata( $post ); ?>
                <div class="col col-sm-6">
                    <div class="item-new-home">
                        <div class="img-new">
                            <a href="<?php the_permalink(); ?>" class="c-img" title="<?php the_title(); ?>">
                                <?php the_image_post( 'large' ); ?>
                            </a>
                            <?php 
                                $categories = get_the_category(); 
                                if ( $categories && ! is_wp_error( $categories ) ) :
                                    $cats = array_slice($categories, 0, 2);
                            ?>
                            <div class="p-cat-info">
                                <?php foreach ( $cats as $cat ) : ?>
                                <a href="<?php echo get_category_link( $cat->term_id ); ?>" class="item-cat smooth" title="<?php echo $cat->name ?>"><?php echo $cat->name ?></a>
                                <?php endforeach; ?>    
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="info-post">
                            <h3><a href="<?php the_permalink(); ?>" class="title-post smooth" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                            <p class="p-footer"></p>
                        </div>
                    </div>
                </div>
                <?php
                    endforeach;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>       
<?php
        }
        echo $args['after_widget'];
    }
}

?>