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
          <div class="cright">
            <figure class="cill">
              <img src="http://placehold.it/640x480/434343/?text=Illustration+I." alt="">
            </figure>
            <figure class="cill">
              <img src="http://placehold.it/640x640/434343/?text=Illustration+N." alt="">
            </figure>
          </div>
        </div>
      </div>
    
    </div>

  <?php endwhile; ?>
</main>
