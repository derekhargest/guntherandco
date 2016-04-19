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
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
		</div>



		<div class="entry-content">
			<?php
			the_content();

			?>
			<a href="<?php echo home_url(); ?>/contact-us" class="read-more home">Contact Us <span>&rarr;</span></a>
		</div><!-- .entry-content -->

	</div>

</article><!-- #post-## -->
