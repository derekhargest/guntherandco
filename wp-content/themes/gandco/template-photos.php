<?php
/* Template Name: Photos Template */
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

				<a href="http://www.opentable.com/single.aspx?rid=212593&restref=212593"><span>Make Reservations Today</span></a>

			</div>

			<?php

			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile;
			?>

			<div id="gallery">

				<div class="content-container">

					<?php // if ( is_active_sidebar( 'gallery_photos' ) ) : ?>

						<?php // dynamic_sidebar( 'gallery_photos' ); ?>

					<?php // endif; ?>

				<?php	echo do_shortcode( '[nggallery id=2]' ); ?>

					<div class="gallery-content">

					</div>

				</div>

			</div>

		</div>

	</main>

</div>

<?php get_footer(); ?>
