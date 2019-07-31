<?php /*Template Name: Blog Page Template*/ ?>

<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="twelve columns single-content">
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post();?>
            <h2 class="post-title"><?php the_title(); ?></h2>
            <div class="post-feature"> <?php the_post_thumbnail(); ?>
            </div>
            <div class="post-text">  <?php the_content(); ?> </div>


        <?php  }//end while loop
        } //end if statement

      ?>

      <?php
      $args = array('post_type'=>'post');
      // The Query
      $the_query = new WP_Query( $args );

      // The Loop
      if ( $the_query->have_posts() ) {
          echo '<ul>';
          while ( $the_query->have_posts() ) {
              $the_query->the_post();
              echo '<li>' . get_the_title() . '</li>';
          }
          echo '</ul>';
      } else {
          // no posts found
      }
      /* Restore original Post Data */
      wp_reset_postdata();
      ?>


      <?php global $post; // required
      $args = array('category' => -9); // exclude category 9
      $custom_posts = get_posts($args);
      foreach($custom_posts as $post) : setup_postdata($post);
      ...
      endforeach;
      ?>
  </div>
</div>
</div>
<?php get_footer(); ?>
