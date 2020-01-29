<?php /*Template Name: Spongebob Page Template*/ ?>

<?php get_header(); ?>

<div class="container sub-projects">
    <h1 class="page-title-projects"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

    <div class="header-projects">
      <?php dynamic_sidebar('sponge-header-text'); ?>

      <?php dynamic_sidebar('sponge-header'); ?>
    </div>

    <div class="row projects">
    <div class="seven columns">
      <?php dynamic_sidebar('sponge-text'); ?>
        <a href="http://www.allieroll.com/spongebob/" target="_blank" rel="noopener"><button class="website">View the Website</button></a>
    </div>

    <div class="five columns projects">
      <?php dynamic_sidebar('sponge-image')?>
    </div>
    </div>

    <?php dynamic_sidebar('sponge-gallery'); ?>

    <div class="back-projects">
      <?php dynamic_sidebar('project-link')?>
    </div>




</div>

<?php get_footer(); ?>
