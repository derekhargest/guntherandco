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

		<div id="content-block">

		<div class="cta-section">

			<a href="http://www.opentable.com/single.aspx?rid=212593&restref=212593"><span>Make Reservations Today</span></a>

		</div>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="contact-content-right">

			</div>

			<div class="content-container">

				<div class="contact-content">

					<header class="entry-header">

						<h2 class="location-title">Baltimore</h2>

					</header>

					<p><span>P:</span>443-869-6874</p>

					<p><span>E:</span><a href="mailto:info@eatatgunther.com">info@eatatgunther.com</a></p>

					<address>3650 Toone Street <br />Brewers Hill <br />Baltimore, MD 21224</address>

					<div class="directions-link">
						<span class="icon icon-location-icon"></span> <a href="https://maps.google.com?daddr=3650+Toone+Street+Baltimore+MD+21224" class="directions">Directions</a>
					</div>

					<!-- <p class="parking-info">Complimentary valet and street parking are available.</p> -->
					<div class="directions-content">

						<h3>From 95 S</h3>
						<p>Take Exit 57 (O’Donnell St)<br />
						Turn right onto O’Donnell St.<br />
						Make a left at light onto S. Conkling St.<br />
						Make first left onto Toone St.<br />
						Pass restaurant on left and park in lot on right</p>

						<h3>From 95 N</h3>
						<p>Take Exit 57 (O’Donnell St.)<br />
						Make left to follow signs to Boston St.<br />
						Turn right onto S. Conkling St.<br />
						Make first right onto Toone St.<br />
						Pass restaurant on left and park in lot on right</p>

						<h3>From Boston St. (Coming from downtown)</h3>
						<p>Make left on to S. Conkling St.<br />
						Make first right onto Toone St.<br />
						Pass restaurant on left and park in lot on right</p>

					</div>

					<img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/location-image.jpg" alt="<?php bloginfo( 'name' ); ?> Location">


				</div>

				<div class="entry-content">

					<?php

					while ( have_posts() ) : the_post();

						echo the_content();

					endwhile;
					?>

				</div>

			</div>

		</div>

	</div>

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>
