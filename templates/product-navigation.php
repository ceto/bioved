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

<section class="pnav">
  <div class="wrapper wrapper--normal">
    
    <?php if (is_page_template('template-home.php')): ?>
       <h2 class="pnav__title"><?php _e('Termékeink','bv') ?></h2>
    <?php endif ?>
    
    <div class="pnav__wrapper">
      <?php while ($the_products->have_posts()) : $the_products->the_post(); ?>
        <a href="<?= get_permalink(13).'#'.$post->post_name; ?>" class="pnav__item">
          <?php if (is_page_template('template-home.php')): ?>
            <?php $the_thumb= wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
            <figure class="pnav__item__imgwrap">
              <img src="<?= $the_thumb; ?>" alt="<?php the_title(); ?>" class="pnav__item__img">
            </figure>
          <?php endif ?>
          <h3 class="pnav__item__title"><?php the_title(); ?>&nbsp;<i class="ion ion-chevron-down"></i></h3>
          <span class="pnav__item__subtitle">Lorep <strong>Biovéd</strong> dolor sit amet</span>
        </a>
      <?php endwhile; ?>
    </div>
    <?php if (!is_page_template('template-home.php')): ?>
      <img class="pnav__imgdivider" src="<?= get_stylesheet_directory_uri(); ?>/dist/images/napraforgomezo.jpg" alt="Termékeink">
    <?php endif ?>


  </div>
</section>

<?php wp_reset_query(); ?>