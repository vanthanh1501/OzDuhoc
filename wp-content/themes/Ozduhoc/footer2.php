<?php wp_footer(); ?> 
    </div>
    <footer>

      <section class="main-footer">
      <!--support online-->
      <div class="support-online">
        <p>Hỗ trợ trực tuyến</p>
        <div class="menu-above skype-online hiden">
          <div class="hotline">
                  <p><?php 
                    $category = get_category_by_slug('tour'); 
                    echo $category->name;
                  ?></p>
                  <div id="SkypeButton_Call_skype_tour">
                    <script type="text/javascript">
                      Skype.ui({
                        "name": "dropdown",
                        "element": "SkypeButton_Call_skype_tour",
                        "participants": ["<?php the_field('skype_tour', '20'); ?>"],
                        "imageSize": 24
                      });
                    </script>
                  </div>
          </div>

          <div class="hotline">
            <p><?php 
              $category = get_category_by_slug('study_abroad'); 
              echo $category->name;
            ?></p>
            <div id="SkypeButton_Call_skype_study_abroad">
              <script type="text/javascript">
                Skype.ui({
                  "name": "dropdown",
                  "element": "SkypeButton_Call_skype_study_abroad",
                  "participants": ["<?php the_field('skype_study_abroad', '20'); ?>"],
                  "imageSize": 24
                });
              </script>
            </div>
          </div>
      </div>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="logo-footer">
                <img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/img/logo.png" alt="sai-gon-world" />
              </div>
              <div class="row back-link">
                <?php do_shortcode('[sub_menu]'); ?>
              </div>
              <div class="about">
                <p>SAI GON WORD © 2015</p>
                <p>ALL RIGHTS RESERVED</p>
              </div>
            </div>

            <div class="col-md-4 send-mail">
              <?php dynamic_sidebar('send-mail-letter'); ?>
            </div>

            <div class="col-md-4 fan-page">
              <div class="fb-page" data-href="https://www.facebook.com/dvvisa.apec" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
            </div>
          </div>
        </div>
      </section>
<!--       <section class="bottom-footer">
        Developed by Agilsun
      </section> -->
    </footer>
    <!-- /container -->
    <script src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/js/vendor/bootstrap-datepicker.js"></script>    
    <script src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/js/vendor/hoverIntent.js"></script>
    <script src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/js/vendor/superfish.js"></script>
    <script src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/js/main.js"></script>
    <!-- initialise Superfish -->
    <script>
    jQuery(document).ready(function() {
      jQuery('ul.sf-menu').superfish();
    });
    </script>
    <div id="fb-root"></div>
    <script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>    
  </div>
  <!-- /container -->
</body>

</html>