<?php /*Template Name: About Page Template*/ ?>

<?php get_header(); ?>

<div class="container about">
    <h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
  <div class="row about">
  <div class="eight columns">
    <?php dynamic_sidebar('about-us'); ?>
  </div>

  <div class="four columns">
    <?php dynamic_sidebar('about-us-image')?>
  </div>
</div>

<?php echo do_shortcode('[gkit id=1]'); ?>

</div>


<?php get_footer(); ?>
