<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <nav class="collapse navbar-collapse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
      </div>
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
      <div id="social">
        <a href="https://www.facebook.com/groups/2390514148/" title="Facebook"><img src="/images/facebook.png" alt="Facebook" /></a>
        <a href="https://twitter.com/LeckyPlayers" title="Twitter"><img src="/images/twitter.png" alt="Twitter" /></a>
      </div>
    </nav>
  </div>
</header>
