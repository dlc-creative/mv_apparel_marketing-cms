<div id="blog-single" class="post-container">
  <div class="blog-post">
    <h2 class="blog-post-title"><?php the_title(); ?></h2>
    <br>
    <!-- <p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p> -->
  	<?php if ( has_post_thumbnail() ) {
  		the_post_thumbnail();
  	}
  	the_content();
  	?>
  </div><!-- /.blog-post -->
</div>