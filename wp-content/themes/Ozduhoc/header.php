<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>
    <?php
        // Print the <title> tag based on what is being viewed.
        global $page, $paged;
        wp_title( '|', true, 'right' );

        // Add the blog name.
        bloginfo( 'name' );

        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) ) echo " | {$site_description}";

        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Trang %s', 'agilsun' ), max( $paged, $page ) );
    ?>
  </title>
  <?php wp_head(); ?>
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="fb:app_id" content="460242270813547" />
  <meta property="fb:admins" content="100003897150179"/>
  <link rel="icon" type="image/png" href="<?php echo bloginfo('stylesheet_directory'); ?>/favicon.png" />
  <link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/owl.theme.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/owl.transitions.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/superfish.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/datepicker.css">

  <link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/partner.css">  
  <link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/event.css">  
  <link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/main.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/home.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/single.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/contact.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/common.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/tour.css">
  <script src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/js/vendor/jquery-1.11.2.min.js"></script>
  <script src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  <script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>
</head>




<body>
  <div id="container">
    <header>
      <section class="container">
        <div class="wrap-logo">
          <a href="<?php echo get_bloginfo('url'); ?>">
            <img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/img/logo.png" />
          </a>
        </div>
        <div class="wrap-menu">
            <div class="menu-above">
              <div class="multi-language">
                <ul>
                  <li><a class="menu-main-special" href="<?php echo get_bloginfo('url'); ?>">About Us</a></li>
                  <li><a href="https://www.facebook.com/ozduhoc.com.au">Facebook</a></li>
                  <li><?php the_widget( 'WP_Widget_Search', $instance, $args ); ?></li>
                </ul>
              </div>
            </div>
          <div class="menu-main">
            <!-- menu reposive -->
            <div class="navbar-header">
              <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <!-- end menu reposive -->
            <!-- menu nav -->
            <nav id="bs-navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav sf-menu">
                <li><a>OZ 24/7</a></li>
                <li><a>Học Tập</a></li>
                <li><a>Đời Sống</a></li>
                <li><a>Giải Trí</a></li>
                <li><a>Việc Làm</a></li>
                <li><a>Luật Pháp</a></li>
                
                <li><a class="menu-main-special">Sự Kiện</a></li>
                <li><a href="<?php echo get_page_link(1294) ?>" class="menu-main-special">Đối Tác</a></li><!-- 1294 -->
              </ul>
            </nav>
            <!-- end menu nav -->
          </div>
        </div>
      </section>
      <section>
        <div class="slider-bar">
            <?php //echo do_shortcode('[metaslider id=1284 percentwidth=100]'); ?>
            <img class="img-slider-mar" style="width:100%;" src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/img/slider.jpg" />
        </div>
      </section>
    </header>
    <div class="main" Id="main">

