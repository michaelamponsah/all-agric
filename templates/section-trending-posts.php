<?php 

  $popular_post_by_view = array(
    'meta_key'  => 'wp_post_views_count', // set custom meta key
    'orderby'    => 'meta_value_num',
    'order'      => 'DESC',
    'posts_per_page' => 3
  );

  // Invoke the query
$trending_posts = new WP_Query( $popular_post_by_view );
?>

<?php if ( $trending_posts->have_posts() ) : ?>
    <ul>
        <?php
            while ( $trending_posts->have_posts() ) : $trending_posts->the_post();
            ?>
              <li class="trending-post-wrapper">
                <div class="stories trending-post">
                  <div class="post-details">
                    <h5 class="post-category"><?php the_category(); ?></h5>
                    <a href="">
                      <h2 class="post-title">
                        <a href="<?php the_permalink() ?>">
                          <?php 
                          
                          echo substr(get_the_title(), 0, 50);
                          if(strlen(get_the_title()) > 50) echo "..."; 
                          
                          ?>
                        </a>
                      </h2>
                    </a>
                    <div class="featured-post-info">
                      <p><?php the_author(); ?></p>
                    </div>
                  </div>
                  <div>
                    <?php if(has_post_thumbnail()): ?>
                      <a href="<?php the_permalink() ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="thumbanail" alt="">
                      </a>
                    <?php endif; ?>
                    </div>
                  </div>
                </div>
              </li>
            <?php endwhile; ?>
    </ul>
<?php endif; ?>

<?php wp_reset_query(); ?>
<?php wp_reset_postdata(); ?>