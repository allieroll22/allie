<?php /*Template Name: Home Page Template*/ ?>

<?php get_header(); ?>

<?php
    if(has_post_thumbnail()){ ?>
        <div class="hero-image">
            <?php the_post_thumbnail(); ?>
        </div>
     <?php } ?>
     <div class="hero-image-text">
       <h1 class="hi-text">
         Hi, I'm Allie.</h1>
         <!-- <p class="hero-text">
           I am a web designer </p> -->
         <?php //dynamic_sidebar('hero-text'); ?> 
    </div>
    <div class="container about-home">

      <div class="row about">
      <div class="seven columns">
        <?php dynamic_sidebar('about-us'); ?>
      </div>

      <div class="five columns">
        <?php dynamic_sidebar('about-us-image')?>
      </div>
    </div>
    </div>


<?php get_footer(); ?>
