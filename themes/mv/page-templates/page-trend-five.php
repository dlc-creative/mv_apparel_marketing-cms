<?php
/**
 * Template Name: Trend 5
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

<div class="full-image">
	<?php if (get_field('full_image')) : ?>
		<img src="<?php echo the_field('full_image'); ?>" />
	<?php endif; ?>
</div>

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
		<?php if (get_field('section_text_two')): ?>
			<h4 class="section-title"><?php echo the_field('section_text_two'); ?></h4>
		<?php endif; ?>
	</div>
</div>

<div class="info-block gold-block">
	<div class="container">
		<?php if (get_field('section_text_three')): ?>
			<h4 class="section-title"><?php echo the_field('section_text_three'); ?></h4>
		<?php endif; ?>
	</div>
</div>

<div class="full-image">
	<?php if (get_field('full_image_two')) : ?>
		<img src="<?php echo the_field('full_image_two'); ?>" />
	<?php endif; ?>
</div>

<div class="info-block gold-block">
	<div class="container">
		<?php if (get_field('section_text_four')): ?>
			<h4 class="section-title"><?php echo the_field('section_text_four'); ?></h4>
		<?php endif; ?>
	</div>
</div>

<div class="options-block">
	<div class="options">
			<div class="option-title"><h1>why this matters? (truth)</h1></div>
			<div class="option-body">
				<p>Standing out with confidence and being boldly unafraid has the public taking notice. Our consumers are looking to take ownership of their identity through many forms of expression - including luxury. Having the means to now show "where I'm from </p>
			</div>
	</div>
	<div class="options">
			<div class="option-title"><h1>the opportunity (dare)</h1></div>
			<div class="option-body">
				<p>While entrepreneurs are the rock stars of this generation, it is our shared responsibility to help set a path for the next generation. Let's prove our ability to co-conspire by helping invest in the rock stars of tomorrow. We can take the stance that everyone should have equal opportunity to Dare Greatly. As an American brand with an American spirit, we can help increase prosperity throughout the STEM field.</p>
			</div>
	</div>
</div>

<!-- Slider -->

<?php
get_footer();
