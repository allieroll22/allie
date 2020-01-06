<?php /*Template Name: Home Page Template*/ ?>

<?php get_header(); ?>
<div class="container-home">
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
         <?php dynamic_sidebar('hero-text'); ?>
    </div>

</div>

<?php get_footer(); ?>
