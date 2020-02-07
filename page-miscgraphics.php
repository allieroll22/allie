<?php /*Template Name: Misc Graphics design Page Template*/ ?>

<?php get_header(); ?>

<div class="container sub-projects">
    <h1 class="page-title-projects"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

    <div class="header-projects">
      <?php dynamic_sidebar('misc-header-text'); ?>

      <?php dynamic_sidebar('misc-header'); ?>
    </div>

    <div class="row projects">
    <div class="twelve columns projects">
      <?php dynamic_sidebar('misc-text'); ?>
          <?php dynamic_sidebar('misc-gallery'); ?>
          <a href="http://www.allieroll.com/projects"><button class="projects">Back to Projects</button></a>

        </div>

  </div>







</div>

<?php get_footer(); ?>
