<div class="blog-post">
  <div class="blog-image" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>);"></div>
  <div class="blog-section">
    <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="blog-post-meta"><?php echo the_date(); ?></p>
    <div class="blog-content">
      <?php the_excerpt(); ?>
    </div>
  </div>
</div><!-- /.blog-post -->
