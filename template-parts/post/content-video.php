<article class="post-single">
  <div class="post-info">
    <h2><a href="#"><?php the_title(); ?></a></h2>
    <h6 class="upper"><span>By </span><?php the_author_posts_link(); ?></a><span class="dot"></span><span><?php the_time('d F, Y'); ?></span><span class="dot"></span>
    <?php the_tags('Tags : ', ', ', ''); ?></h6>
  </div>
  <div class="post-media">
    <div class="media-video">
    <?php  

    $url = esc_url( get_post_meta( get_the_ID(), 'video-link', 1 ) );
    if( isset($url) ){
       echo wp_oembed_get( $url );
    }else{
      echo '<iframe src="https://www.youtube.com/embed/rrT6v5sOwJg" frameborder="0"></iframe>';
    }
    ?>
      
    </div>
  </div>
  <div class="post-body">
    <?php the_content(); ?>
    <p><a href="<?php the_permalink(); ?>" class="btn btn-color btn-sm">Read More</a></p>
  </div>
</article>