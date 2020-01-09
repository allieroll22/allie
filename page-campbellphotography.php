<?php /*Template Name: Sub Project2 Page Template*/ ?>

<?php get_header(); ?>

<div class="container sub-projects">
    <h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

    <div class="header-projects">
      <?php dynamic_sidebar('project2-header-text'); ?>

      <?php dynamic_sidebar('project2-header'); ?>
    </div>

    <div class="row projects">
    <div class="seven columns">
      <?php dynamic_sidebar('project2-text'); ?>
    </div>

    <div class="five columns">
      <?php dynamic_sidebar('project2-image')?>
    </div>
    </div>

    <div class="back-projects">
      <?php dynamic_sidebar('project-link')?>
    </div>


</div>

<?php get_footer(); ?>
