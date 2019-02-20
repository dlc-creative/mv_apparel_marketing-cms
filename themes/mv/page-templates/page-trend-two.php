<?php
/**
 * Template Name: Trend 2
 *
 * @package WordPress
 * @subpackage Manic_Vanity
 * @since Manic Vanity 1.0
 */

get_header(); ?>

<div class="container">
	<div class="featured-text info-block">
		<?php if (get_field('featured_text')): ?>
			<h4 class="section-title"><?php echo the_field('featured_text'); ?></h4>
		<?php endif; ?>
	</div>
</div>

<div class="split-block">
	<div class="col-md-6">
		<?php if (get_field('image_block')) : ?>
			<img src="<?php echo the_field('image_block'); ?>" />
		<?php endif; ?>
	</div>
	<div class="col-md-6">
		<?php if (get_field('image_block_two')) : ?>
			<img src="<?php echo the_field('image_block_two'); ?>" />
		<?php endif; ?>
	</div>
</div>

<div class="info-block gold-block">
	<div class="container">
		<?php if (get_field('section_text')): ?>
			<h4 class="section-title"><?php echo the_field('section_text'); ?></h4>
		<?php endif; ?>
	</div>
</div>

<?php if (is_page('trend-2')) { echo do_shortcode('[soliloquy slug="trend-two-slider-one"]'); } ?>

<div class="info-block ">
	<div class="container">
		<?php if (get_field('section_text_two')): ?>
			<h4 class="section-title"><?php echo the_field('section_text_two'); ?></h4>
		<?php endif; ?>
	</div>
</div>

<div class="full-image">
	<?php if (get_field('full_image')) : ?>
		<img src="<?php echo the_field('full_image'); ?>" />
	<?php endif; ?>
</div>

<div class="info-block ">
	<div class="container">
		<?php if (get_field('section_text_three')): ?>
			<h4 class="section-title"><?php echo the_field('section_text_three'); ?></h4>
		<?php endif; ?>
	</div>
</div>

<video controls poster="/wp-content/themes/daringreport/images/chef-still.jpg">
	<source src="/wp-content/themes/daringreport/video/chef.mp4" type="video/mp4" />
</video>

<div class="split-block">
	<div class="col-md-6">
		<?php if (get_field('image_block_three')) : ?>
			<img src="<?php echo the_field('image_block_three'); ?>" />
		<?php endif; ?>
	</div>
	<div class="col-md-6">
		<?php if (get_field('image_block_four')) : ?>
			<img src="<?php echo the_field('image_block_four'); ?>" />
		<?php endif; ?>
	</div>
</div>

<div class="info-block">
	<div class="container">
		<?php if (get_field('section_text_four')): ?>
			<h4 class="section-title"><?php echo the_field('section_text_four'); ?></h4>
		<?php endif; ?>
	</div>
</div>

<?php if (is_page('trend-2')) { echo do_shortcode('[soliloquy slug="trend-two-slider-two"]'); } ?>

<div class="options-block">
	<div class="options">
			<div class="option-title"><h1>why this matters? (truth)</h1></div>
			<div class="option-body">
				<p>People of color are discovering a newfound appreciation for the traditional foods, music, and vistas through immersive luxury experiences.</p>
			</div>
	</div>
	<div class="options">
			<div class="option-title"><h1>the opportunity (dare)</h1></div>
			<div class="option-body">
				<p>There is no question that Cadillac is fighting to shift convention on its head to mix things up and be unexpected. Whether our consumers want user not, their preconceived notions must be jostled. It is our responsibility to take them to a place that might feels familiar but like nothing they've ever experienced.</p>
			</div>
	</div>
</div>

<?php
get_footer();
