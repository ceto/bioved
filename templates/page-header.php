<?php use Roots\Sage\Titles; ?>
<header class="pageheader">
  <div class="wrapper wrapper--wide">
    <h1 class="pageheader__title"><?= Titles\title(); ?></h1>
    <?php 
      switch (get_the_id()) {
      case 6 :
        $featimg = get_stylesheet_directory_uri().'/dist/images/hero_kutatasok.png';
        break;

      case 13 :
        $featimg=get_stylesheet_directory_uri().'/dist/images/hero_products.png';
        break;
        
      default:
        $featimg = get_stylesheet_directory_uri().'/dist/images/hero_bird.png';
        break;
      }
    ?>
    <figure class="pageheader__figure">
      <img src="<?= $featimg ?>" alt="<?php the_title() ?>">
    </figure>
  </div>
</header>
