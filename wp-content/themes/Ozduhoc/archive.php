<?php get_header(); ?>

<div class="main" Id="main">
      		<section class="wrap-slider">
		      	<div class="container">
		      		<div class="row">
		          		<div class="col-md-8 recent-width box-cate">
		          			<?php while ( have_posts() ) : the_post(); ?>
		          				<div class="clearfix">
				                    <header class="entry-header  post-content-title">
				                        <div class="article-header-single">
				                            <?php the_title(); ?>				                            
				                        </div>
				                        <div class="article-header-single-date">
				                            	<span>
				                            		<?php echo get_the_date(); ?>
				                            	</span>
				                            </div>
				                    </header>
				                </div>

								<div class="entry-content clearfix">
                                    <?php
                                        the_excerpt();
                                    ?>
                                </div>

							<?php endwhile; ?>

							
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
</div>

<?php get_footer(); ?>