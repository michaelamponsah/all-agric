
<?php get_header(); ?>
  <section class="showcase-section container">
    <div class="hero-section">
     <?php get_template_part('templates/featured', 'post') ?>
    </div>
  <?php get_sidebar(); ?>
  </section>

  <section class="container">
    <div class="section-title-wrapper">
      <span class="pipe"></span>
      <h2 class="section-title"> Startups </h2>
    </div>
    <div  class="category  startups-wrapper">
      <?php get_template_part('templates/section', 'startups') ?>
    </div>
  </section>

  <section class="news-letter">
    <?php get_template_part('templates/section', 'newsletter') ?>
  </section>

  <section class="container">
    <div class="section-title-wrapper">
      <span class="pipe"></span>
      <h2 class="section-title"> News </h2>
    </div>
    <div class="category tech-wrapper">
    <?php get_template_part('templates/section', 'news'); ?>
    </div>
  </section>

  <section class="container">
    <div class="section-title-wrapper">
      <span class="pipe"></span>
      <h2 class="section-title"> Farm to Table </h2>
    </div>
    <div class="category farm-to-tbl-wrapper">
      <?php get_template_part('templates/section', 'farm-to-table'); ?>
    </div>
  </section>

  <section class="container">
    <div class="section-title-wrapper">
      <span class="pipe"></span>
      <h2 class="section-title"> Climate Change </h2>
    </div>
    <div class="category sustainability-wrapper">
      <?php get_template_part('templates/section', 'climate'); ?>
    </div>
  </section>

  <section class="container">
    <div class="section-title-wrapper">
      <span class="pipe"></span>
      <h2 class="section-title"> Stories</h2>
    </div>
    <div class="category stories-wrapper">
      <?php get_template_part('templates/section', 'stories'); ?>
    </div>
  </section>

  <?php get_footer(); ?>
