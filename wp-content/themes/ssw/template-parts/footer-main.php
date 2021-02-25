<footer class="bg-p-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-4 c-1">
                <h2>Santana Soluções Web</h2>
                <p>Somos uma empresa especializada em criação de sites.
                    Obtendo resultados efetivos com excelente atendimento.</p>
            </div>
            <div class="col-md-2 offset-md-1 c-2">
                <a class="d-flex" href="/">
                    <?php echo(file_get_contents(get_template_directory() . '/assets/img/sswLogowhite.svg')); ?>
                </a>
            </div>
            <div class="col-md-4 offset-md-1 c-3">
                <h2>Principais links</h2>
                <?php
                // https://developer.wordpress.org/reference/functions/wp_nav_menu/#menu-item-css-classes
                wp_nav_menu(
                array(
                    'container' => false,
                    'theme_location' => 'footer-links',
                    'depth' => 1,
                    'menu_id' => 'footermenu',
                    'menu_class' => 'nav',
                )
                );
                ?>
            </div>
        </div>
    </div>
</footer>