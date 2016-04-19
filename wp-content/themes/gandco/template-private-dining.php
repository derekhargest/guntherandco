<?php
/* Template Name: Private Dining Template */
/**
 * @package Gunther & Co
 * @subpackage gandco
 * @since 2016
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<?php if (get_field('page_main_banner')): ?>

		<?php get_template_part( 'template-parts/content-banner-notitle' ); ?>

	<?php endif ?>

	<div id="content-block">

		<div class="cta-section">
			<a href="#"><span>Make Reservations Today</span></a>
		</div>

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// End of the loop.
		endwhile;
		?>

			<div id="gallery">
				<div class="content-container">

					<?php if ( is_active_sidebar( 'gallery_private_dining' ) ) : ?>
						<?php dynamic_sidebar( 'gallery_private_dining' ); ?>
					<?php endif; ?>

					<div class="gallery-content">
						<p>
							<a href="#">Contact us</a> today to discuss your <br />special Private Dining event at <br /> Gunther &amp; Co.
						</p>
					</div>

				</div>

			</div>

		</main><!-- .site-main -->

	</div>

</div>

<?php get_footer(); ?>
