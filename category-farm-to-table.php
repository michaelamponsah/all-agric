<?php get_header(); ?>
  <section class="container category" style="padding-top: 10em; padding-bottom: 2em;">
    <h1 class="featured-post-title post-title">Farm To Table</h1>
    <p>
    <?php 
        $page = get_page_by_title( 'Farm To Table' );
        $content = apply_filters('the_content', $page->post_content); 
        echo $content;
      ?>
    </p>
  </section>
  <section class="trending container stories-wrapper">
    <?php get_template_part('templates/section', 'farm_to_table-category') ?>
  </section>
  <?php get_footer(); ?>
