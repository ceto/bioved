<header class="navbar">
  <div class="wrapper wrapper--wide">
    <a class="navbar__brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <?php do_action('wpml_add_language_selector'); ?>
    <label class="nav-toggle" for="navtoggle"><i class="ion ion-navicon"></i>MENÜ</label>
    <input type="checkbox" id="navtoggle">
    <nav role="navigation" class="navbar__nav">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav nav--main']);
      endif;
      ?>
    </nav>
  </div>
</header>
