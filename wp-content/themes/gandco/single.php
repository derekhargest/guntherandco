<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package Default Wordpress
 * @subpackage Default Wordpress
 * @since 2016
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

			<div class="container">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'single' );

			endwhile;
			?>
		</div>

	</main>


</div>

<?php get_footer(); ?>
