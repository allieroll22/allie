<footer>
  <div class="container footer">
    <div class="row">

      <div class="two-thirds column">
        <?php wp_nav_menu(array(
          'theme-location' => 'footer-menu',
          'container-class'=> 'menu-footer'
        ));
        ?>
      </div>


        <div class="one-third column">
          <?php dynamic_sidebar('right-footer'); ?>
        </div>


    </div>


  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
