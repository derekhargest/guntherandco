<?php if (get_field('page_main_banner_secondary')): ?>

	<div class="banner-wrapper">
		<div class="banner main-banner">
				<img src="<?php the_field('page_main_banner_secondary'); ?>" alt="<?php the_title(); ?> Banner" title="<?php the_title(); ?> Banner" />
		</div>
	</div>

<?php endif; ?>
