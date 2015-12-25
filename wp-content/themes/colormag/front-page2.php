<?php
/**
 * Template to show the front page.
 *
 * @package ThemeGrill
 * @subpackage ColorMag
 * @since ColorMag 1.0
 */
?>

<?php get_header(); ?>

   <div class="front-page-top-section clearfix">
      <div class="widget_slider_area">
         <?php
         if( is_active_sidebar( 'colormag_front_page_slider_area' ) ) {
            if ( !dynamic_sidebar( 'colormag_front_page_slider_area' ) ):
            endif;
         }
         ?>
      </div>

      <div class="widget_beside_slider">
         <?php
         if( is_active_sidebar( 'colormag_front_page_area_beside_slider' ) ) {
            if ( !dynamic_sidebar( 'colormag_front_page_area_beside_slider' ) ):
            endif;
         }
         ?>
      </div>
   </div>
   <div class="main-content-section clearfix">
      <div id="primary">
         <div id="content" class="clearfix">

         <div class="clearfix"></div>
            <?php
            if( is_active_sidebar( 'colormag_front_page_content_bottom_section' ) ) {
               if ( !dynamic_sidebar( 'colormag_front_page_content_bottom_section' ) ):
               endif;
            }
            ?>
         </div>
      </div>
      <?php colormag_sidebar_select(); ?>
   </div>
   <div id="catelist">
      <?php
         if( is_active_sidebar( 'category-list' ) ) {
            if ( !dynamic_sidebar( 'category-list' ) ):
            endif;
         }
      ?>
   </div>
<?php get_footer(); ?>