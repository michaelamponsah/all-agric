<?php 
  // Template Name: Terms of Service
?>

<?php get_header() ?>

<section class="container padding-top-5 tos">
    <h1 style="margin: 0.7em 0; font-weight: 900; font-size: 1.8rem;">Terms of Service</h1>
    <div class="section-title-wrapper">
      <span class="pipe"></span>
      <h2 class="section-title">Our Terms</h2>
    </div>
    <p style="color: #fcb900;">Last updates: November, 2022</p>
    <?php 
        $page = get_page_by_title( 'Terms of Service' );
        $content = apply_filters('the_content', $page->post_content); 
        echo $content;
    ?>
</section>

<?php get_footer() ?>