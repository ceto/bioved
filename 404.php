<main class="main" role="main">
  <?php get_template_part('templates/page', 'header'); ?>
  <div class="thecontent">
    <div class="wrapper wrapper--wide">
      <div class="alert alert-warning">
        <?php _e('Sorry, but the page you were trying to view does not exist.', 'sage'); ?>
      </div>

      <?php get_search_form(); ?>
    </div>
  </div>
</main>