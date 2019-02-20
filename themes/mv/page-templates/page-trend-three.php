<?php
/**
 * Template Name: Trend 3
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
		<?php if (is_page('trend-3')) { echo do_shortcode( '[soliloquy slug="trend-three-slider-one"]' ); } ?>
	</div>
	<div class="col-md-6">
		<?php if (is_page('trend-3')) { echo do_shortcode( '[soliloquy slug="trend-three-slider-two"]' ); } ?>
	</div>
</div>

<div class="info-block">
	<div class="container">
		<?php if (get_field('section_text')): ?>
			<h4 class="section-title"><?php echo the_field('section_text'); ?></h4>
		<?php endif; ?>
	</div>
</div>

<video controls poster="/wp-content/themes/daringreport/images/Nicole.jpg">
	<source src="/wp-content/themes/daringreport/video/nicole.mp4" type="video/mp4" />
</video>

<div class="info-block">
	<div class="container">
		<?php if (get_field('section_text_two')): ?>
			<h4 class="section-title"><?php echo the_field('section_text_two'); ?></h4>
		<?php endif; ?>
	</div>
</div>

<?php if (is_page('trend-3')) { echo do_shortcode( '[soliloquy slug="trend-three-slider-three"]' ); } ?>

<div class="split-block">
	<div class="col-md-6">
		<?php if (get_field('image_block')) : ?>
			<img src="<?php echo the_field('image_block'); ?>" />
		<?php endif; ?>
	</div>
	<div class="col-md-6">
		<?php if (is_page('trend-3')) { echo do_shortcode( '[soliloquy slug="trend-three-slider-four"]' ); } ?>
	</div>
</div>

<div class="info-block">
	<div class="container">
		<?php if (get_field('section_text_three')): ?>
			<h4 class="section-title"><?php echo the_field('section_text_three'); ?></h4>
		<?php endif; ?>
	</div>
</div>

<video controls poster="/wp-content/themes/daringreport/images/slack.jpg">
	<source src="/wp-content/themes/daringreport/video/slack.mp4" type="video/mp4" />
</video>

<div class="info-block">
	<div class="container">
		<?php if (get_field('section_text_four')): ?>
			<h4 class="section-title"><?php echo the_field('section_text_four'); ?></h4>
		<?php endif; ?>
	</div>
</div>

<div class="split-block">
	<div class="col-md-6">
		<?php if (get_field('image_block_two')) : ?>
			<img src="<?php echo the_field('image_block_two'); ?>" />
		<?php endif; ?>
	</div>
	<div class="col-md-6">
		<?php if (is_page('trend-3')) { echo do_shortcode( '[soliloquy slug="trend-three-slider-five"]' ); } ?>
	</div>
</div>

<div class="info-block">
	<div class="container">
		<?php if (get_field('section_text_five')): ?>
			<h4 class="section-title"><?php echo the_field('section_text_five'); ?></h4>
		<?php endif; ?>
	</div>
</div>

<div class="options-block">
	<div class="options">
			<div class="option-title"><h1>why this matters? (truth)</h1></div>
			<div class="option-body">
				<p>The STEM fields has shown to be fertile ground for creating a new affluent class of black and Latino entrepreneurs. The handful of organizations and individuals are setting the bar to teach and inspire tomorrow's innovators.</p>
			</div>
	</div>
	<div class="options">
			<div class="option-title"><h1>helping cadillac (dare)</h1></div>
			<div class="option-body">
				<p>While entrepreneurs are the rock stars of this generation, it is our shared responsibility to help set a path for the next generation. Let's prove our ability to co-conspire by helping invest in the rock stars of tomorrow. We can take the stance that everyone should have equal opportunity to Dare Greatly. As an American brand with an American spirit, we can help increase prosperity throughout the STEM field.</p>
			</div>
	</div>
</div>

<?php
get_footer();
