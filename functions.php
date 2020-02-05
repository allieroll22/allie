<?php
//Adds featured images to posts
  add_theme_support('post-thumbnails');

//Add custom menus
function custom_menus(){
  register_nav_menus( array(
    'header-menu' =>  ('Header Menu'),
    'footer-menu' =>  ('Footer Menu')
  ));

}

add_action('init','custom_menus');
//Adds widget areas
function blank_widgets_init(){

  //Header Logo Widget
  register_sidebar( array(
    'name'          =>  ('Logo Image'),
    'id'            =>  'logo-image',
    'description'   =>  'Logo Image on Header',
    'before_widget' =>  '<div class="logo-image-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

  //Hero Image Widget
  register_sidebar( array(
    'name'          =>  ('Hero Image'),
    'id'            =>  'hero-image',
    'description'   =>  'Hero Image on Home Page',
    'before_widget' =>  '<div class="hero-image-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  register_sidebar( array(
    'name'          =>  ('Hero Text'),
    'id'            =>  'hero-text',
    'description'   =>  'Hero Text on Home Page',
    'before_widget' =>  '<div class="hero-text-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

  //About Us Text Block Widget
  register_sidebar( array(
    'name'          =>  ('About Us Text Block'),
    'id'            =>  'about-us',
    'description'   =>  'Widget area for About Us section',
    'before_widget' =>  '<div class="about-us">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
));

  //About Us Image Block Widget
  register_sidebar( array(
    'name'          =>  ('About Us Image Block'),
    'id'            =>  'about-us-image',
    'description'   =>  'Widget area for About Us image section',
    'before_widget' =>  '<div class="about-us-image">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

  //Resume Image Block Widget
  register_sidebar( array(
    'name'          =>  ('Resume PDF Block'),
    'id'            =>  'resume',
    'description'   =>  'Widget area for Resume',
    'before_widget' =>  '<div class="resume-image">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  //Header Logo Widget
  register_sidebar( array(
    'name'          =>  ('Post Image'),
    'id'            =>  'post-images',
    'description'   =>  'Post Images on post pages',
    'before_widget' =>  '<div class="post-images-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

  //Contact Image Widget
  register_sidebar( array(
    'name'          =>  ('Contact Image'),
    'id'            =>  'contact-image',
    'description'   =>  'Image contact page widget area',
    'before_widget' =>  '<div class="contact-image-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

  // Sub Project Header Image
  register_sidebar( array(
    'name'          =>  ('Project Header'),
    'id'            =>  'project-header',
    'description'   =>  'Image project page widget area',
    'before_widget' =>  '<div class="project-header-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Header Text
  register_sidebar( array(
    'name'          =>  ('Project Header Text'),
    'id'            =>  'project-header-text',
    'description'   =>  'Image project page widget area',
    'before_widget' =>  '<div class="project-header-text-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Text
  register_sidebar( array(
    'name'          =>  ('Project Text'),
    'id'            =>  'project-text',
    'description'   =>  'Image contact page widget area',
    'before_widget' =>  '<div class="project-text-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Image
  register_sidebar( array(
    'name'          =>  ('Project Image'),
    'id'            =>  'project-image',
    'description'   =>  'Image contact page widget area',
    'before_widget' =>  '<div class="project-image-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

  // Sub Project Header Text
  register_sidebar( array(
    'name'          =>  ('Project Link Text'),
    'id'            =>  'project-link',
    'description'   =>  'Image project page widget area',
    'before_widget' =>  '<div class="project-link-text-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Header Image
  register_sidebar( array(
    'name'          =>  ('Campbell Header'),
    'id'            =>  'campbell-header',
    'description'   =>  'Image project page widget area',
    'before_widget' =>  '<div class="campbell-header-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Header Text
  register_sidebar( array(
    'name'          =>  ('campbell Header Text'),
    'id'            =>  'campbell-header-text',
    'description'   =>  'Image project page widget area',
    'before_widget' =>  '<div class="campbell-header-text-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Text
  register_sidebar( array(
    'name'          =>  ('campbell Text'),
    'id'            =>  'campbell-text',
    'description'   =>  'Image contact page widget area',
    'before_widget' =>  '<div class="campbell-text-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Image
  register_sidebar( array(
    'name'          =>  ('campbell Image'),
    'id'            =>  'campbell-image',
    'description'   =>  'Image contact page widget area',
    'before_widget' =>  '<div class="campbell-image-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

  // Sub Project Image
  register_sidebar( array(
    'name'          =>  ('campbell gallery'),
    'id'            =>  'campbell-gallery',
    'description'   =>  'Image contact page widget area',
    'before_widget' =>  '<div class="campbell-image-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Header Image
  register_sidebar( array(
    'name'          =>  ('Bob Header'),
    'id'            =>  'bob-header',
    'description'   =>  'Image project page widget area',
    'before_widget' =>  '<div class="bob-header-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Header Text
  register_sidebar( array(
    'name'          =>  ('Bob Header Text'),
    'id'            =>  'bob-header-text',
    'description'   =>  'Image project page widget area',
    'before_widget' =>  '<div class="bob-header-text-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Text
  register_sidebar( array(
    'name'          =>  ('Bob Text'),
    'id'            =>  'bob-text',
    'description'   =>  'Image contact page widget area',
    'before_widget' =>  '<div class="bob-text-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Image
  register_sidebar( array(
    'name'          =>  ('Bob Image'),
    'id'            =>  'bob-image',
    'description'   =>  'Image contact page widget area',
    'before_widget' =>  '<div class="bob-image-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  //Sub Project Gallery
  register_sidebar( array(
    'name'          =>  ('Bob Gallery'),
    'id'            =>  'bob-gallery',
    'description'   =>  'Images project page widget area',
    'before_widget' =>  '<div class="bob-gallery-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

  // Sub Project Header Image
  register_sidebar( array(
    'name'          =>  ('Moni Header'),
    'id'            =>  'Moni-header',
    'description'   =>  'Image project page widget area',
    'before_widget' =>  '<div class="Moni-header-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Header Text
  register_sidebar( array(
    'name'          =>  ('Moni Header Text'),
    'id'            =>  'Moni-header-text',
    'description'   =>  'Image project page widget area',
    'before_widget' =>  '<div class="Moni-header-text-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Text
  register_sidebar( array(
    'name'          =>  ('Moni Text'),
    'id'            =>  'Moni-text',
    'description'   =>  'Image contact page widget area',
    'before_widget' =>  '<div class="Moni-text-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Image
  register_sidebar( array(
    'name'          =>  ('Moni Image'),
    'id'            =>  'Moni-image',
    'description'   =>  'Image contact page widget area',
    'before_widget' =>  '<div class="Moni-image-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  //Sub Project Gallery
  register_sidebar( array(
    'name'          =>  ('Moni Gallery'),
    'id'            =>  'Moni-gallery',
    'description'   =>  'Images project page widget area',
    'before_widget' =>  '<div class="Moni-gallery-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

  // Sub Project Header Image
  register_sidebar( array(
    'name'          =>  ('GoAct Header'),
    'id'            =>  'GoAct-header',
    'description'   =>  'Image project page widget area',
    'before_widget' =>  '<div class="GoAct-header-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Header Text
  register_sidebar( array(
    'name'          =>  ('GoAct Header Text'),
    'id'            =>  'GoAct-header-text',
    'description'   =>  'Image project page widget area',
    'before_widget' =>  '<div class="GoAct-header-text-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Text
  register_sidebar( array(
    'name'          =>  ('GoAct Text'),
    'id'            =>  'GoAct-text',
    'description'   =>  'Image contact page widget area',
    'before_widget' =>  '<div class="GoAct-text-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Image
  register_sidebar( array(
    'name'          =>  ('GoAct Image'),
    'id'            =>  'GoAct-image',
    'description'   =>  'Image contact page widget area',
    'before_widget' =>  '<div class="GoAct-image-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  //Sub Project Gallery
  register_sidebar( array(
    'name'          =>  ('GoAct Gallery'),
    'id'            =>  'GoAct-gallery',
    'description'   =>  'Images project page widget area',
    'before_widget' =>  '<div class="GoAct-gallery-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Header Image
  register_sidebar( array(
    'name'          =>  ('Jackj Header'),
    'id'            =>  'jackj-header',
    'description'   =>  'Image project page widget area',
    'before_widget' =>  '<div class="jackj-header-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Header Text
  register_sidebar( array(
    'name'          =>  ('jackj Header Text'),
    'id'            =>  'jackj-header-text',
    'description'   =>  'Image project page widget area',
    'before_widget' =>  '<div class="jackj-header-text-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Text
  register_sidebar( array(
    'name'          =>  ('jackj Text'),
    'id'            =>  'jackj-text',
    'description'   =>  'Image contact page widget area',
    'before_widget' =>  '<div class="jackj-text-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Image
  register_sidebar( array(
    'name'          =>  ('jackj Image'),
    'id'            =>  'jackj-image',
    'description'   =>  'Image contact page widget area',
    'before_widget' =>  '<div class="jackj-image-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  //Sub Project Gallery
  register_sidebar( array(
    'name'          =>  ('jackj Gallery'),
    'id'            =>  'jackj-gallery',
    'description'   =>  'Images project page widget area',
    'before_widget' =>  '<div class="jackj-gallery-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));


  // Sub Project Header Image
  register_sidebar( array(
    'name'          =>  ('Sponge Header'),
    'id'            =>  'sponge-header',
    'description'   =>  'Image project page widget area',
    'before_widget' =>  '<div class="sponge-header-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Header Text
  register_sidebar( array(
    'name'          =>  ('sponge Header Text'),
    'id'            =>  'sponge-header-text',
    'description'   =>  'Image project page widget area',
    'before_widget' =>  '<div class="sponge-header-text-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Text
  register_sidebar( array(
    'name'          =>  ('sponge Text'),
    'id'            =>  'sponge-text',
    'description'   =>  'Image contact page widget area',
    'before_widget' =>  '<div class="sponge-text-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Image
  register_sidebar( array(
    'name'          =>  ('sponge Image'),
    'id'            =>  'sponge-image',
    'description'   =>  'Image contact page widget area',
    'before_widget' =>  '<div class="sponge-image-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  //Sub Project Gallery
  register_sidebar( array(
    'name'          =>  ('sponge Gallery'),
    'id'            =>  'sponge-gallery',
    'description'   =>  'Images project page widget area',
    'before_widget' =>  '<div class="sponge-gallery-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));


  // Sub Project Header Image
  register_sidebar( array(
    'name'          =>  ('Jack Header'),
    'id'            =>  'jack-header',
    'description'   =>  'Image project page widget area',
    'before_widget' =>  '<div class="jack-header-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Header Text
  register_sidebar( array(
    'name'          =>  ('jack Header Text'),
    'id'            =>  'jack-header-text',
    'description'   =>  'Image project page widget area',
    'before_widget' =>  '<div class="jack-header-text-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Text
  register_sidebar( array(
    'name'          =>  ('jack Text'),
    'id'            =>  'jack-text',
    'description'   =>  'Image contact page widget area',
    'before_widget' =>  '<div class="jack-text-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Image
  register_sidebar( array(
    'name'          =>  ('jack Image'),
    'id'            =>  'jack-image',
    'description'   =>  'Image contact page widget area',
    'before_widget' =>  '<div class="jack-image-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  //Sub Project Gallery
  register_sidebar( array(
    'name'          =>  ('jack Gallery'),
    'id'            =>  'jack-gallery',
    'description'   =>  'Images project page widget area',
    'before_widget' =>  '<div class="jack-gallery-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

  // Sub Project Header Image
  register_sidebar( array(
    'name'          =>  ('Misc Header'),
    'id'            =>  'misc-header',
    'description'   =>  'Image project page widget area',
    'before_widget' =>  '<div class="misc-header-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Header Text
  register_sidebar( array(
    'name'          =>  ('misc Header Text'),
    'id'            =>  'misc-header-text',
    'description'   =>  'Image project page widget area',
    'before_widget' =>  '<div class="misc-header-text-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Text
  register_sidebar( array(
    'name'          =>  ('misc Text'),
    'id'            =>  'misc-text',
    'description'   =>  'Image contact page widget area',
    'before_widget' =>  '<div class="misc-text-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  // Sub Project Image
  register_sidebar( array(
    'name'          =>  ('misc Image'),
    'id'            =>  'misc-image',
    'description'   =>  'Image contact page widget area',
    'before_widget' =>  '<div class="misc-image-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));
  //Sub Project Gallery
  register_sidebar( array(
    'name'          =>  ('misc Gallery'),
    'id'            =>  'misc-gallery',
    'description'   =>  'Images project page widget area',
    'before_widget' =>  '<div class="jack-gallery-widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

  //Sidebar Widget
  register_sidebar( array(
    'name'          =>  ('Sidebar'),
    'id'            =>  'sidebar',
    'description'   =>  'Sidebar widget area',
    'before_widget' =>  '<div class="widget-sidebar">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));


  //FOOTER
  //Left Footer
  register_sidebar( array(
    'name'          =>  ('Left Footer'),
    'id'            =>  'left-footer',
    'description'   =>  'Left widget area in the footer',
    'before_widget' =>  '<div class="widget-footer widget-left">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

  //Middle Footer
  register_sidebar( array(
    'name'          =>  ('Middle Footer'),
    'id'            =>  'middle-footer',
    'description'   =>  'Middle widget area in the footer',
    'before_widget' =>  '<div class="widget-footer widget-middle">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

  //Right Footer
  register_sidebar( array(
    'name'          =>  ('Right Footer'),
    'id'            =>  'right-footer',
    'description'   =>  'Right widget area in the footer',
    'before_widget' =>  '<div class="widget-footer widget-right">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h3 class="widget-title">',
    'after_title'   =>  '</h3>'
  ));

}
add_action('widgets_init','blank_widgets_init');


?>
