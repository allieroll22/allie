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
         <?php dynamic_sidebar('about-us'); ?>
    </div>
    <div class="container about">

      <div class="row about">
      <div class="eight columns">
        <?php dynamic_sidebar('about-us'); ?>
      </div>

      <div class="four columns">
        <?php dynamic_sidebar('about-us-image')?>
      </div>
    </div>
    </div>





<?php get_footer(); ?>
