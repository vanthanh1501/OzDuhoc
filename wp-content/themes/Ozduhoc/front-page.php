<?php get_header(); ?>

<div class="main" Id="main">
    <!-- Slider -->
    <section class="wrap-slider">
      	<div class="container">
      		<div class="row">
          		<div class="col-md-8 recent-width">
          			<?php
				        if( is_active_sidebar( 'colormag_front_page_content_bottom_section' ) ) {
				           if ( !dynamic_sidebar( 'colormag_front_page_content_bottom_section' ) ):
				           endif;
				        }
				    ?>
          		</div>
          		<div class="col-md-4 event-width">
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
</div>


<?php get_footer(); ?>