<?php get_header(); ?>

<?php if(have_posts()) : ?>
  <?php the_post(); ?>

  <article class="container article-wrapper">
    <div>
      <h5 class="post-category"><?php the_category(); ?></h5>
        <h2 class="featured-post-title post-title"><?php echo the_title(); ?></h2>
      <div class="post-info">
        <p><?php the_author(); ?></p>
        <p><?php the_date(); ?></p>
      </div>
      <?php if(has_post_thumbnail()): ?>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
      <?php endif; ?>
      <div class="article-content">
        <?php the_content(); ?>
      </div>
    </div>

    <div class="share-socials">
    </div>
  </article>
  <br>

  <section class="news-letter">
    <?php get_template_part('templates/section', 'newsletter') ?>
  </section>


  <section class="trending container stories-wrapper">
    <div class="section-title-wrapper">
      <span class="pipe"></span>
      <h2 class="section-title"> Read More</h2>
    </div>

    <?php foreach (get_the_category() as $category): ?>
      <?php if( $category ->name == 'Startups'): ?>
        <?php get_template_part('templates/section', 'startups-category') ?>
      <?php endif; ?>
      <?php if( $category ->name == 'Tech'): ?>
        <?php get_template_part('templates/section', 'tech-category') ?>
      <?php endif; ?>
      <?php if( $category ->name == 'Sustainability'): ?>
        <?php get_template_part('templates/section', 'sustainability-category') ?>
      <?php endif; ?>
      <?php if( $category ->name == 'Farm Eazy'): ?>
        <?php get_template_part('templates/section', 'farmez-category') ?>
      <?php endif; ?>
    <?php endforeach; ?>

  </section>

<?php endif; ?>



<?php get_footer(); ?>
