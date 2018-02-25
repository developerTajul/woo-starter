<article class="post-single">
  <div class="post-info" style="margin-bottom:0px">
    <h2><a href="#"><?php the_title(); ?></a></h2>
    <h6 class="upper"><span>By </span><?php the_author_posts_link(); ?></a><span class="dot"></span><span><?php the_time('d F, Y'); ?></span><span class="dot"></span>
    <?php the_tags('Tags : ', ', ', ''); ?></h6>
  </div>

  <div class="post-body">
    <?php the_content(); ?>
    <p><a href="<?php the_permalink(); ?>" class="btn btn-color btn-sm">Read More</a></p>
  </div>
</article>