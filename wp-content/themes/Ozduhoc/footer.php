</div><!-- .inner-wrap -->
	</div><!-- #main -->
  

	<?php do_action( 'colormag_before_footer' ); ?>
		<footer id="colophon" class="clearfix">
			<div id="footer">
				<div class="container">
		          	<div class="row">
		            	<div class="col-md-4">
		            		<hr class="hr-footer">
		             		<ul>
								<li class="footer-title"><a class="text-color-a">Trang chủ</a></li>
								<li class="footer-title"><a class="text-color-a">Giới thiệu</a></li>
								<li class="register-receive-email">
									<span class="text-color-a">Đăng ký nhận tin</span><br />
									<?php the_widget( 'es_widget_register', $instance, $args ); ?> 
								</li>
								<li>
									<a href="http://www.dmca.com/Protection/Status.aspx?ID=3bf53e84-66fc-4ec0-8a09-cce6243546c2" title="DMCA.com Protection Status" class="dmca-badge">
										<img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/img/dmca_protected.png" alt="DMCA.com Protection Status">
									</a>
								</li>
								<li><a class="text-color-category">Term of use</a></li>
							</ul>
		            	</div>

		            	<div class="col-md-4">
		              		<hr class="hr-footer">
		              		<div class="footer-title">
								<strong class="text-color-a">Danh mục</strong>
							</div>
							<ul>
								<?php 
									$args = array(
									  'orderby' => 'name',
									  'parent' => 0
									  );
									$categories = get_categories( $args ); ?> 
								<?php foreach ($categories as $category) { ?>
									<li><a class="text-color-category" href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a></li>
								<?php } ?>
							</ul>
		           		</div>

		            	<div class="col-md-4">
		              		<hr class="hr-footer">
		              		<div class="footer-title">
								<strong class="text-color-a">Liên Hệ</strong>
							</div>
							<label class="text-color-category">Phone 1: +61 478 066 001</label><br/>
							<label class="text-color-category">Phone 2: +61 415 909 388</label><br/>
							<label  class="text-color-category">Email : contact@ozduhoc.com.au</label><br/>
							<div class="fb-page" 
								data-href="https://www.facebook.com/ozduhoc.com.au" 
								data-width="100%" 
								data-small-header="false" 
								data-adapt-container-width="true" 
								data-hide-cover="false" 
								data-show-facepile="false">
								<div class="fb-xfbml-parse-ignore">
									<blockquote cite="https://www.facebook.com/AgilsunLtd">
										<a href="https://www.facebook.com/AgilsunLtd">Agilsun</a>
									</blockquote>
								</div>
							</div>
		            	</div>
		          	</div>
		        </div>
			</div>
			<div class="footer-last">
				<div class="copyright">Developed by Agilsun</div>
			</div>
		</footer>
		<a href="#masthead" id="scroll-up"><i class="fa fa-chevron-up"></i></a>
	</div><!-- #page -->
	<?php wp_footer(); ?>
</body>
</html>