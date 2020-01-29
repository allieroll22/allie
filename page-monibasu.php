<?php /*Template Name: Moni Basu Page Template*/ ?>

<?php get_header(); ?>

<div class="container sub-projects">
    <h1 class="page-title-projects"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

    <div class="header-projects">
      <?php dynamic_sidebar('moni-header-text'); ?>

      <?php dynamic_sidebar('moni-header'); ?>
      <a href="http://bryanawall.com/wordpress-manual/"><button class="website">View the Website</button></a> 
    </div>

    <div class="row projects">
    <div class="seven columns">
      <?php dynamic_sidebar('moni-text'); ?>
    </div>

    <div class="five columns projects">
      <?php dynamic_sidebar('moni-image')?>
    </div>
    </div>

    <?php dynamic_sidebar('moni-gallery'); ?>

    <div class="back-projects">
      <?php dynamic_sidebar('project-link')?>
    </div>




</div>

<?php get_footer(); ?>
