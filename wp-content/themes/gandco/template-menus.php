<?php
/* Template Name: Menu Page Template */
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

			<div id="menus">

				<div class="content-container">

					<h3>Our Menus</h3>

					<a href="#" class="menu-link">Brunch Menu<span class="icon icon-download"></span></a>

					<a href="#" class="menu-link last">Drinks Menu<span class="icon icon-download"></span></a>

					<a href="#" class="menu-link">Lunch Menu<span class="icon icon-download"></span></a>

					<a href="#" class="menu-link last">Dinner Menu<span class="icon icon-download"></span></a>

				</div>

			</div>

		</div><!-- .content-area -->

	</main><!-- .site-main -->

</div>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
