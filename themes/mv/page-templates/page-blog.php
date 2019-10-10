<?php
/**
* Template Name: Blog
*
* @package WordPress
* @subpackage Manic_Vanity
* @since Manic Vanity 1.0
*/

get_header(); ?>

<div class="container page-list page-no-subtitle">
  <div class="col-md-12 blog-column-left">

    <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $limit = 12;
      $loop = query_posts( array('post_type' => 'post', 'paged' => $paged, 'posts_per_page' => $limit ) );
    ?>

    <div class="blog-list">
      <?php
        while ( have_posts() ) : the_post();
          get_template_part( 'content' );
        endwhile;
      ?>
    </div>

    <!-- <div class="btn-group" role="group"> -->
      <?php /* paginate(); */ ?>
    <!-- </div> -->

  </div>

<!--
  <div class="col-md-3 blog-column-right">
  	<?php dynamic_sidebar( 'blog' ); ?>
    <div class="widget">
      <h2 class="cat">Categories</h2>
      <?php
      $args = array(
        'orderby' => 'name',
        'parent' => 0
        );
      $categories = get_categories( $args );
      foreach ( $categories as $category ) {
          echo '<a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a><br />';
      }
      ?>
    </div>
  </div>
-->
</div>

<?php
get_footer();
