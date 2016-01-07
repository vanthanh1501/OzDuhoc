<?php get_header(); ?>

<div class="main" Id="main">
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
	                                        the_content();
	                                    ?>
	                                </div>

								<?php endwhile; ?>

								<?php
									//Lấy danh sách các thẻ tag từ bài viết
									$tags = wp_get_post_tags($post->ID);
									//Nếu tags tồn tại thì.
									if ($tags) {
										$tag_ids = array();
										//Lấy giá trị id của tag
										foreach($tags as $each_tag){
											$tag_ids[] = $each_tag->term_id;
											//WP_Query arguments.
											$args = array(
												'tag__in' => $tag_ids, //Một mảng của tag IDs sẽ được đưa vào.
												'post__not_in' => array($post->ID), //Một mảng của ID bài viết sẽ được loại trừ.
												'orderby'=> 'rand', //Hiển thị bài viết ngẫu nhiên
												'showposts' => 10, // Số lượng bài viết mà bạn muốn hiển thị
												//'caller_get_posts' => 1 // sử dụng nếu bạn sử dụng wordpress phiên bản  < 3.1 ***
												'ignore_sticky_posts' => 1 //*** sử dụng cho phiên bản wordpress >= 3.1 ***
											);
											$query = new WP_Query($args);
											//Nếu có những bài viết liên quan thì
											if( $query->have_posts() ) {
												echo '<div>';
												echo '<h3>Related Article(s):</h3><ol>'; //*** Thay đổi tiêu đề theo ý bạn***
												while ($query->have_posts()) {
													$query->the_post();
													?>
													<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to: <?php the_title_attribute(); ?>">
													<?php the_title(); ?></a></li>
													<?php
												}
												echo '</ol>';
												echo '</div>';	
											}
										}
									}
									// Hủy chuỗi query trước đó
									wp_reset_query();
								?>
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