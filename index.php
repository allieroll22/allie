<?php get_header(); ?>

<div class="container">
  <div class="row">
    <?php
      if(have_posts()){
        while(have_posts()){
          the_post();?>
          <div class="one-half column posts">
          <div class="post-title">
            <h2><a href="<?php the_permalink();?>"> <?php the_title();?></a></h2>
          </div>
            <p class="category-label"->Category: <?php the_category(); ?></p>
            <?php the_post_thumbnail('medium'); ?>
            <?php the_excerpt(); ?>
            <?php
              $archive_year = get_the_time('Y');
              $archive_month = get_the_time('m');
              $archive_day = get_the_time('d');
            ?>
            <div class="post-info">
              <p>Published: <a href="<?php echo get_day_link($archive_year, $archive_month, $archive_day); ?>"><?php echo get_the_date(); ?> </a></p>
              <p><?php echo "Article written by: " . get_the_author(); ?></p>
            </div>

          </div>
      <?php  }//ends while loop
      }//end if statement
    ?>
  </div>
</div>
<?php get_footer(); ?>
