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
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<?php while (have_posts()) : the_post(); ?>
  <div class="row">
    <div class="col-sm-8 feature news">
      <a class="cta2" href="news">
        <span class="title">News</span>
        <span class="follow">&gt;</span>
      </a>
      <?php get_template_part('templates/content', get_post_format()); ?>
    </div>
    <!-- <div class="col-sm-4 feature twitter">
     <a class="cta2" href="http://twitter.com/LeckyPlayers">
        <span class="title">Twitter</span>
        <span class="follow">&gt;</span>
      </a>
     // <?php dynamic_sidebar('sidebar-primary'); ?>
    </div> -->
      
<div class="col-md-4 feature facebook">
    <a class="cta2" href="http://www.facebook.com/leckhamptonplayers">
        <span class="title">Facebook</span>
        <span class="follow">&gt;</span>
    </a>
    <header>
        <h3 class="entry-title"></h3>
    </header>
    <div align="center">
        <div class="fb-like-box" data-href="https://www.facebook.com/leckhamptonplayers" data-width="100%" data-height="410" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true">
        </div>
  </div>
</div>
</div>

<?php endwhile; ?>
