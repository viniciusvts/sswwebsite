<nav class="bg-p-dark">
  <div class="container">
    <a class="d-flex" href="/">
      <?php echo(file_get_contents(get_template_directory() . '/assets/img/sswLogowhite.svg')); ?>
    </a>
    <?php
    // https://developer.wordpress.org/reference/functions/wp_nav_menu/#menu-item-css-classes
    wp_nav_menu(
      array(
        'container' => false,
        'theme_location' => 'main',
        'depth' => 1,
      )
    );
    ?>
  </div>
</nav>