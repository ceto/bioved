<header class="hero home__hero">
    <div id="owl-home" class="owl-carousel owl-theme">
      
      <div class="item">

        <div class="hero__item wrapper wrapper--wide" style="background-image:url(<?= get_stylesheet_directory_uri()  ?>/dist/images/heroes/bv.png)">
          <div class="hero__text">
            <h3 class="hero__text__title"><?php _e('<span>Biológiai</span> védelem','bv'); ?></h3>
            <p class="hero__text__paragr">
              <?php _e('Lorem Ipsum, <strong>poin gravida</strong> nibh vel velit auctor aliquet, <strong>aenean sollicitudin,</strong> lorem sagittis sem evolit.','bv') ?>
              <a class="hero__text__more" href="<?= get_the_permalink(25); ?>">
                <?php _e('Tovább','bv') ?>&nbsp;<i class="ion ion-ios-arrow-right"></i>
              </a>
            </p>
          </div>
        </div>

      </div>


      <div class="item item--flip">

        <div class="hero__item wrapper wrapper--wide" style="background-image:url('<?= get_stylesheet_directory_uri()  ?>/dist/images/hero_kutatasok.png')">
          <div class="hero__text">
            <h3 class="hero__text__title"><?php _e('<span>Kutatásaink,</span> kísérleteink</h3>','bv'); ?>
            <p class="hero__text__paragr">
              <?php _e('Ipsum dolores, <strong>poin gravida</strong> nibh vel velit auctor aliquet, <strong>aenean sollicitudin,</strong> lorem sagittis sem evolit.','bv'); ?>
              <a class="hero__text__more" href="<?= get_the_permalink(6); ?>">
                <?php _e('Tovább','bv') ?>&nbsp;<i class="ion ion-ios-arrow-right"></i>
              </a>
            </p>
          </div>
        </div>

      </div>

      
      <div class="item">
        <div class="hero__item wrapper wrapper--wide" style="background-image: url('<?= get_stylesheet_directory_uri()  ?>/dist/images/hero_products.png')">
          <div class="hero__text">
            <h3 class="hero__text__title"><?php _e('<span>Termékeink,</span> gyártás&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;','bv'); ?></h3>
            <p class="hero__text__paragr">
              <?php _e('<strong>Poin gravida</strong> nibh vel velit auctor aliquet, <strong>aenean sollicitudin,</strong> lorem sagittis sem evolit.','bv'); ?>
              <a class="hero__text__more" href="<?= get_the_permalink(13); ?>">
                <?php _e('Tovább','bv') ?>&nbsp;<i class="ion ion-ios-arrow-right"></i>
              </a>
            </p>
          </div>
        </div>
      </div>



    </div>

</header>