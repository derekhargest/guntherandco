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

				<a href="http://www.opentable.com/single.aspx?rid=212593&restref=212593"><span>Make Reservations Today</span></a>

			</div>

			<?php

			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile;

			?>

			<div id="menus">

				<div class="content-container">

					<h3>Our Menus</h3>

					<?php if (get_field('brunch_menu')): ?>

						<a href="<?php echo the_field('brunch_menu'); ?>" class="menu-link">Brunch Menu<span class="icon icon-download"></span></a>

					<?php endif; ?>

					<?php if (get_field('drinks_menu')): ?>

						<a href="<?php echo the_field('drinks_menu'); ?>" class="menu-link last">Drinks Menu<span class="icon icon-download"></span></a>

					<?php endif; ?>

					<?php if (get_field('lunch_menu')): ?>

						<a href="<?php echo the_field('lunch_menu'); ?>" class="menu-link">Lunch Menu<span class="icon icon-download"></span></a>

					<?php endif; ?>

					<?php if (get_field('dinner_menu')): ?>

						<a href="<?php echo the_field('dinner_menu'); ?>" class="menu-link last">Dinner Menu<span class="icon icon-download"></span></a>

					<?php endif; ?>

				</div>

			</div>

		</div><!-- .content-area -->

	</main><!-- .site-main -->

</div>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
