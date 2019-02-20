<?php get_header() ?>

  <div class="container">
    <div class="main">
      <?php if (have_posts()) : ?>
      <?php while(have_posts()): the_post(); ?>
      <h2>
        <?php the_title(); ?>
      </h2>
      <div class="meta">
        Created by
        <?php the_author(); ?> on
        <?php the_time('F j, Y'); ?>
      </div>
      <?php the_content() ?>
      <?php endwhile ?>
      <?php else : ?>
      <?php echo wpautop('Sorry, No Posts Found'); ?>
      <?php endif; ?>
    </div>
  </div>

  <?php get_footer() ?>