<article class="post-single">
  <div class="post-info">
   <h2><a href="#"><?php the_title(); ?></a></h2>
    <h6 class="upper"><span>By </span><?php the_author_posts_link(); ?></a><span class="dot"></span><span><?php the_time('d F, Y'); ?></span><span class="dot"></span>
    <?php the_tags('Tags : ', ', ', ''); ?></h6>
  </div>

  <div class="post-media">
    <div class="media-audio">
        <?php  

    $url = esc_url( get_post_meta( get_the_ID(), 'audio-link', 1 ) );
    if( isset($url) ){
       echo wp_oembed_get( $url );
    }else{
      echo '<iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/51057943&amp;amp;color=ff5500&amp;amp;auto_play=false&amp;amp;hide_related=false&amp;amp;show_comments=true&amp;amp;show_user=true&amp;amp;show_reposts=false" frameborder="0"></iframe>';
    }
    ?>
     
    </div>
  </div>

  <div class="post-body">
    <?php the_content(); ?>
    <p><a href="<?php the_permalink(); ?>" class="btn btn-color btn-sm">Read More</a></p>
  </div>
</article>