<?php get_header(); ?>


    <!-- Slider -->
    <section class="wrap-slider">
        <div class="container container-fix-padding">
          <div class="row row-fix-margin">          
            <div class="col-md-8 col-fix-padding">
              			<?php
      				        if( is_active_sidebar( 'colormag_front_page_content_bottom_section' ) ) {
      				           if ( !dynamic_sidebar( 'colormag_front_page_content_bottom_section' ) ):
      				           endif;
      				        }
      				      ?>
            </div>
            <div class="col-md-4 col-fix-padding">
              			<?php
      				        if( is_active_sidebar( 'colormag_right_sidebar' ) ) {
      				           if ( !dynamic_sidebar( 'colormag_right_sidebar' ) ):
      				           endif;
      				        }
    				        ?>
            </div>
          </div>
        </div>
    </section> 
    <section>
      <div class="container">
        <div class="row">
              <?php
        				if( is_active_sidebar( 'category-list' ) ) {
        				  if ( !dynamic_sidebar( 'category-list' ) ):
        				    endif;
        				}
      				?>
        </div>
      </div>
    </section>


<?php get_footer(); ?>