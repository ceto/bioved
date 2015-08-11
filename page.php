<main class="main" role="main">
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    

    <div class="thecontent bg-graylight">
      
      <div class="wrapper wrapper--wide">
        <div class="cwrap">
          <div class="cleft">
            <?php the_content(); ?>
                  <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
          </div>
          <?php $sideill = wp_get_attachment_image_src(get_post_meta( $post->ID, 'sideill_id', 'true' ), 'full', true); ?>
          <div class="cright">
            <figure class="cill">
              <img src="<?= $sideill[0];  ?>" alt="<?php the_title(); ?>">
            </figure>
          </div>
        </div>
      </div>
    
    </div>

  <?php endwhile; ?>
</main>
