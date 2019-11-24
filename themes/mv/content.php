<div class="blog-post">
  <?php if (get_post_thumbnail_id($post->ID) !== "") : ?>
    <div class="blog-image" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>);"></div>
  <?php endif; ?>
  <div class="blog-section">
    <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="blog-post-meta"><?php echo the_date(); ?></p>
    <div class="blog-content">
      <?php the_excerpt(); ?>
    </div>
  </div>
</div><!-- /.blog-post -->
