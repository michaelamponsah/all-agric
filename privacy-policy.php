<?php 
  // Template Name: Privacy Policy
?>

<?php get_header() ?>

  <section class="container padding-top-5 privacy-policy">
    <h1 style="margin: 0.7em 0; font-weight: 900; font-size: 1.8rem;">Privacy Policy</h1>
    <div class="section-title-wrapper">
      <span class="pipe"></span>
      <h2 class="section-title">Our Policies</h2>
    </div>
    <p style="color: #fcb900;">Last updates: November, 2022</p>
    <?php 
        $page = get_page_by_title( 'Privacy Policy' );
        $content = apply_filters('the_content', $page->post_content); 
        echo $content;
    ?>
  </section>

  <?php get_footer() ?>