<?php
/*
Template Name: News
*/
 ?>
 <?php query_posts( 'posts_per_page=5' ); ?>
<?php get_template_part('templates/page', 'header'); ?>

<hr/>
<div class="row">
  <div class="col-xs-8">
    <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('templates/content', get_post_format()); ?>
    <?php endwhile; ?>
  </div>
  <div class="col-xs-4">
    <?php include roots_sidebar_path(); ?>
  </div>
</div>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>
