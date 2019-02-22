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
</div>

<div class="image-block">
	<?php if (get_field('home_banner')) : ?>
		<img src="<?php echo the_field('home_banner'); ?>" />
	<?php endif; ?>
</div>

<div class="touts">
	<?php if (get_field('touts')) { echo the_field('touts'); } ?>
</div>

<?php if (is_page('homepage')) { echo do_shortcode( '[soliloquy slug="homepage"]' ); } ?>

<div class="split-block light-gray-block">
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
</div>

<div class="image-tile">
<?php if (get_field('tout_card')) : ?>
	<img src="<?php echo the_field('tout_card'); ?>" />
<?php endif; ?>
</div>

<video controls poster="wp-content/themes/daringreport/images/Daring-30-40.jpg">
	<source src="wp-content/themes/daringreport/video/30.mp4" type="video/mp4" />
</video>

<div class="image-block">
	<div class="image-container">
		<?php if (get_field('daring_in-depth')) : ?>
			<img src="<?php echo the_field('daring_in-depth'); ?>" />
		<?php endif; ?>
	</div>
</div>

<div class="split-block">
	<div class="col-md-8">
		<div class="feature-video">
			<video controls poster="wp-content/themes/daringreport/images/Fiana-Still.jpg">
				<source src="wp-content/themes/daringreport/video/Fiana.mp4" type="video/mp4" />
			</video>
		</div>
	</div>
	<div class="col-md-4">
		<img src="wp-content/themes/daringreport/images/Daring-In-Depth-Fiana-Son3.jpg" />
	</div>
</div>

<div class="image-block">
	<div class="image-container">
		<?php if (get_field('daring_40-55')) : ?>
			<img src="<?php echo the_field('daring_40-55'); ?>" />
		<?php endif; ?>
	</div>
</div>

<video controls poster="wp-content/themes/daringreport/images/Daring-40-55.jpg">
	<source src="wp-content/themes/daringreport/video/40.mp4" type="video/mp4" />
</video>

<div class="tout-block">
	<div class="media col-md-4">
		<h3>Facebook</h3>
		<?php echo do_shortcode('[custom-facebook-feed]'); ?>
	</div>
	<div class="media col-md-4">
		<h3>Instagram</h3>
		<?php echo do_shortcode('[instagram-feed num=12 cols=4]'); ?>
	</div>
	<div class="media col-md-4">
		<h3>Twitter</h3>
		<?php echo do_shortcode('[custom-twitter-feeds]'); ?>
	</div>
</div>

<div class="split-block">
	<div class="col-md-4">
		<img src="wp-content/themes/daringreport/images/Daring-In-Depth-Eugene-Portrait.jpg" />
	</div>
	<div class="col-md-8">
		<div class="feature-video">
			<video controls poster="wp-content/themes/daringreport/images/Eugene-Still.jpg">
				<source src="wp-content/themes/daringreport/video/Eugene.mp4" type="video/mp4" />
			</video>
		</div>
	</div>
</div>

<div class="info-block">
	<?php echo do_shortcode('[wpforms id="66" title="false" description="false"]'); ?></div>
</div>

<?php
get_footer();
