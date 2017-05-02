<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/home', 'banner'); ?>
<?php query_posts('posts_per_page=1'); ?>
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
<?php endif; ?>

<!-- FACEBOOK LIKE BOX JS -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <div class="row">
    <div class="col-sm-6 feature news">
      <a class="cta2" href="http://www.leckhamptonplayers.com">
        <span class="title">Next Production - Tickets Now On Sale!</span>
        <span class="follow">&gt;</span>
      </a>
      <div style="padding: 10px;">
        <p>Our next production will be 'Old Time Music Hall' and runs from 30th May - 3rd June 2017.</p>
        <p>Tickets are now on sale and cost just £10 (including ploughmans supper), a licenced bar is also available.</p>
        <p>Call the box office now on 07867 884 985 (lines open 10am - 9pm daily) or <a href="http://www.tribehost.co.uk/tickets.php">book your tickets online</a> before it's too late!</p>
        <p><strong><a href="http://www.tribehost.co.uk/tickets.php">Book Tickets &rarr;</a></strong></p>
      </div>
    </div>
    <!-- <div class="col-sm-4 feature twitter">
     <a class="cta2" href="http://twitter.com/LeckyPlayers">
        <span class="title">Twitter</span>
        <span class="follow">&gt;</span>
      </a>
     // <?php dynamic_sidebar('sidebar-primary'); ?>
    </div> -->
      
<div class="col-sm-6 feature facebook">
    <a class="cta2" href="http://www.facebook.com/leckhamptonplayers">
        <span class="title">Facebook</span>
        <span class="follow">&gt;</span>
    </a>
    <?php get_template_part('templates/facebook-like-box'); ?>
</div>
</div>
