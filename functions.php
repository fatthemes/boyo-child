<?php
/**
 * Boyo child functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package boyo child
 */

// Uncomment line below to load style.css file from child theme directory
//add_action( 'wp_enqueue_scripts', 'boyo_child_enqueue_styles' );

function boyo_child_enqueue_styles() {
    wp_enqueue_style( 'boyo-child-style', get_stylesheet_uri() );
}
