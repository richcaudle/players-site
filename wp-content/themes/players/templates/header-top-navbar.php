<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <a id="logo" href="/" title="The Leckhampton Players"><img src="/images/logo.jpg" /></a>
    <div id="social">
      <a href="https://www.facebook.com/leckhamptonplayers/" title="Facebook"><img src="/images/facebook.png" alt="Facebook" /></a>
      <a href="https://twitter.com/LeckyPlayers" title="Twitter"><img src="/images/twitter.png" alt="Twitter" /></a>
    </div>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>
