<?php /*Template Name: Sub Projects Page Template*/ ?>

<?php get_header(); ?>

<div class="container sub-projects">
    <h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

    <div class="header-projects">
      <?php dynamic_sidebar('project-header-text'); ?>

      <?php dynamic_sidebar('project-header'); ?>
    </div>

    <div class="row projects">
    <div class="seven columns">
      <?php dynamic_sidebar('project-text'); ?>
    </div>

    <div class="five columns">
      <?php dynamic_sidebar('project-image')?>
    </div>
    </div>


</div>

<?php get_footer(); ?>
