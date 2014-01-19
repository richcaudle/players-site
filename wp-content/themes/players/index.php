<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/home', 'banner'); ?>
<?php query_posts('posts_per_page=1'); ?>
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <div class="row">
    <div class="col-xs-8 feature news">
      <a class="cta2" href="news">
        <span class="title">News</span>
        <span class="follow">&gt;</span>
      </a>
      <?php get_template_part('templates/content', get_post_format()); ?>
    </div>
    <div class="col-xs-4 feature twitter">
     <a class="cta2" href="http://twitter.com/LeckyPlayers">
        <span class="title">Twitter</span>
        <span class="follow">&gt;</span>
      </a>
     <?php dynamic_sidebar('sidebar-primary'); ?>
    </div>
  </div>
<?php endwhile; ?>
