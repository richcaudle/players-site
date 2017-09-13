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
        <span class="title">Next Production</span>
        <span class="follow">&gt;</span>
      </a>
      <div style="padding: 10px;">
        <p>For our next production we will be producing two one act plays running from Thursday 5th – Saturday 7th October 2017.</p>
        <p>'Growing old Gracefully' will open the evening, followed by 'Strictly Sex Factor (on Ice)'.</p>
        <p>It’s guaranteed to be an evening full of laughs, so <a href="http://www.tribehost.co.uk/tickets.php">book your tickets</a> now to avoid disappointment – the show is only running for three nights, so be quick!</p>
        <p>Tickets are just £8.00 and you can <a href="http://www.tribehost.co.uk/tickets.php">order them online</a>, or by calling the box office on 07867 884 985 (lines open 10am – 9pm).</p>
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
