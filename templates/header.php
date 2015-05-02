<!--<header class="banner" role="banner">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php // bloginfo('name'); ?></a>
    <nav role="navigation">
      <?php
      /*if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;*/
      ?>
    </nav>
  </div>
</header>-->
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
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
          </div><!--/.nav-collapse -->
        <div class="subscription-box col-lg-4 col-xs-12 pull-right text-center">
          <h3><?php _e('Subscribe to Our Newsletter !','LLLG'); ?></h3>
          <form>
            <input type="text" placeholder="Enter Your Email Address" />
            <input type="submit" value="GO" />
          </form>
        </div>
        </div><!--/.container-fluid -->
      </nav>
  </header>
  <br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
</div>
