<?php
/**
 * Template Name: Products Template
 */
?>
<main class="main" role="main">
  <?php while (have_posts()) : the_post(); ?>
  

    <?php get_template_part('templates/page', 'header'); ?>


    <div class="thecontent bg-graylight">
      
      <?php get_template_part('templates/product', 'navigation'); ?>
      <?php get_template_part('templates/product', 'list'); ?>

   
    </div>


  <?php endwhile; ?>
</main>
