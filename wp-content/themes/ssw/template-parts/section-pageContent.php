<section class="container pageContent">
    <div class="row">
        <article class="col">
            <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    the_content();
                }
            }
            ?>
        </article>
    </div>
</section>