<?php
/**
 * Template Name: Home Template
 */
?>

<main class="main" role="main">
  <?php while (have_posts()) : the_post(); ?>
  

   <?php get_template_part('templates/home', 'heroslide'); ?>

    
   <?php get_template_part('templates/product', 'navigation'); ?>

   
   <section class="aboutus bg-graylight"> 
      <div class="wrapper wrapper--wide">
        <figure class="aboutus__ill">
          <img src="<?= get_stylesheet_directory_uri();  ?>/dist/images/petri.png" alt="">
        </figure>
        <div class="aboutus__content">
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
          <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </div>
      </div>
  </section>
  





  <?php endwhile; ?>
</main>
