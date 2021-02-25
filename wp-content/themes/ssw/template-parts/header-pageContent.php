<header class="pageContent">
    <?php echo(file_get_contents(get_template_directory() . '/assets/img/headerArt.svg')); ?>
    <div class="container">
        <div class="row no-gutters">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="row no-gutters">
            <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    the_content();
                }
            }
            ?>
        </div>
    </div>
</header>