<?php /*Template Name: Blog Page Template*/ ?>

<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="twelve columns single-content">
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post();?>
            <h2><?php the_title(); ?></h2>
            <?php the_content();
          }//end while
        }//ends if
      ?>
    </div>


  </div>
</div>
<?php get_footer(); ?>
