<?php
/**
 * Template Name: Download Template
 */
?>

<main class="main" role="main">
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    

    <div class="thecontent bg-graylight">
      
      <div class="wrapper wrapper--narrow">
        <div class="dl__content">
       
          <?php the_content(); ?>
        
          <section class="dl">
          <div class="dlitem dlitem--head">
            <span>&nbsp;</span>
            <span>formátum</span>
            <span>méret</span>
            <span>&nbsp;</span>
          </div>
            <?php if ( get_post_meta( get_the_ID(), 'dls', true ) ) {
              $dls = get_post_meta( get_the_ID(), 'dls', true );
              foreach ( (array) $dls as $key => $entry ) { ?>
                <div class="dlitem">
                  <span class="dlitem__name"><?= $entry['name'] ?></span>
                  <span class="dlitem__format"><?= substr($entry['file'], strrpos($entry['file'],'.' ) ) ?></span>
                  <span class="dlitem__size"><?= bv_getSize(get_attached_file( $entry['file_id'] )); ?></span>
                  <span class="dlitem__dl"><a target="_blank" href="<?= $entry['file'] ?>" class="btn btn--bordered">Letöltés&nbsp;<i class="ion ion-chevron-down"></i></a></span>
                </div>

            <?php } } ?>
          </section>

      
        </div>
            
      </div>
    </div>

  <?php endwhile; ?>
</main>


