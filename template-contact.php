<?php
/**
 * Template Name: Contact Template
 */
?>
<main class="main" role="main">
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    

    <div class="thecontent bg-graylight">
      
      <div class="wrapper wrapper--narrow">
        <div class="contact__content">
          <figure class="contact__figure">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kapcsolat_head.jpg" alt="">        
          </figure>
       
          <?php the_content(); ?>
       
          <!-- Contact Form -->                            
          <form class="form contact-form" id="contact_form" method="post" action="<?php echo get_template_directory_uri(); ?>/contact_me.php">

                      
            <!-- Name -->
            <div class="form-group">
                <input type="text" name="name" id="name" placeholder="név" pattern=".{3,100}" required>
            </div>
            
            <!-- Email -->
            <div class="form-group">
                <input type="email" name="email" id="email" placeholder="e-mail cím" pattern=".{5,100}" required>
            </div>
            
            <div class="form-group">
              <input type="tel" name="tel" id="tel" placeholder="telefonszám" pattern=".{5,100}" required>
            </div>
            
            <div class="form-group">
              <textarea name="text" id="text" pattern=".{5,100}" rows="8" placeholder="üzenet szövege" maxlength="400"></textarea>
            </div>
        
            <button class="btn" id="submit_btn">Elküld&nbsp;&nbsp;<i class="ion ion-ios-arrow-right"></i></button>
            
              
            <div id="result"></div>
          </form>
          <!-- End Contact Form -->
      
        </div>
            
      </div>
    </div>

  <?php endwhile; ?>
</main>




