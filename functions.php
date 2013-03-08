<?php
function phpodcast_register_menus() {
    register_nav_menus(
        array( 'footer-menu' => __( 'Footer Menu' ) )
    );
}
add_action( 'init', 'phpodcast_register_menus' );