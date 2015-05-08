<!-- Facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Facebook -->
<div class="wrapper container">
  <header>
  <h1 class="outline"><?php bloginfo('name'); ?></h1>
    <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img class="img-responsive" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" src="<?= get_template_directory_uri(); ?>/dist/images/logo.png"></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
          <?php
      


 wp_nav_menu( array(
                'theme_location'    => 'primary_navigation',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );










      
      ?>
          </div>
        <div class="subscription-box col-lg-4 col-xs-12 pull-right text-center">
          <h3><?php _e('Subscribe to Our Newsletter !','LLLG'); ?></h3>
          <form>
            <input type="text" placeholder="Enter Your Email Address" />
            <input type="submit" value="GO" />
          </form>
        </div>
        </div>
      </nav>
  </header>
  