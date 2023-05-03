    <?php  
    // Template Name: Featured Post
    ?>

    <?php 
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'orderby' => 'post_date',
        'post_status' => 'publish',
      );
      $arr_posts = new WP_Query( $args );
    ?>

<?php if ($arr_posts->have_posts()): ?>
  <?php while ($arr_posts -> have_posts()): ?>
    <?php   $arr_posts->the_post();  ?>
    <article>
      <?php if(has_post_thumbnail()): ?>
          <a href="<?php the_permalink() ?>">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="thumbanail">
          </a>
      <?php endif; ?>
        <h5 class="post-category"><?php the_category(); ?></h5>
        <a href="<?php the_permalink() ?>">
          <h2 class="featured-post-title">
          <?php  
            echo the_title();  
          ?>
          </h2>
        </a>
        <div class="post-info">
          <p><?php the_author(); ?></p>
        </div>
      </article>
      <?php endwhile; ?>
<?php endif; ?>

<?php wp_reset_query(); ?>
<?php wp_reset_postdata(); ?>
