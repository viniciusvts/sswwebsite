<section class="container blog-feed">
    <div class="row blog-feed">
        <div class="col-lg-8">
            <?php get_template_part('template-parts/blog', 'cards'); ?>
            <?php
            $args = array(
                'screen_reader_text' => ' ',
                'mid_size' => 2,
                'prev_next' => false,
                // 'prev_text' => __('<<'),
                // 'next_text' => __('>>'),
            );
            the_posts_pagination($args);
            ?>
        </div>
        <div class="col-lg-4">
            <?php get_template_part('template-parts/sidebar', 'blog'); ?>
        </div>
    </div>
</section>