<?php if (get_field('page_main_banner')): ?>

	<div class="banner-wrapper" id="banner">
		<div class="banner main-banner">
				<img src="<?php the_field('page_main_banner'); ?>" alt="<?php the_title(); ?> Banner" title="<?php the_title(); ?> Banner" />
		</div>
	</div>

<?php endif; ?>
