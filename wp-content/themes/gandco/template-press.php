<?php
/* Template Name: Press Template */
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
			// Start the loop.
			while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'template-parts/content', 'page-secondtitle' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

				// End of the loop.
			endwhile;
			?>

			<?php get_template_part( 'template-parts/press', 'list' ); ?>

		</div><!-- .content-area -->

	</main><!-- .site-main -->

</div>

<?php get_footer(); ?>
