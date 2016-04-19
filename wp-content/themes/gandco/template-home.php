<?php
/* Template Name: Home Page Template */
/**
 * @package Gunther & Co
 * @subpackage gandco
 * @since 2016
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

    <?php if (get_field('page_main_banner')): ?>

    	<?php get_template_part( 'template-parts/content-banner' ); ?>

    <?php endif ?>

		<div id="content-block">
	    <div class="cta-section" id="cta">
	      <a href="#"><span>Make Reservations Today</span></a>
	    </div>

      <div class="container">

  		<?php
  		// Start the loop.
  		while ( have_posts() ) : the_post();

  			// Include the page content template.
  			get_template_part( 'template-parts/content', 'home' );

  			// End of the loop.
  		endwhile;
  		?>

    </div>

<?php if (get_field('page_main_banner_secondary')): ?>

	<?php get_template_part( 'template-parts/content-banner-secondary' ); ?>

<?php endif; ?>

	</main><!-- .site-main -->

</div>
</div>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
