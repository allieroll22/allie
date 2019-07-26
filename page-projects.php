<?php /*Template Name: Projects Page Template*/ ?>

<?php get_header(); ?>

<div class="container projects">
    <h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php echo do_shortcode('[pap_portfolio]'); ?>


</div>

<?php
[pap_portfolio category="5,4,7"]
?>
<?php get_footer(); ?>
