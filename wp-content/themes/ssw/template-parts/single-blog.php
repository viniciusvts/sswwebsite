<?php
global $wp_query;
while($wp_query->have_posts()){
    $wp_query->the_post();
?>
<section class="blogContent">
    <article>
        <?php
        $postID = get_the_id();
        $thumbID = get_post_thumbnail_id($postID);
        $thumbAlt = get_post_meta($thumbID, '_wp_attachment_image_alt', true);
        $medium = get_the_post_thumbnail_url($postID, 'medium');
        $smartphones = get_the_post_thumbnail_url($postID, 'smartphones');
        $tablet = get_the_post_thumbnail_url($postID, 'tablet');
        $smallDesktopCard = get_the_post_thumbnail_url($postID, 'smallDesktopCard');
        $hdCard = get_the_post_thumbnail_url($postID, 'hdCard');
        ?>
        <picture>
            <source srcset="<?php echo($hdCard); ?>" media="(min-width: 1900px)" />
            <source srcset="<?php echo($hdCard); ?>" media="(min-width: 1300px)" />
            <source srcset="<?php echo($smallDesktopCard); ?>" media="(min-width: 1000px)" />
            <source srcset="<?php echo($tablet); ?>" media="(min-width: 768px)" />
            <source srcset="<?php echo($smartphones); ?>" media="(min-width: 400px)" />
            <source srcset="<?php echo($medium); ?>" media="(min-width: 0px)" />
            <img srcset="<?php echo($hdCard); ?>"
                alt="<?php echo($thumbAlt); ?>" loading="lazy"/>
        </picture>
        <?php the_content(); ?>
    </article>
</section>
<?php
}