<?php /*Template Name: Resume Page Template*/ ?>

<?php get_header(); ?>

<div class="container">
    <h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
  <div class="twelve columns">
    <?php dynamic_sidebar('resume');?>
  </div>

  <div class="twelve columns">
  
    <a href="download.php?file=Resume.pdf">Download Resume</a>
</div>
</div>

<?php get_footer(); ?>
