<header class="pageContent">
    <?php
    $postID = get_the_id();
    $thumbID = get_post_thumbnail_id($postID);
    if($thumbID){
        $thumbAlt = get_post_meta($thumbID, '_wp_attachment_image_alt', true);
        $medium = get_the_post_thumbnail_url($postID, 'medium');
        $smartphones = get_the_post_thumbnail_url($postID, 'smartphones');
        $tablet = get_the_post_thumbnail_url($postID, 'tablet');
        $smallDesktopCard = get_the_post_thumbnail_url($postID, 'smallDesktopCard');
        $hd = get_the_post_thumbnail_url($postID, 'hd');
        $fhd = get_the_post_thumbnail_url($postID, 'fhd');
    ?>
    <picture>
        <source srcset="<?php echo($fhd); ?>" media="(min-width: 1900px)" />
        <source srcset="<?php echo($hd); ?>" media="(min-width: 1300px)" />
        <source srcset="<?php echo($smallDesktopCard); ?>" media="(min-width: 1000px)" />
        <source srcset="<?php echo($tablet); ?>" media="(min-width: 768px)" />
        <source srcset="<?php echo($smartphones); ?>" media="(min-width: 400px)" />
        <source srcset="<?php echo($medium); ?>" media="(min-width: 0px)" />
        <img srcset="<?php echo($hd); ?>"
            alt="<?php echo($thumbAlt); ?>" loading="lazy"/>
    </picture>
    <?php
    } else {
        echo(file_get_contents(get_template_directory() . '/assets/img/headerArt.svg'));
    }
    ?>
    <div class="container">
        <div class="row no-gutters">
            <h1 class="<?php echo($thumbID?'has-img':''); ?>"><?php the_title(); ?></h1>
        </div>
    </div>
</header>