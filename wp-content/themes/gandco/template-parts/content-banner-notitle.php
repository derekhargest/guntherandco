<?php if (get_field('page_main_banner')): ?>

	<div class="banner-wrapper" id="banner">
		<div class="banner main-banner">
				<img src="<?php the_field('page_main_banner'); ?>" alt="<?php the_title(); ?> Banner" title="<?php the_title(); ?> Banner" />
		</div>

	</div>

	<div class="banner-overlay-notitle" data-stellar-ratio="0.25">
		<div class="overlay-logo">
			<img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/overlay-logo-white.png" alt="Gunther and Co. Logo" class="white" />
			<img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/overlay-logo.png" alt="Gunther and Co. Logo" class="dark" />
		</div>
	</div>

<?php endif; ?>
