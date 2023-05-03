<?php 
/**
 * Template Name: Blog Post
*/
?>

<?php if (have_posts()): ?>
  <?php while (have_posts()): the_post(); ?>
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
    <?php endif; ?>
