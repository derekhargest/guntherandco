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
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

</div><!-- .content-area -->

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
					</header><!-- .entry-header -->
				</div>
				<div class="entry-content">
					<p><?php the_field('secondary_content'); ?></p>
				</div><!-- .entry-content -->
			</div>
		</div>
	<?php endif; ?>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
