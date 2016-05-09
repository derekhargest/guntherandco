<div id="principal-list" class="content-area principal-list">
  <div class="content-container">
    <h3>At Our Core</h3>
    <div class="principals">
        <?php
        $args = array('post_type' => 'staff', 'staff-level' => 'principal');
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
        ?>
        <div class="principal-item">
          <?php the_post_thumbnail( 'full' ); ?>
          <h4><?php the_title(); ?></h4>
          <span class="title"><?php echo the_field('staff_title'); ?></span>
          <p><?php the_content(); ?></p>
        </div>
      <?php endwhile;?>
    </div>
  </div>
</div>
