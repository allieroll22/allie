<?php /*Template Name: Contact Page Template*/ ?>

<?php get_header(); ?>

<div class="container">
  <div class=""
  <h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
  <?php
    if(have_posts()){
      while(have_posts()){
        the_post();
        the_content();
      }//end while
    }//ends if
  ?>
</div>


<?php get_footer(); ?>
