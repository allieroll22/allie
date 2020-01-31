<?php /*Template Name: Jack Johnson Page Template*/ ?>

<?php get_header(); ?>

<div class="container sub-projects">
    <h1 class="page-title-projects"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

    <div class="header-projects">
      <?php dynamic_sidebar('jackj-header-text'); ?>

      <?php dynamic_sidebar('jackj-header'); ?>
    </div>

    <div class="row projects">
    <div class="twelve columns">
      <?php dynamic_sidebar('jackj-text'); ?>
          <a href="http://www.allieroll.com/jack-johnson/" target="_blank" rel="noopener"><button class="website">View the Website</button></a>
          <a href="http://www.allieroll.com/projects"><button class="projects">Back to Projects Website</button></a>
    </div>

    <?php dynamic_sidebar('jackj-gallery'); ?>






</div>

<?php get_footer(); ?>
