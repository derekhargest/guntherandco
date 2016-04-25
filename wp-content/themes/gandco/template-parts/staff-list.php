<div id="team-list" class="content-area team-list">
  <div class="content-container">
    <h3>The Team.</h3>
    <div class="team">
      <?php
      $args = array('post_type' => 'staff', 'staff-level' => 'staff');
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
      ?>
        <div class="team-item">
          <?php the_post_thumbnail( 'full' ); ?>
          <div class="overlay">
            <h4><?php the_title(); ?></h4>
            <span class="title"><?php echo the_field('staff_title'); ?></span>
          </div>
        </div>

    <?php endwhile;?>

    </div>
  </div>
</div>
