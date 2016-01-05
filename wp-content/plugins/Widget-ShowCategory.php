<?php
/*
Plugin Name: Show A category
Plugin URI: http://google.com
Description: Hien thi category...
Author: Van Thanh
Version: 1.0
Author URI: http://google.com
*/
/*
 * Khởi tạo widget item
 */
add_action( 'widgets_init', 'create_showcategory_widget' );
function create_showcategory_widget() {
        register_widget('ShowACategory_Widget');
}

/**
 * Tạo class ShowACategory_Widget
 */
class ShowACategory_Widget extends WP_Widget {
 
        /**
         * Thiết lập widget: đặt tên, base ID
         */
        function __construct() {
                parent::__construct(
                        'ShowACategory_Widget',
                        'Show a category',
                        array('description' => 'Hiển thị một category được chọn')
                );
        }
 
        /**
         * Tạo form option cho widget
         */
        function form( $instance ) {
                $default = array(
                        'title' => 'Show A Category',
                        'Category' => '',
                        'num_of_Post' => '3'
                );
                $instance = wp_parse_args($instance,$default);

                include( $tribe_ecp->pluginPath . '/show_category_theme.php' );
        }
 
        /**
         * save widget form
         */
 
        function update( $new_instance, $old_instance ) {
                $instance = $old_instance;

                /* Strip tags (if needed) and update the widget settings. */
                $instance['title']              = $new_instance['title'] ;
                $instance['Category']           = $new_instance['Category'];
                $instance['num_of_Post']           = $new_instance['num_of_Post'];

                return $instance;
        }
 
        /**
         * Show widget
         */
 
        function widget( $args, $instance ) {
             extract($args);
             $num_of_Post = $instance['num_of_Post'] ;   
             $category = $instance['Category'] ;   
             $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Category' );
             echo $before_widget;
             $category_id = get_cat_ID($category);
             query_posts("orderby=date&order=DESC&post_type=post&post_status=publish&showposts=-1&cat={$category_id}");
             $count = 0;?>
            <div class="col-md-4 col-sm-6 item col-md-4-fix">
             <article id="post-<?php the_ID(); ?>" class="box-cate" <?php post_class(); ?>>
                <div class="cate-name-title-box">
                    <h3 class="article-header header-cate">
                        <?php echo $title; ?>
                    </h3>
                </div>
                 <?php while (have_posts()) : the_post(); 
                    $count++; if($count <= $num_of_Post) : ?>
                    <?php if($count==1) : ?>                        
                           <?php if ( has_post_thumbnail() ) { ?>
                                <div class="featured-image align-feature-image">
                                    <a class="img-in-Box" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( 'colormag-featured-image' ); ?></a>
                                </div>
                            <?php } ?>
                            <div class="article-content clearfix">
                                <header class="entry-header">
                                    <h2 class="entry-title">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php the_title(); ?></a>
                                    </h2>
                                </header>
                                <div class="entry-content clearfix">
                                    <?php
                                        the_excerpt();
                                    ?>
                                </div>

                            </div>
                            <div class="lastest-post-cate-box">
                            <?php else: ?>
                                <p class="p-lastest-post">
                                    <span><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/img/hand.png" /></span>
                                    <span><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php the_title(); ?></a></span>
                                </p>
                            <?php endif; ?>
                <?php
                        
                    endif;
                 endwhile;
                 ?>
                            </div>
            </article>
            </div>
             <?php
             echo $after_widget;
        }
 
}