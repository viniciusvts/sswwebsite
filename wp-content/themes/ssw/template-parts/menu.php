<nav class="bg-p-dark">
  <div class="container">
    <a class="d-flex" href="/">
      <?php echo(file_get_contents(get_template_directory() . '/assets/img/sswLogowhite.svg')); ?>
    </a>
    <span class="navTogller" data-target="#navMenu">Menu</span>
    <?php
    // https://developer.wordpress.org/reference/functions/wp_nav_menu/#menu-item-css-classes
    wp_nav_menu(
      array(
        'container' => false,
        'theme_location' => 'main',
        'depth' => 1,
        'menu_id' => 'navMenu',
        'menu_class' => 'menu bg-p-dark',
      )
    );
    ?>
  </div>
</nav>