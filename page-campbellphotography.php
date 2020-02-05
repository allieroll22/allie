<?php /*Template Name: Campbell Page Template*/ ?>


<?php get_header(); ?>

<div class="container sub-projects">
    <h1 class="page-title-projects"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

    <div class="header-projects">
      <?php dynamic_sidebar('campbell-header-text'); ?>

      <?php dynamic_sidebar('campbell-header'); ?>
    </div>

    <div class="row projects">
    <div class="seven columns">
      <?php dynamic_sidebar('campbell-text'); ?>

    </div>

    <div class="five columns projects">
      <?php dynamic_sidebar('campbell-image')?>
    </div>


    <div class="twelve columns button-area">
      <a href="http://www.allieroll.com/projects"><button class="projects">Back to Projects</button></a>
    </div>
</div>
    <?php dynamic_sidebar('campbell-gallery'); ?>





</div>

<?php get_footer(); ?>
