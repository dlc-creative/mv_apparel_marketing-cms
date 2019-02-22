<?php
/**
* Template Name: Blog
**/

get_header(); ?>

<div class="container page-list page-no-subtitle">
<div class="col-md-9 blog-column-left">

<?php

  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  $limit = 6;

  $loop = query_posts( array('post_type' => 'post', 'paged' => $paged, 'posts_per_page' => $limit ) );

?>

<?php while ( have_posts() ) : the_post();?>

                        <?php get_template_part( 'content' ); ?>

                    <?php endwhile; ?>
<div class="btn-group" role="group">
<!-- <?php paginate(); ?> -->
</div>

				</div>


			<div class="col-md-3 blog-column-right">


				<!-- <?php dynamic_sidebar( 'blog' ); ?> -->
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


<?php get_footer(); ?>
