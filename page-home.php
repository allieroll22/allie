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
         Hi, I'm Allie.
         I design Web Sites.
      </h1>
    </div>




<?php get_footer(); ?>
