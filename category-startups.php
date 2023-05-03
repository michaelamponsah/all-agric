<?php get_header(); ?>
  <section class="container category" style="padding-top: 10em; padding-bottom: 2em;">
    <h1 class="featured-post-title post-title">Startups</h1>
    <p>
      <?php 
        $page = get_page_by_title( 'Startups' );
        $content = apply_filters('the_content', $page->post_content); 
        echo $content;
      ?>
    </p>
     
  </section>
  <section class="trending stories-wrapper">
    <?php get_template_part('templates/section', 'startups-category') ?>
  </section>
<?php get_footer(); ?>
