<?php
/*
 * @package Gunther & Co
 * @subpackage gandco
 * @since 2016
 */

get_header(); ?>

<?php if (get_field('page_main_banner')): ?>

	<?php get_template_part( 'template-parts/content-banner' ); ?>

<?php endif ?>

<div class="cta-section">

	<a href="#"><span>Make Reservations Today</span></a>

</div>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">

		<?php

		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile;
		?>

	</main>

</div>

<?php if (get_field('page_main_banner_secondary')): ?>

	<?php get_template_part( 'template-parts/content-banner-secondary' ); ?>

<?php endif; ?>

	<?php if (get_field('secondary_content')): ?>

		<div id="secondary" class="content-area secondary">

			<div class="content-container secondary">

				<div class="content-title">

					<header class="entry-header">

						<h1 class="entry-title">

							<?php the_field('secondary_content_title'); ?>

						</h1>

					</header>

				</div>

				<div class="entry-content">

					<p><?php the_field('secondary_content'); ?></p>

				</div>

			</div>

		</div>

		<?php endif; ?>
		
<?php get_footer(); ?>
