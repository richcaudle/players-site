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
        <p>Mirror mirror on the wall, which is the fairest panto of all?</p>
        <p>Well it's sure to be the Leckhampton Player's production of Snow White and the Seven Dwarfs with spectacular cast, music, sets and costumes.</p>
        <p>Join Chuckles, Edna & friends at Leckhampton Village Hall as they try to overcome the wicked Queen Avarice and save Snow White.</p>
        <p>This year's pantomime runs from <strong>Saturday 28th January to Saturday 4th February 2017</strong>.</p>
        <p>Ticket information coming soon!</p>
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
