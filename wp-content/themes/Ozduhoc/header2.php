<?php
/**
 * Theme Header Section for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main" class="clearfix"> <div class="inner-wrap">
 *
 * @package ThemeGrill
 * @subpackage ColorMag
 * @since ColorMag 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="fb:app_id" content="460242270813547" />
<meta property="fb:admins" content="100003897150179"/>
<link rel="icon" href="<?php echo bloginfo('stylesheet_directory'); ?>/favicon.png" type="image/x-icon" />
<link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/owl.carousel.css">
<link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/owl.theme.css">
<link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/owl.transitions.css">
<link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/superfish.css">
<link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/datepicker.css">
  
<link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/main.css">
<link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/home.css">
<link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/single.css">
<link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/contact.css">
<link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/common.css">
<link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/tour.css">
<script src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/js/vendor/jquery-1.11.2.min.js"></script>
<script src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>
<?php
/**
 * This hook is important for wordpress plugins and other many things
 */
wp_head();
?>
</head>

<!-- Facebook like box -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=460242270813547";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- End Facebook like box -->


<body <?php body_class(); ?>>
<?php	do_action( 'colormag_before' ); ?>
<div id="page" class="hfeed site">
	<?php do_action( 'colormag_before_header' ); ?>
	<header id="masthead" class="site-header clearfix">
		<div id="header-text-nav-container" class="clearfix">
			<?php if (get_theme_mod('colormag_header_image_position', 'position_two') == 'position_one') { colormag_render_header_image(); } ?>
			<div class="inner-wrap">
				<div id="header-text-nav-wrap" class="clearfix">
					<div id="header-left-section">
						<?php
						if((get_theme_mod('colormag_header_logo_placement', 'header_text_only') == 'show_both' || get_theme_mod('colormag_header_logo_placement', 'header_text_only') == 'header_logo_only') && get_theme_mod('colormag_logo', '') != '') {
						?>
							<div id="header-logo-image">

								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url(get_theme_mod('colormag_logo')); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
							</div><!-- #header-logo-image -->
						<?php
						}
                  $screen_reader = '';
                  if ( get_theme_mod( 'colormag_header_logo_placement', 'header_text_only' ) == 'header_logo_only' || (get_theme_mod( 'colormag_header_logo_placement', 'header_text_only' ) == 'disable' )) {
                     $screen_reader = 'screen-reader-text';
                  }
						?>
						<div id="header-text" class="<?php echo $screen_reader; ?>">
                     <?php if ( is_front_page() || is_home() ) : ?>
   							<h1 id="site-title">
   								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
   							</h1>
                     <?php else : ?>
                        <h3 id="site-title">
                           <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                        </h3>
                     <?php endif; ?>
						</div><!-- #header-text -->
					</div><!-- #header-left-section -->
					<div id="header-right-section">
						<div class="up-right-header">
							<ul class="list-inline">
								<li>
									<a href="#">About Us</a>
								</li>
								<li>
									<a href="#">Facebook</a>
								</li>
								<li>
									<?php the_widget( 'WP_Widget_Search', $instance, $args ); ?> 
								</li>
							</ul>
						</div>
						<div>
							<nav id="site-navigation" class="main-navigation clearfix" role="navigation">
								<div class="inner-wrap clearfix">
									<?php
							   if ( get_theme_mod( 'colormag_home_icon_display', 0 ) == 1 ) {
								  if ( is_front_page() ) {
									 $home_icon_class = 'home-icon front_page_on';
								  } else {
									 $home_icon_class = 'home-icon';
								  }
								  ?>
								  <div class="<?php echo $home_icon_class; ?>">
									 <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><i class="fa fa-home"></i></a>
								  </div>
								  <?php
							   }
							   ?>
							   <h4 class="menu-toggle"></h4>
							   <?php
							   if ( has_nav_menu( 'primary' ) ) {
								  wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu-primary-container', 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>' ) );
							   }
									else {
										wp_page_menu();
									}
									?>
							   <?php if ( get_theme_mod( 'colormag_random_post_in_menu', 0 ) == 1 ) { ?>
								  <?php colormag_random_post(); ?>
							   <?php } ?>
							   <?php if ( get_theme_mod( 'colormag_search_icon_in_menu', 0 ) == 1 ) { ?>
								  <i class="fa fa-search search-top"></i>
								  <div class="search-form-top">
									 <?php get_search_form(); ?>
								  </div>
							   <?php } ?>
								</div>
							</nav>
						</div>
			    	</div><!-- #header-right-section -->

			   </div><!-- #header-text-nav-wrap -->

			</div><!-- .inner-wrap -->
			<div>
				<?php echo do_shortcode('[metaslider id=1284 percentwidth=100]'); ?>
			</div>

			<?php if( get_theme_mod( 'colormag_header_image_position', 'position_two' ) == 'position_two' ) { colormag_render_header_image(); } ?>

			

		</div><!-- #header-text-nav-container -->

		<?php if( get_theme_mod( 'colormag_header_image_position', 'position_two' ) == 'position_three' ) { colormag_render_header_image(); } ?>

	</header>
	<?php do_action( 'colormag_after_header' ); ?>
	<?php do_action( 'colormag_before_main' ); ?>
	<div id="main" class="clearfix">
		<div class="inner-wrap clearfix">