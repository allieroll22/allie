<?php /*Template Name: Contact Page Template*/ ?>

<?php get_header(); ?>

<div class="container">
  <h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
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


<?php get_footer(); ?>
