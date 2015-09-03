<main class="main" role="main">
  <?php get_template_part('templates/page', 'header'); ?>
  <div class="thecontent">
    <div class="wrapper wrapper--wide">
      <?php get_template_part('templates/content-single', get_post_type()); ?>
    </div>
  </div>
</main>