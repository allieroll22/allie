<?php get_header(); ?>

<div class="container">
  <div class="row">
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
  </div>


</div>
<?php get_footer(); ?>
