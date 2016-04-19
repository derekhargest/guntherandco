<?php if (get_field('page_main_banner')): ?>

<div class="banner-wrapper" id="banner">
	<div class="banner main-banner">
			<img src="<?php the_field('page_main_banner'); ?>" alt="<?php the_title(); ?> Banner" title="<?php the_title(); ?> Banner" />
	</div>
</div>

<?php if ( is_front_page() ) : ?>
	<div class="banner-overlay home">
		<h3>Modern American.</h3>
		<h3>Globally Influenced.</h3>
		<h3>Locally Spun.</h3>
		<div class="overlay-logo">
			<img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/overlay-logo.png" alt="Gunther and Co. Logo" />
		</div>
	</div>
<?php else:?>
	<div class="banner-overlay">
		<h2><?php the_title(); ?></h2>
	</div>
<?php endif; ?>



<?php endif; ?>
