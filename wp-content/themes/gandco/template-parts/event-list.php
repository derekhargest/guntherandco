<div id="events">

	<div class="content-container">

<?php

  $args = array('post_type' => 'event');

  $loop = new WP_Query( $args );

  while ( $loop->have_posts() ) : $loop->the_post();
  ?>

  <div class="event-item">

    <div class="event-image">
      <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/event-image.jpg" alt="<?php the_title(); ?> event image" />
    </div>

    <div class="event-content">

      <h3><?php the_title(); ?></h3>

      <p class="description"><?php the_excerpt(); ?></p>

      <div class="event-info">

        <?php
        $date = DateTime::createFromFormat('Ymd', get_field('date'));
          ?>

        <span class="label">Date:</span><p class="date"><?php echo the_field('date') ?></p>

      </div>

      <div class="event-info">

        <span class="label">Time:</span><p class="date"><?php echo the_field('start_time'); ?> - <?php echo the_field('end_time'); ?></p>

      </div>

    </div>

  </div>


<?php endwhile;?>
<?php wp_reset_query(); ?>

</div>
</div>
