<?php
/* Template Name: Contact Template */
/**
 * @package Gunther & Co
 * @subpackage gandco
 * @since 2016
 */

get_header(); ?>

<div id="primary" class="content-area">

	<main id="main" class="site-main contact" role="main">

		<?php	get_template_part( 'template-parts/content-banner-map' ); ?>

		<div class="cta-section">

			<a href="#"><span>Make Reservations Today</span></a>

		</div>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="contact-content-right">

			</div>

			<div class="content-container">

				<div class="contact-content">

					<header class="entry-header">

						<h2 class="location-title">Baltimore</h2>

					</header><!-- .entry-header -->

					<p><span>P:</span>443-869-6874</p>

					<p><span>E:</span><a href="mailto:info@eatatgunther.com">info@eatatgunther.com</a></p>

					<address>3650 Toone Street <br />Brewers Hill <br />Baltimore, MD 21224</address>

					<div class="directions-link">
						<span class="icon icon-location-icon"></span> <a href="#" class="directions">Directions</a>
					</div>

					<p class="parking-info">Complimentary valet and street parking are available. More text here if neccessary getting into parking specifics.</p>

					<img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/location-image.jpg" alt="<?php bloginfo( 'name' ); ?> Location">

				</div>

				<div class="entry-content">

					<?php

					// Start the loop.
					while ( have_posts() ) : the_post();
						// Include the page content template.
						echo the_content();
						// End of the loop.
					endwhile;
					?>

				</div>

			</div>

		</div>

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>
