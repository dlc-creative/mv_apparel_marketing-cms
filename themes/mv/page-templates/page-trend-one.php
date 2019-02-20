<?php
/**
 * Template Name: Trend 1
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

<div class="info-block gold-block">
	<div class="container">
		<?php if (get_field('section_text_two')): ?>
			<h4 class="section-title"><?php echo the_field('section_text_two'); ?></h4>
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
		<?php if (get_field('section_text_three')): ?>
			<h4 class="section-title"><?php echo the_field('section_text_three'); ?></h4>
		<?php endif; ?>
	</div>
</div>

<div class="full-image">
	<?php if (get_field('full_image_three')) : ?>
		<img src="<?php echo the_field('full_image_three'); ?>" />
	<?php endif; ?>
</div>

<div class="options-block">
	<div class="options">
			<div class="option-title"><h1>why this matters? (truth)</h1></div>
			<div class="option-body">
				<p>Due to African history and culture being omitted from much of the American history books, Black people yearn for opportunities to learn about and celebrate their vibrant African roots.</p>
				<p>As this African-inspired art movement comes to a tipping point in 2016, it sets the stage for a bold presence in 2017.</p>
			</div>
	</div>
	<div class="options">
			<div class="option-title"><h1>the opportunity (dare)</h1></div>
			<div class="option-body">
				<p>Cadillac has the opportunity of aligning itself with those who are changing perceptions. By acknowledging the diverse part of those paving the path forward, our multicultural luxury consumers will embrace Dare Greatly's authenticity.</p>
				<p>Cadillac can expand its foundation in the art world and align with the trends that expanding the culture of our consumers past and future.</p>
			</div>
	</div>
</div>

<?php
get_footer();
