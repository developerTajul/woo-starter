<article class="post-single">
  <div class="post-info">
    <h2><a href="#"><?php the_title(); ?></a></h2>
    <h6 class="upper"><span>By </span><?php the_author_posts_link(); ?></a><span class="dot"></span><span><?php the_time('d F, Y'); ?></span><span class="dot"></span>
    <?php the_tags('Tags : ', ', ', ''); ?></h6>
  </div>
  <div class="post-body">
    <blockquote class="italic">
      <?php the_content(); ?>
    </blockquote>
  </div>
</article>