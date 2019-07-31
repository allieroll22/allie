<?php /*Template Name: About Page Template*/ ?>

<?php get_header(); ?>

<div class="container about">
    <h1 class="page-page"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
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
