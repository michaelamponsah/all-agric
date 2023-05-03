
<?php get_header(); ?>

  <section class="container">
    <br><br> 
    <?php if(have_posts()): ?>
    <div class="section-title-wrapper">
      <span class="pipe"></span>
      <h2 class="section-title"> Search Results </h2>
    </div>
      <?php while ( have_posts() ) : the_post(); ?>
    <div class="category stories-wrapper">
   
          
      <div class="trending-post-wrapper">
      <div class="stories trending-post">
        <div class="post-details">
          <div>
            <h5 class="post-category"><?php the_category(); ?></h5>
            <h2 class="post-title category-post-title">
              <a href="<?php the_permalink() ?>">
                <?php
                
                echo substr(get_the_title(), 0, 50);
                if(strlen(get_the_title()) > 50) echo "..."; 
                
                ?>
              </a>
            </h2>
            <div class="featured-post-info">
              <p><?php the_author(); ?></p>
            </div>
          </div>
          <div>
            <p class="story-preface">
              <a href="<?php the_permalink() ?>">
                <?php echo get_the_excerpt(); ?>
              </a>
            </p>
          </div>
        </div>
        <?php if(has_post_thumbnail()): ?>
          <a href="<?php the_permalink() ?>">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="thumbanail">
          </a>
        <?php endif; ?>
      </div>
    </div>
      <?php endwhile; ?>
      <?php else: ?>
        <div  class="not-found">
          <p>No articles found</p>
          <a href="<?php echo home_url('/'); ?>">
          <span class="material-symbols-outlined bg-toggle-btn" id="theme-toggler" data-theme-toggler>
          arrow_back_ios_new
        </span>
        Home
        </a>
        </div>
    <?php endif; ?>
    </div>
  </section>
<?php get_footer(); ?>


