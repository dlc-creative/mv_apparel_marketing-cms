<?php
/**
 * Template Name: Trend 4
 *
 * @package WordPress
 * @subpackage Manic_Vanity
 * @since Manic Vanity 1.0
 */

get_header(); ?>

<div class="info-block gold-block">
	<div class="container">
		<?php if (get_field('featured_text')): ?>
			<h4 class="section-title"><?php echo the_field('featured_text'); ?></h4>
		<?php endif; ?>
	</div>
</div>

<div class="split-block">
	<div class="col-md-6">
		<?php if (is_page('trend-4')) { echo do_shortcode( '[soliloquy slug="trend-four-slider-one"]' ); } ?>
	</div>
	<div class="col-md-6">
		<?php if (get_field('image_block')) : ?>
			<img src="<?php echo the_field('image_block'); ?>" />
		<?php endif; ?>
	</div>
</div>

<div class="info-block">
	<div class="container">
		<?php if (get_field('section_text')): ?>
			<h4 class="section-title"><?php echo the_field('section_text'); ?></h4>
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

<video controls poster="/wp-content/themes/daringreport/images/hiplet-vid.jpg">
	<source src="/wp-content/themes/daringreport/video/hiplet.mp4" type="video/mp4" />
</video>

<div class="info-block gold-block">
	<div class="container">
		<?php if (get_field('section_text_three')): ?>
			<h4 class="section-title"><?php echo the_field('section_text_three'); ?></h4>
		<?php endif; ?>
	</div>
</div>

<?php if (is_page('trend-4')) { echo do_shortcode( '[soliloquy slug="trend-four-slider-two"]' ); } ?>

<div class="info-block gold-block">
	<div class="container">
		<?php if (get_field('section_text_four')): ?>
			<h4 class="section-title"><?php echo the_field('section_text_four'); ?></h4>
		<?php endif; ?>
	</div>
</div>

<?php if (is_page('trend-4')) { echo do_shortcode( '[soliloquy slug="trend-four-slider-three"]' ); } ?>

<div class="info-block">
	<div class="container">
		<?php if (get_field('section_text_five')): ?>
			<h4 class="section-title"><?php echo the_field('section_text_five'); ?></h4>
		<?php endif; ?>
	</div>
</div>

<?php if (is_page('trend-4')) { echo do_shortcode( '[soliloquy slug="trend-four-slider-four"]' ); } ?>

<div class="info-block">
	<div class="container">
		<?php if (get_field('section_text_six')): ?>
			<h4 class="section-title"><?php echo the_field('section_text_six'); ?></h4>
		<?php endif; ?>
	</div>
</div>

<?php if (is_page('trend-4')) { echo do_shortcode( '[soliloquy slug="trend-four-slider-five"]' ); } ?>

<div class="options-block">
	<div class="options">
			<div class="option-title"><h1>why this matters? (truth)</h1></div>
			<div class="option-body">
				<p>As Hip Hop fans have obtained affluence and success, their tastes have evolved. Hip Hop has created an elevated version of itself - influencing everything from the runway to Boradway.</p>
			</div>
	</div>
	<div class="options">
			<div class="option-title"><h1>the opportunity (dare)</h1></div>
			<div class="option-body">
				<p>Both Cadillac and Hip Hop share the passion to constantly reinvent itself without forgetting its roots. Hip hop has always embraced Cadillac as a part of it's lineage and inconography. It's time we take this relationship to the next level and create a unique interpretation of what luxury can mean.</p>
			</div>
	</div>
</div>

<?php
get_footer();
