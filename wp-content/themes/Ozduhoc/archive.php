<?php get_header(); ?>


      		<section class="wrap-slider">
		      	<div class="container container-fix-padding">
		      		<div class="row row-fix-margin">
		          		<div class="col-md-8 col-fix-padding partner-container">
		          			<div class="box-cate">
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

							<div class="paging-align">
								<?php
								// Previous/next page navigation.
								the_posts_pagination( array(
									'prev_text'          => __( 'Previous page', 'ozduhoc' ),
									'next_text'          => __( 'Next page', 'ozduhoc' ),
									'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ozduhoc' ) . ' </span>',
								) );
								?>
								</div>
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