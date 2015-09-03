<?php 
  $args = array(
    'post_type' => array('product'),
    'order'               => 'ASC',
    'orderby'             => 'date',
    'posts_per_page'         => 1000,
    'posts_per_archive_page' => 10,
  );
  
  $the_products = new WP_Query( $args );
  
  //print_r($the_products);
?>

<section class="plist">
  <div class="wrapper wrapper--wide">
    
    <?php while ($the_products->have_posts()) : $the_products->the_post(); ?>
      <div class="product" id="<?= $post->post_name ?>">
        <div class="cwrap">
          <div class="cleft">

            <h2 class="product__title"><?php the_title(); ?></h2>
            <div class="product__lead"><?php the_content(); ?></div>
            <div class="product__dark">
              <h3 class="product__subtitle"><?php _e('Felhasználás','bv') ?></h3>
              <?= wpautop(get_post_meta( $post->ID, 'felh' , true )); ?>
            </div>
            <div class="product__dark">
              <h3 class="product__subtitle"><?php _e('Árak','bv') ?></h3>
              <?= wpautop(get_post_meta( $post->ID, 'arak' , true )); ?>
            </div>

          </div>
          <?php $sideill = wp_get_attachment_image_src(get_post_meta( $post->ID, 'sideill_id', 'true' ), 'full', true); ?>
          <div class="cright">
            <figure class="cill">
              <img src="<?= $sideill[0]; ?>" alt="<?php the_title(); ?>">
            </figure>
          </div>
        </div>
  

      </div>
    <?php endwhile; ?>
  </div>
</section>

<?php wp_reset_query(); ?>