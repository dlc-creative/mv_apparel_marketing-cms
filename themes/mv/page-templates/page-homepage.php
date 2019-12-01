<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage Manic_Vanity
 * @since Manic Vanity 1.0
 */

get_header(); ?>

<div class="container">
	<div class="featured-text info-block">
		<?php if (get_field('statement')): ?>
			<h4 class="section-title"><?php echo the_field('statement'); ?></h4>
		<?php endif; ?>
	</div>
	<hr />
</div>
<!-- <div class="image-block">
	<?php if (get_field('home_banner')) : ?>
		<img src="<?php echo the_field('home_banner'); ?>" />
	<?php endif; ?>
</div> -->

<!-- <div class="touts">
	<?php if (get_field('touts')) { echo the_field('touts'); } ?>
</div> -->

<?php if (is_page('homepage')) { echo do_shortcode( '[soliloquy slug="homepage"]' ); } ?>

<!-- <div class="split-block light-gray-block">
	<div class="col-md-8">
		<?php if (get_field('placeholder_card')) : ?>
			<img src="<?php echo the_field('placeholder_card'); ?>" />
		<?php endif; ?>
	</div>
	<div class="col-md-4">
		<div class="image-stack">
			<?php if (get_field('gutter_card')) : ?>
				<img src="<?php echo the_field('gutter_card'); ?>" />
			<?php endif; ?>
			<?php if (get_field('gutter_card_two')) : ?>
				<img src="<?php echo the_field('gutter_card_two'); ?>" />
			<?php endif; ?>
		</div>
	</div>
</div> -->

<div class="container">
	<div class="grid">
		<div class="grid-section">
			<div class="grid-section-stack" style="background: url(<?php echo the_field('tout_card'); ?>);"></div>
		</div>
		<div class="grid-section">
			<div class="grid-section-stack" style="background: url(<?php echo the_field('gutter_card'); ?>);"></div>
			<div class="grid-section-stack" style="background: url(<?php echo the_field('gutter_card_two'); ?>);"></div>
		</div>
	</div>
</div>

<section id="collections">
	<h1>Holiday Specials</h1> <!-- #ManicMonday -->
	<div class="container">
	</div>
</section>

<section id="products">
	<h1>New Arrivals</h1>
	<div class="container">
		<?php echo do_shortcode('[products]'); ?>
	</div>
</section>

<section id="newsletter">
	<h1>Sign Up For Our Newsletter</h1>
	<div class="container">
		<?php $formID = ($_SERVER['SERVER_NAME'] == "localhost") ? "66" : "31"; ?>
		<?php echo do_shortcode('[wpforms id="'.$formID.'" title="false" description="false"]'); ?></div>
	</div>
</div>

<section id="socials">
	<h1>Follow Us</h1>
	<div class="tout-block">
		<!-- <div class="media">
			<div class="title"><h3>Facebook</h3></div>
			<div class="content"><?php echo do_shortcode('[custom-facebook-feed]'); ?></div>
		</div> -->
		<div class="media">
			<div class="title"><h3>Instagram</h3></div>
			<div class="content"><?php echo do_shortcode('[instagram-feed num=12 cols=4]'); ?></div>
		</div>
		<div class="media">
			<div class="title"><h3>Twitter</h3></div>
			<div class="content"><?php echo do_shortcode('[custom-twitter-feeds]'); ?></div>
		</div>
	</div>
</section>

<!-- <section id="blog">
	<h1>Our News</h1>
	<div class="container">
		<div class="split-block">
			<div class="blog-stack"> -->
				<?php
					//
				  // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					//
				  // $limit = 3;
					//
				  // $loop = query_posts( array('post_type' => 'post', 'paged' => $paged, 'posts_per_page' => $limit ) );
					//
					// while ( have_posts() ) : the_post();

				?>

				<!-- <div class="blog-post"> -->
				  <?php  //if ( has_post_thumbnail() ) : ?>
				    <!-- <div class="blog-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div> -->
				  <?php // endif; ?>
				  <!-- <div class="blog-section">
				    <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				    <p class="blog-post-meta"><?php echo the_date(); ?></p>
				    <div class="blog-content">
				      <?php the_excerpt(); ?>
				    </div>
				  </div> -->
				<!-- </div> -->


				<?php // endwhile; ?>

			<!-- </div>
		</div>
	</div>
</section> -->

<section id="store">
	<h1>Cleveland, OH &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; Las Vegas, NV</h1>
</section>

<?php
get_footer();
