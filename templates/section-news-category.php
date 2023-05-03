<?php 
  // Template Name: News Page
?>




<?php 

  $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'News',
  );
  $arr_posts = new WP_Query( $args );
?>

<?php if ($arr_posts->have_posts()): ?>
  <?php while ($arr_posts -> have_posts()): ?>
    <?php   $arr_posts->the_post();  ?>
    <article class="container trending-post-wrapper">
        <div class="stories trending-post">
          <div class="post-details">
            <div>
              <h5 class="post-category"><?php the_category(); ?></h5>
                <a href="<?php the_permalink() ?>">
                <h2 class="post-title">
                <?php 
                 echo substr(get_the_title(), 0, 50);
                 if(strlen(get_the_title()) > 50) echo "...";  
                ?></h2>
              </a>
              <div class="featured-post-info">
                <p><?php the_author(); ?></p>
              </div>
            </div>
            <div>
              <a href="<?php the_permalink() ?>">
                <p class="story-preface">
                  <?php echo get_the_excerpt(); ?>
                </p>
              </a>
            </div>
          </div>
          <?php if(has_post_thumbnail()): ?>
            <a href="<?php the_permalink() ?>">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="thumbanail">
            </a>
          <?php endif; ?>
        </div>
          </article>
   <?php endwhile; ?>
<?php endif; ?>
<!-- <button class="button-outline" style="text-align: left;">Read more on <?php the_category() ?></button> -->

<?php wp_reset_query(); ?>
<?php wp_reset_postdata(); ?>