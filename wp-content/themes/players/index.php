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
        <span class="title">Next production</span>
        <span class="follow">&gt;</span>
      </a>
      <div style="padding: 10px;">
        <p>Our next production is our annual pantomime of Snow White and the Seven Dwarfs.</p>
        <p><strong>The show runs from Saturday 28<sup>th</sup> January until Saturday 4<sup>th</sup> February 2017, and tickets are only £8 for adults and £5 for children!</strong></p>
        <p>Join Chuckles, Edna &amp; friends at Leckhampton Village Hall as they try to overcome the wicked Queen Avarice and save Snow White.</p>
        <p>You can book your tickets online using the link below, email <a href="mailto:tickets@leckhamptonplayers.com">tickets@leckhamptonplayers.com</a>, or call the box office on 07867 884 985 (lines open 10am - 9pm daily).</p>
        <br>
        <p><a href="http://www.tribehost.co.uk/snow-white.php"><strong>Book online now -&gt;</strong></a></p>
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
