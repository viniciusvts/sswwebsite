<?php
global $wp_query;
while($wp_query->have_posts()){
    $wp_query->the_post();
?>
<a href="<?php the_permalink(); ?>" class="d-block blogcards">
    <article>
        <h2 class="text-left"><?php the_title(); ?></h2>
        <?php
        $postID = get_the_id();
        $thumbID = get_post_thumbnail_id($postID);
        $thumbAlt = get_post_meta($thumbID, '_wp_attachment_image_alt', true);
        $small = get_the_post_thumbnail_url($postID, 'small');
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
            <img srcset="<?php echo($small); ?>"
                alt="<?php echo($thumbAlt); ?>" loading="lazy"/>
        </picture>
        <?php the_excerpt(); ?>
    </article>
    <button class="btns outlineprimary">Continue lendo >></button>
</a>
<?php
}