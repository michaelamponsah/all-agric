<?php 
/**
 * Template Name: Blog Post
*/
?>



<?php 

  $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'Climate Change',
    'posts_per_page' => 6,
  );
  $arr_posts = new WP_Query( $args );
?>

<?php if ($arr_posts->have_posts()): ?>
  <?php while ($arr_posts -> have_posts()): ?>
    <?php   $arr_posts->the_post();  ?>
    <div class="category-post-wrapper">
        <div>
          <?php if(has_post_thumbnail()): ?>
            <a href="<?php the_permalink() ?>">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="thumbanail">
            </a>
          <?php endif; ?>
          <h5 class="post-category"><?php the_category(); ?></h5>
          <h2 class="post-title category-post-title">
            <a href="<?php the_permalink() ?>">
              <?php 
                 echo substr(get_the_title(), 0, 50);
                 if(strlen(get_the_title()) > 50) echo "..."; 
              ?>
            </a>
          </h2>
          <div class="post-info">
            <p><?php the_author(); ?></p>
          </div>
        </div>
      </div>
  <?php endwhile; ?>
<?php endif; ?>
<div class="btn-wrap">
<a class="button-outline" href="https://allagricgh.com/category/climate-change/">Read More</a>
</div>

<?php wp_reset_query(); ?>
<?php wp_reset_postdata(); ?>
