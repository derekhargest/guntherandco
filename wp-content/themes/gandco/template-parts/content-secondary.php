<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="content-container">
		<div class="content-title">
			<header class="entry-header">
				<h2 class="entry-title">
					<?php the_field('content_title_1'); ?>
				</h2>
			</header><!-- .entry-header -->
		</div>



		<div class="entry-content">
			<?php
			the_content();

			?>
		</div><!-- .entry-content -->

	</div>



</article><!-- #post-## -->
