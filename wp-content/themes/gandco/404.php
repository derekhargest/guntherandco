<?php
/*
 * @package Gunther & Co
 * @subpackage gandco
 * @since 2016
 */

get_header(); ?>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">

		<?php get_template_part( 'template-parts/content-banner' ); ?>

		<div id="content-block">

		<div class="cta-section">

			<a href="http://www.opentable.com/single.aspx?rid=212593&restref=212593"><span>Make Reservations Today</span></a>

		</div>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	<div class="content-container">
    		<h1 class="entry-title">
    			<?php the_title(); ?>
    		</h1>
    		<div class="content-title">
    			<header class="entry-header">
    				<h2 class="entry-title">
    					Oops! That page can&rsquo;t be found.
    				</h2>
    			</header><!-- .entry-header -->
    		</div>



    		<div class="entry-content">
    			<p>It looks like nothing was found at this location.</p>
    		</div><!-- .entry-content -->

    	</div>

</div>

</main>

</div>
<?php get_footer(); ?>
