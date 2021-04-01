<?php
get_header();
get_template_part('template-parts/header', 'page');
?>
<div class="container">
    <div class="row blog-feed">
        <div class="col-lg-8">
            <?php get_template_part('template-parts/single', 'blog'); ?>
        </div>
        <div class="col-lg-4">
            <?php get_template_part('template-parts/sidebar', 'blog'); ?>
        </div>
    </div>
</div>
<?php
get_template_part('template-parts/section', 'cta');
get_footer();