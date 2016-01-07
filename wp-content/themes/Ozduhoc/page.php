
<?php get_header(); ?>

<div class="main" Id="main">
      		<section class="wrap-slider">
		      	<div class="container container-fix-padding">
		      		<div class="rrow row-fix-marginow">
		          		<div class="col-md-8 col-fix-padding partner-container">
		          			<div class="box-cate">
			          			<?php while ( have_posts() ) : the_post(); ?>
									<div class="entry-content clearfix">
	                                    <?php
	                                        the_content();
	                                    ?>
	                                </div>
								<?php endwhile; ?>
							</div>
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
</div>

<?php get_footer(); ?>