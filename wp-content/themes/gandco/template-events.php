<?php
/* Template Name: Events Page Template */
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

			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile;
			?>

			<?php get_template_part( 'template-parts/event', 'list' ); ?>

		</main>

	</div>

</div>

<?php get_footer(); ?>
