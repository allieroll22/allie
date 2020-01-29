<?php /*Template Name: Dr Bob Art Page Template*/ ?>

<?php get_header(); ?>

<div class="container sub-projects">
    <h1 class="page-title-projects"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

    <div class="header-projects">
      <?php dynamic_sidebar('bob-header-text'); ?>

      <?php dynamic_sidebar('bob-header'); ?>
    </div>

    <div class="row projects">
    <div class="seven columns">
      <?php dynamic_sidebar('bob-text'); ?>
      <a href="http://www.allieroll.com/dr-bob-art/" target="_blank" rel="noopener"><button class="website">View the Website</button></a>
      <a href="http://www.allieroll.com/dr-bob-art/" target="_blank" rel="noopener"><button class="website">View the Website</button></a>
    </div>

    <div class="five columns projects">
      <?php dynamic_sidebar('bob-image')?>
    </div>
    </div>

    <?php dynamic_sidebar('bob-gallery'); ?>

    <div class="back-projects">
      <?php dynamic_sidebar('project-link')?>
    </div>




</div>

<?php get_footer(); ?>
