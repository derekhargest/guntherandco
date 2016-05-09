<div id="press">
  <div class="content-container">
    <?php

      $args = array('post_type' => 'press');

      $loop = new WP_Query( $args );

      while ( $loop->have_posts() ) : $loop->the_post();
      ?>
      <div class="press-item">
        <div class="content-title">
          <h2 class="entry-title">
            <?php the_title(); ?>
          </h2>
        </div>
        <div class="entry-content">
          <p><?php the_content(); ?></p>
          <a href="<?php echo the_field('article_link'); ?>" target="_blank" class="read-more">Read More <span>&rarr;</span></a>
        </div><!-- .entry-content -->
      </div>


<?php endwhile;?>

</div>
</div>
<?php wp_reset_query(); ?>
