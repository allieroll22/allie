<?php /*Template Name: Blog Page Template*/ ?>

<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="twelve columns single-content">


      <?php
      $args = array('post_type'=>'post');
      // The Query
      $the_query = new WP_Query( $args );

      // The Loop
      if ( $the_query->have_posts() ) {
          echo '<ul>';
          while ( $the_query->have_posts() ) {
              $the_query->the_post(); ?>
              <div class="post-title">
                <h2><a href="<?php the_permalink();?>"> <?php the_title();?></a></h2>
              </div>
              <?php the_post_thumbnail('medium'); ?>
              <?php the_excerpt(); ?>
              <div class="post-info">
                <p>Published: <a href="<?php echo get_day_link($archive_year, $archive_month, $archive_day); ?>"><?php echo get_the_date(); ?> </a></p>
                <p><?php echo "Article written by: " . get_the_author(); ?></p>
              </div>
              <?php
          }
      } else {
          // no posts found
      }
      /* Restore original Post Data */
      wp_reset_postdata();
      ?>


  </div>
</div>
</div>
<?php get_footer(); ?>
