<?php use Roots\Sage\Titles; ?>
<header class="pageheader">
  <div class="wrapper wrapper--wide">
    <h1 class="pageheader__title"><?= Titles\title(); ?></h1>
    <?php 
      switch (get_the_id()) {
      case 6 :
        $featimg = get_stylesheet_directory_uri().'/dist/images/heroes/kut.png';
        break;

      case 13 :
        $featimg=get_stylesheet_directory_uri().'/dist/images/heroes/term.png';
        break;


      case 25:
        $featimg = get_stylesheet_directory_uri().'/dist/images/heroes/bv.png';
        break;        
      
      default:
        //$featimg = get_stylesheet_directory_uri().'/dist/images/heroes/hero_bird.png';
        $featimg='';
        break;
      }
    ?>

    <?php if ($featimg!='') : ?>
      <figure class="pageheader__figure">
        <img src="<?= $featimg ?>" alt="<?php the_title() ?>">
      </figure>
    <?php endif; ?>

  </div>
</header>
