<?php
// add_image_size( string $name, int $width, int $height, bool|array $crop = false )
// https://developer.wordpress.org/reference/functions/add_image_size/
add_theme_support( 'post-thumbnails' );

add_action( 'after_setup_theme', 'aw_custom_add_image_sizes' );
function aw_custom_add_image_sizes() {
    add_image_size( 'small', 290, 116 );
    add_image_size( 'smartphones', 380, 153 );
    add_image_size( 'tablet', 690, 276 );
    add_image_size( 'smallDesktop', 940, 376 );
    add_image_size( 'smallDesktopCard', 610, 244 );
    add_image_size( 'hd', 1080, 433 );
    add_image_size( 'hdCard', 730, 292 );
    add_image_size( 'fhd', 1920, 768 );

}

add_filter( 'image_size_names_choose', 'aw_custom_add_image_size_names' );
function aw_custom_add_image_size_names( $sizes ) {
  return array_merge( $sizes, array(
    'small' => __( 'Small' ),
    'smartphones' => __( 'Smartphones' ),
    'tablet' => __( 'Tablet' ),
    'smallDesktop' => __( 'Small Desktop' ),
    'smallDesktopCard' => __( 'Small Desktop Card' ),
    'hd' => __( 'HD Desktop' ),
    'hdCard' => __( 'HD Desktop Card' ),
    'fhd' => __( 'FHD Desktop' ),
  ) );
}